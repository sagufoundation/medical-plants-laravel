<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Plant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contributor;
use App\Models\Location;
use App\Models\Province;
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
        $countributors = Contributor::where('status','Publish')->get();
        $locations = Location::where('status','Publish')->get();
        $provinces = Province::where('status','Publish')->get();

        return view('dashboard.plants.create',compact('countributors','locations','provinces'));
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'local_name' => 'required',
                'indonesian_name' => 'required',
                'latin_name' => 'required',
                'taxonomists' => 'required',
                'treatments' => 'required',
                'traditional_usage' => 'required',
                'known_phytochemical_consituents' => 'required',
                'location' => 'required',
                'contributor' => 'required',
                'province' => 'required',

                'gallery_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
                'cover_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'local_name.required' => 'This is a reaquired field',
                'indonesian_name.required' => 'This is a reaquired field',
                'latin_name.required' => 'This is a reaquired field',
                'taxonomists.required' => 'This is a reaquired field',
                'treatments.required' => 'This is a reaquired field',
                'traditional_usage.required' => 'This is a reaquired field',
                'known_phytochemical_consituents.required' => 'This is a reaquired field',
                'location.required' => 'This is a reaquired field',
                'contributor.required' => 'This is a reaquired field',
                'province.required' => 'This is a reaquired field',

                'gallery_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                'cover_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Plant();
                $data->local_name = $request->local_name;
                $data->slug = Str::slug($data->local_name);
                $data->indonesian_name = $request->indonesian_name;
                $data->latin_name = $request->latin_name;
                $data->taxonomists = $request->taxonomists;
                $data->treatments = $request->treatments;
                $data->traditional_usage = $request->traditional_usage;
                $data->known_phytochemical_consituents = $request->known_phytochemical_consituents;

                $data->id_location = $request->location;
                $data->id_contributor = $request->contributor;
                $data->id_province = $request->province;
                $data->status = $request->status;

                if ($request->cover_picture) {
                    $pictureName = $data->slug .'-'. time() .'.' . $request->cover_picture->extension();
                    $path = public_path('seeds/plants');
                    if (!empty($data->cover_picture) && file_exists($path . '/' . $data->cover_picture)) :
                        unlink($path . '/' . $data->cover_picture);
                    endif;
                    $data->cover_picture = 'seeds/plants/' . $pictureName;
                    $request->cover_picture->move(public_path('seeds/plants'), $pictureName);
                }
                if ($request->gallery_picture) {
                    $pictureName = $data->slug .'-'. time() .'.' . $request->gallery_picture->extension();
                    $path = public_path('seeds/plants');
                    if (!empty($data->gallery_picture) && file_exists($path . '/' . $data->gallery_picture)) :
                        unlink($path . '/' . $data->gallery_picture);
                    endif;
                    $data->gallery_picture = 'seeds/plants/' . $pictureName;
                    $request->gallery_picture->move(public_path('seeds/plants'), $pictureName);
                }

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/plants/' . $data->id . '/show');

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
        $countributors = Contributor::where('status','Publish')->get();
        $locations = Location::where('status','Publish')->get();
        $provinces = Province::where('status','Publish')->get();
        return view('dashboard.plants.edit', compact('countributors','locations','provinces','data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'local_name' => 'required',
                'indonesian_name' => 'required',
                'latin_name' => 'required',
                'taxonomists' => 'required',
                'treatments' => 'required',
                'traditional_usage' => 'required',
                'known_phytochemical_consituents' => 'required',
                'location' => 'required',
                'contributor' => 'required',
                'province' => 'required',

                'gallery_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
                'cover_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'local_name.required' => 'This is a reaquired field',
                'indonesian_name.required' => 'This is a reaquired field',
                'latin_name.required' => 'This is a reaquired field',
                'taxonomists.required' => 'This is a reaquired field',
                'treatments.required' => 'This is a reaquired field',
                'traditional_usage.required' => 'This is a reaquired field',
                'known_phytochemical_consituents.required' => 'This is a reaquired field',
                'location.required' => 'This is a reaquired field',
                'contributor.required' => 'This is a reaquired field',
                'province.required' => 'This is a reaquired field',

                'gallery_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                'cover_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Plant::find($id);

                $data->local_name = $request->local_name;
                $data->slug = Str::slug($data->local_name);
                $data->indonesian_name = $request->indonesian_name;
                $data->latin_name = $request->latin_name;
                $data->taxonomists = $request->taxonomists;
                $data->treatments = $request->treatments;
                $data->traditional_usage = $request->traditional_usage;
                $data->known_phytochemical_consituents = $request->known_phytochemical_consituents;

                $data->id_location = $request->location;
                $data->id_contributor = $request->contributor;
                $data->id_province = $request->province;
                $data->status = $request->status;

                if ($request->cover_picture) {
                    $pictureName = $data->slug .'-'. time() .'.' . $request->cover_picture->extension();
                    $path = public_path('seeds/plants');
                    if (!empty($data->cover_picture) && file_exists($path . '/' . $data->cover_picture)) :
                        unlink($path . '/' . $data->cover_picture);
                    endif;
                    $data->cover_picture = 'seeds/plants/' . $pictureName;
                    $request->cover_picture->move(public_path('seeds/plants'), $pictureName);
                }

                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                return redirect('dashboard/plants/' . $data->id . '/show');

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
        $cover_picture = public_path('seeds/plants/' . $data->cover_picture);
        $gallery_picture = public_path('seeds/plants/' . $data->gallery_picture);

        if (file_exists($cover_picture)) {
            File::delete($cover_picture);
        }
        if (file_exists($gallery_picture)) {
            File::delete($gallery_picture);
        }
        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}

