<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Plant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contributor;
use App\Models\Location;
use App\Models\Regency;
use App\Models\Province;
use App\Models\Tribes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PlantsController extends Controller
{
    // use File;

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
        $regencies = Regency::where('status','Publish')->get();
        $tribes = Tribes::where('status','Publish')->get();

        return view('dashboard.plants.create',compact('countributors','locations','provinces','regencies','tribes'));
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'local_name' => 'required',
                // 'indonesian_name' => 'required',
                // 'latin_name' => 'required',
                // 'taxonomists' => 'required',
                // 'treatments' => 'required',
                // 'traditional_usage' => 'required',
                // 'known_phytochemical_consituents' => 'required',
                // 'location' => 'required',
                // 'contributor' => 'required',
                // 'province' => 'required',

                // 'gallery_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
                // 'cover_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'local_name.required' => 'This is a reaquired field',
                // 'indonesian_name.required' => 'This is a reaquired field',
                // 'latin_name.required' => 'This is a reaquired field',
                // 'taxonomists.required' => 'This is a reaquired field',
                // 'treatments.required' => 'This is a reaquired field',
                // 'traditional_usage.required' => 'This is a reaquired field',
                // 'known_phytochemical_consituents.required' => 'This is a reaquired field',
                // 'location.required' => 'This is a reaquired field',
                // 'contributor.required' => 'This is a reaquired field',
                // 'province.required' => 'This is a reaquired field',

                // 'gallery_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                // 'cover_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
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

                $data->id_location = $request->id_contributor;
                $data->id_contributor = $request->id_contributor;
                $data->id_province = $request->id_province;
                $data->id_regency = $request->id_regency;
                $data->id_tribe = $request->id_tribe;

                $data->status = $request->status;

                if ($request->cover_picture) {
                    $pictureName = $data->slug .'-single-'. time() .'.' . $request->cover_picture->extension();
                    $path = public_path('images/plants');
                    
                    if (!empty($data->cover_picture) && file_exists($path . '/' . $data->cover_picture)) :
                        unlink($path . '/' . $data->cover_picture);
                    endif;

                    $data->cover_picture = $pictureName;
                    $request->cover_picture->move(public_path('images/plants'), $pictureName);
                }

                if ($request->gallery_picture) {
                    $gallery_picture_name = $data->slug .'-gallery-'. time() .'.' . $request->gallery_picture->extension();
                    $path = public_path('images/plants');
                    
                    if (!empty($data->gallery_picture) && file_exists($path . '/' . $data->gallery_picture)) :
                        unlink($path . '/' . $data->gallery_picture);
                    endif;

                    $data->gallery_picture = $gallery_picture_name;
                    $request->gallery_picture->move(public_path('images/plants'), $gallery_picture_name);
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
        $regencies = Regency::where('status','Publish')->get();
        $tribes = Tribes::where('status','Publish')->get();

        return view('dashboard.plants.edit', compact('countributors','locations','provinces','data','regencies','tribes'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'local_name' => 'required',
                // 'indonesian_name' => 'required',
                // 'latin_name' => 'required',
                // 'taxonomists' => 'required',
                // 'treatments' => 'required',
                // 'traditional_usage' => 'required',
                // 'known_phytochemical_consituents' => 'required',
                // 'location' => 'required',
                // 'contributor' => 'required',
                // 'province' => 'required',

                // 'gallery_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
                // 'cover_picture' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'local_name.required' => 'This is a reaquired field',
                // 'indonesian_name.required' => 'This is a reaquired field',
                // 'latin_name.required' => 'This is a reaquired field',
                // 'taxonomists.required' => 'This is a reaquired field',
                // 'treatments.required' => 'This is a reaquired field',
                // 'traditional_usage.required' => 'This is a reaquired field',
                // 'known_phytochemical_consituents.required' => 'This is a reaquired field',
                // 'location.required' => 'This is a reaquired field',
                // 'contributor.required' => 'This is a reaquired field',
                // 'province.required' => 'This is a reaquired field',

                // 'gallery_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
                // 'cover_picture.mimes' => 'Type of this file must be PNG, JPG, JPEG',
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

                // $data->id_location = $request->id_location;
                // $data->id_province = $request->id_province;
                
                $data->id_regency = $request->id_regency;
                $data->id_tribe = $request->id_tribe;
                $data->id_contributor = $request->id_contributor;

                $data->status = $request->status;

                if ($request->cover_picture) {
                    $pictureName = $data->slug .'-single-'. time() .'.' . $request->cover_picture->extension();
                    $path = public_path('images/plants');
                    
                    if (!empty($data->cover_picture) && file_exists($path . '/' . $data->cover_picture)) :
                        unlink($path . '/' . $data->cover_picture);
                    endif;

                    $data->cover_picture = $pictureName;
                    $request->cover_picture->move(public_path('images/plants'), $pictureName);
                }

                if ($request->gallery_picture) {
                    $gallery_picture_name = $data->slug .'-gallery-'. time() .'.' . $request->gallery_picture->extension();
                    $path = public_path('images/plants');
                    
                    if (!empty($data->gallery_picture) && file_exists($path . '/' . $data->gallery_picture)) :
                        unlink($path . '/' . $data->gallery_picture);
                    endif;

                    $data->gallery_picture = $gallery_picture_name;
                    $request->gallery_picture->move(public_path('images/plants'), $gallery_picture_name);
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

    // edit "image_cover"
    public function edit_image($id)
    {        
        $data = Plant::where('id', $id)->first();
        return view('dashboard.plants.images.edit', compact('data'));
    }

    public function update_images(Request $request, $id) 
    {

        $validator = Validator::make(
            $request->all(),
            [
                // 'local_name' => 'required',
            ],
            [
                // 'local_name.required' => 'This is a reaquired field',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Plant::find($id);

                
                if($request->submit)
                {
                    // dd($request->image);
                    $imageName =  Str::slug($request->submit).'-'.Str::slug($data->local_name).'.' . $request->image->extension();
                    $path = public_path('images/plants/' . $data->id);
                    
                    if (!empty($request->image) && file_exists($path . '/' . $request->image)) :
                        unlink($path . '/' . $request->image);
                    endif;

                    if($request->submit == 'cover') { $data->image_cover = $imageName; }
                    if($request->submit == 'daun') { $data->image_daun = $imageName; }
                    if($request->submit == 'buah') { $data->image_buah = $imageName; }
                    if($request->submit == 'pohon') { $data->image_pohon = $imageName; }
                    if($request->submit == 'bunga') { $data->image_bunga = $imageName; }
                    if($request->submit == 'batang') { $data->image_batang = $imageName; }
                    if($request->submit == 'keseluruhan') { $data->image_keseluruhan = $imageName; }

                    $request->image->move(public_path('images/plants/' . $data->id), $imageName);
                }

                if($request->remove == 'image_cover') { 
                    $imagePath = public_path('images/plants/' . $data->id . '/' . $data->image_cover);
                    File::delete($imagePath);
                    $data->image_cover = null; 
                }

                if($request->remove == 'image_daun') { 
                    $imagePath = public_path('images/plants/' . $data->id . '/' . $data->image_daun);
                    File::delete($imagePath);
                    $data->image_daun = null; 
                }

                if($request->remove == 'image_buah') { 
                    $imagePath = public_path('images/plants/' . $data->id . '/' . $data->image_buah);
                    File::delete($imagePath);
                    $data->image_buah = null; 
                }

                if($request->remove == 'image_pohon') { 
                    $imagePath = public_path('images/plants/' . $data->id . '/' . $data->image_pohon);
                    File::delete($imagePath);
                    $data->image_pohon = null; 
                }

                if($request->remove == 'image_bunga') { 
                    $imagePath = public_path('images/plants/' . $data->id . '/' . $data->image_bunga);
                    File::delete($imagePath);
                    $data->image_bunga = null; 
                }

                if($request->remove == 'image_batang') { 
                    $imagePath = public_path('images/plants/' . $data->id . '/' . $data->image_batang);
                    File::delete($imagePath);
                    $data->image_batang = null; 
                }

                if($request->remove == 'image_keseluruhan') { 
                    $imagePath = public_path('images/plants/' . $data->id . '/' . $data->image_keseluruhan);
                    File::delete($imagePath);
                    $data->image_keseluruhan = null; 
                }

                

                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                // return redirect('dashboard/plants/'.$request->submit.'/' . $data->id . '/edit');
                return redirect()->route('dashboard.plants.edit', $data->id);

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }
    
    // remove image
    public function delete_images(Request $request, $id) 
    {

        $validator = Validator::make(
            $request->all(),
            [
                // 'local_name' => 'required',
            ],
            [
                // 'local_name.required' => 'This is a reaquired field',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Plant::find($id);

                if ($request->image) {
                    $imageName =  Str::slug($request->submit).'-'.Str::slug($data->local_name).'.' . $request->image->extension();
                    $path = public_path('images/plants/' . $data->id);
                    
                    if (!empty($data->image) && file_exists($path . '/' . $data->image)) :
                        unlink($path . '/' . $data->image);
                    endif;

                    if($request->submit == 'cover') { $data->image_cover = ''; }
                    if($request->submit == 'daun') { $data->image_daun = ''; }
                    if($request->submit == 'buah') { $data->image_buah = ''; }
                    if($request->submit == 'pohon') { $data->image_pohon = ''; }
                    if($request->submit == 'bunga') { $data->image_bunga = ''; }
                    if($request->submit == 'batang') { $data->image_batang = ''; }
                    if($request->submit == 'keseluruhan') { $data->image_keseluruhan = ''; }

                    $request->image->move(public_path('images/plants/' . $data->id), $imageName);
                }

                $data->update();

                Alert::toast('Updated! This data has been updated successfully.', 'success');
                // return redirect('dashboard/plants/'.$request->submit.'/' . $data->id . '/edit');
                return redirect()->route('dashboard.plants.edit', $data->id);

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
        $cover_picture = public_path($data->cover_picture);
        $gallery_picture = public_path($data->gallery_picture);

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

