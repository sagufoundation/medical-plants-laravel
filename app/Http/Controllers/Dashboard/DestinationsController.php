<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\TourDestinations;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class DestinationsController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | destinations
    | index | publish, draft, trash, create, store, show, edit, update, destroy, restore, delete
    |--------------------------------------------------------------------------
    */

    // index | publish

    public function index(Request $request)
    {
        $datas = TourDestinations::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.destinations.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = TourDestinations::where([
            ['title', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('title', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.destinations.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = TourDestinations::onlyTrashed()->paginate(5);
        return view('dashboard.destinations.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.destinations.create');
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'picture' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'title.required' => 'This is a reaquired field',
                'picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                'picture.max' => 'Files must be a maximum of 2 MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new TourDestinations();

                $data->title = $request->title;
                $data->slug = Str::slug($data->title);
                $data->user_id = Auth::user()->id;
                $data->body = $request->body;
                $data->status = $request->status;
                $data->description = $request->description;


                if ($request->picture) {
                    $pictureName = $data->slug .'-'. time() .'.' . $request->picture->extension();
                    $path = public_path('images/tour_destinations');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'images/tour_destinations/' . $pictureName;
                    $request->picture->move(public_path('images/tour_destinations'), $pictureName);
                }

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/destinations/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = TourDestinations::where('id', $id)->first();
        return view('dashboard.destinations.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = TourDestinations::where('id', $id)->first();
        return view('dashboard.destinations.edit', compact('data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'picture' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'title.required' => 'This is a reaquired field',
                'picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                'picture.max' => 'Files must be a maximum of 2 MB',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = TourDestinations::find($id);

                $data->title = $request->title;
                $data->slug = Str::slug($data->title);
                $data->user_id = Auth::user()->id;
                $data->body = $request->body;
                $data->status = $request->status;
                $data->description = $request->description;

                if ($request->picture) {
                    $pictureName = $data->slug .'-'. time() .'.' . $request->picture->extension();
                    $path = public_path('images/tour_destinations');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'images/tour_destinations/' . $pictureName;
                    $request->picture->move(public_path('images/tour_destinations'), $pictureName);
                }

                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect('dashboard/destinations/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = TourDestinations::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.destinations.trash');
    }

    // restore
    public function restore($id)
    {
        $data = TourDestinations::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = TourDestinations::onlyTrashed()->findOrFail($id);

        $path = public_path('images/tour_destinations/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}
