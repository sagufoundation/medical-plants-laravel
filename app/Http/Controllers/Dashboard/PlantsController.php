<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Plant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PlantsController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | adventures
    | index | publish, draft, trash, create, store, show, edit, update, destroy, restore, delete
    |--------------------------------------------------------------------------
    */

    // index | publish

    public function index(Request $request)
    {
        $datas = Plant::where([
            ['local_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('local_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.plants.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = Plant::where([
            ['local_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('local_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.plants.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = Plant::onlyTrashed()->paginate(5);
        return view('dashboard.plants.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.plants.create');
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
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Plant();
                $data->title = $request->title;
                $data->slug = Str::slug($data->title);
                $data->user_id = Auth::user()->id;
                $data->body = $request->body;
                $data->status = $request->status;
                $data->description = $request->description;

                if ($request->picture) {
                    $pictureName = $data->slug .'-'. time() .'.' . $request->picture->extension();
                    $path = public_path('images/tour_adventures');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'images/tour_adventures/' . $pictureName;
                    $request->picture->move(public_path('images/tour_adventures'), $pictureName);
                }

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/adventures/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = Plant::where('id', $id)->first();
        return view('dashboard.plants.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = Plant::where('id', $id)->first();
        return view('dashboard.plants.edit', compact('data'));
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
                'picture.required' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Plant::find($id);

                $data->title = $request->title;
                $data->slug = Str::slug($data->title);
                $data->user_id = Auth::user()->id;
                $data->body = $request->body;
                $data->status = $request->status;
                $data->description = $request->description;

                if ($request->picture) {
                    $pictureName = $data->slug .'-'. time() .'.' . $request->picture->extension();
                    $path = public_path('images/tour_adventures');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'images/tour_adventures/' . $pictureName;
                    $request->picture->move(public_path('images/tour_adventures'), $pictureName);
                }

                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect('dashboard/adventures/' . $data->id . '/show');

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // destroy
    public function destroy($id)
    {
        $data = Plant::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.plants.trash');
    }

    // restore
    public function restore($id)
    {
        $data = Plant::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = Plant::onlyTrashed()->findOrFail($id);
        $path = public_path('images/tour_adventures/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }
        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}

