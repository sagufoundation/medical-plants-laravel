<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Models\Plant;
use App\Models\Contributor;
use App\Models\Location;
use App\Models\Regency;
use App\Models\Province;
use App\Models\Tribes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PlantsController extends Controller
{
    /*
    | INDEX
    | showing table data of published records or "status=publish"
    */
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

    /*
    | DRAFT
    | showing table with data of drafted records "status=trash"
    */ 
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

    /*
    | TRASH
    | showing table with data of soft deleted records "softDelete=true"
    */ 
    public function trash(Request $request)
    {
        //
        $datas = Plant::where([
            ['local_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('local_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->onlyTrashed()->paginate(5);
        return view('dashboard.plants.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | CREATE
    | showing create page with the form and inputs
    */ 
    public function create()
    {
        $countributors = Contributor::where('status','Publish')->get();
        $locations = Location::where('status','Publish')->get();
        $provinces = Province::where('status','Publish')->get();
        $regencies = Regency::where('status','Publish')->get();
        $tribes = Tribes::where('status','Publish')->get();

        return view('dashboard.plants.create',compact('countributors','locations','provinces','regencies','tribes'));
    }

    /*
    | STORE
    | storing data to database 
    */ 
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
                $data->villages = $request->villages;

                $data->id_contributor = $request->id_contributor;
                $data->id_regency = $request->id_regency;

                $data->status = $request->status;

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return to_route('dashboard.plants.show', $data->id);

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    /*
    | SHOW
    | showing detail data 
    */ 
    public function show($id)
    {
        $data = Plant::find($id);
        return view('dashboard.plants.show', compact('data'));
    }

    /*
    | EDIT
    | showing edit page with the form and inputs
    */ 
    public function edit($id)
    {
        $data = Plant::find($id);
        $countributors = Contributor::where('status','Publish')->get();
        $locations = Location::where('status','Publish')->get();
        $provinces = Province::where('status','Publish')->get();
        $regencies = Regency::where('status','Publish')->get();
        $tribes = Tribes::where('status','Publish')->get();

        return view('dashboard.plants.edit', compact('countributors','locations','provinces','data','regencies','tribes'));
    }

    /*
    | UPDATE
    | updating data 
    */ 
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
                $data->villages = $request->villages;

                // $data->id_location = $request->id_location;
                // $data->id_province = $request->id_province;
                
                $data->id_contributor = $request->id_contributor;
                $data->id_regency = $request->id_regency;
                // $data->id_tribe = $request->id_tribe;

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
                return redirect()->back();

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // updating images
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

                alert()->success('Data Updated', 'Your data has been successfully updated and saved.')->autoclose(3000);
                return redirect()->back();

            } catch (\Throwable $th) {
                alert()->error('Action Failed', 'An error occurred while performing the action. Please try again later or contact support for assistance.')->autoclose(3000);
                return redirect()->back();
            }
        }
    }
    
    // removing images
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

                alert()->success('Deleted permanently', 'our data has been permanently deleted from the system. This action cannot be undone')->autoclose(3000);
                return redirect()->back();

            } catch (\Throwable $th) {
                alert()->error('Action Failed', 'An error occurred while performing the action. Please try again later or contact support for assistance.')->autoclose(3000);
                return redirect()->back();
            }
        }

    }

    /*
    | DESTROY
    | deleting data softly
    */ 
    public function destroy($id)
    {
        Plant::findOrFail($id)->delete();

        alert()->success('Moved to Trash', 'Your data has been moved to the trash. It can be recovered if needed')->autoclose(3000);
        return to_route('dashboard.plants.trash');
    }

    /*
    | RESTORE
    | restoring data from soft delete
    */ 
    public function restore($id)
    {
        Plant::withTrashed()->where('id',$id)->restore();

        alert()->success('Data Restored', 'Your data has been successfully restored from the trash. It is now available for use again')->autoclose(3000);
        return redirect()->back();
    }

    /*
    | DELETE
    | deleting permanently
    */ 
    public function delete($id)
    {
        $data = Plant::onlyTrashed()->findOrFail($id);

        $image_cover = public_path('images/plants/' . $data->id . '/' . $data->image_cover);
        $image_daun = public_path('images/plants/' . $data->id . '/' . $data->image_daun);
        $image_buah = public_path('images/plants/' . $data->id . '/' . $data->image_buah);
        $image_pohon = public_path('images/plants/' . $data->id . '/' . $data->image_pohon);
        $image_bunga = public_path('images/plants/' . $data->id . '/' . $data->image_bunga);
        $image_batang = public_path('images/plants/' . $data->id . '/' . $data->image_batang);
        $image_keseluruhan = public_path('images/plants/' . $data->id . '/' . $data->image_keseluruhan);

        if (file_exists($image_cover)) { File::delete($image_cover); }
        if (file_exists($image_daun)) { File::delete($image_daun); }
        if (file_exists($image_buah)) { File::delete($image_buah); }
        if (file_exists($image_pohon)) { File::delete($image_pohon); }
        if (file_exists($image_bunga)) { File::delete($image_bunga); }
        if (file_exists($image_batang)) { File::delete($image_batang); }
        if (file_exists($image_keseluruhan)) { File::delete($image_keseluruhan); }

        $data->forceDelete();

        alert()->success('Deleted permanently', 'our data has been permanently deleted from the system. This action cannot be undone')->autoclose(3000);
        return redirect()->back();
    }
}

