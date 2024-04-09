<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\Contributor;
use Illuminate\Support\Str;

class ContributorsController extends Controller
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
        $datas = Contributor::where([
            ['full_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('full_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(5);

        return view('dashboard.contributors.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // draft
    public function draft(Request $request)
    {
        $datas = Contributor::where([
            ['full_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('full_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Draft')->latest('id')->paginate(5);

        return view('dashboard.contributors.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // trash
    public function trash()
    {
        //
        $datas = Contributor::onlyTrashed()->paginate(5);
        return view('dashboard.contributors.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // create
    public function create()
    {
        return view('dashboard.contributors.create');
    }

    // store
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'full_name' => 'required',
                'email' => 'required|email|string|unique:contributors,email',
                // 'address' => 'required',
                // 'city' => 'required',
                // 'province' => 'required',
                'photo' => 'image|mimes:png,jpeg,jpg|max:4096',

            ],
            [
                'full_name.required' => 'This is a reaquired field',
                'email.required' => 'This is a reaquired field',
                // 'address.required' => 'This is a reaquired field',
                // 'city.required' => 'This is a reaquired field',
                // 'province.required' => 'This is a reaquired field',
                'photo.mimes' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = new Contributor();
                $data->full_name = $request->full_name;
                $data->slug = Str::slug($data->full_name);
                $data->email = $request->email;
                $data->address = $request->address;
                // $data->city = $request->city;
                // $data->province = $request->province;
                $data->descriptions = $request->descriptions;
                $data->status = $request->status;

                // if ($request->photo) {
                //     $pictureName = Str::slug($data->full_name) .'-'. time() .'.' . $request->photo->extension();
                //     $path = public_path('images/team');
                //     if (!empty($data->photo) && file_exists($path . '/' . $data->photo)) :
                //         unlink($path . '/' . $data->photo);
                //     endif;
                //     $data->photo = $pictureName;
                //     $request->photo->move(public_path('images/team'), $pictureName);
                // }

                // picture creation
                if (isset($request->photo)) {

                    // create file name
                    $fileName = Str::slug($data->full_name) .'-'. time() .'.' . $request->photo->extension();

                    // crate file path
                    $path = public_path('images/team/' . $data->photo);

                    // dd($path);

                    // delete file if exist
                    if (file_exists($path)) {
                        File::delete($path);
                    }

                    // adding file name into database variable
                    $data->photo = $fileName;

                    // move file into folder path with the file name
                    $request->photo->move(public_path('images/team'), $fileName);
                }

                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return to_route('dashboard.contributors.show', $data->id);

            } catch (\Throwable $th) {
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // show

    public function show($id)
    {
        $data = Contributor::where('id', $id)->first();
        return view('dashboard.contributors.show', compact('data'));
    }

    // edit
    public function edit($id)
    {
        $data = Contributor::where('id', $id)->first();

        return view('dashboard.contributors.edit', compact('data'));
    }

    // update

    public function update(Request $request, $id)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'full_name' => 'required',
                'email' => 'required|email|string|unique:contributors,email,' .$id,
                // 'address' => 'required',
                // 'city' => 'required',
                // 'province' => 'required',
                'photo' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'full_name.required' => 'This is a reaquired field',
                'email.required' => 'This is a reaquired field',
                // 'address.required' => 'This is a reaquired field',
                // 'city.required' => 'This is a reaquired field',
                // 'province.required' => 'This is a reaquired field',
                'photo.mimes' => 'Type of this file must be PNG, JPG, JPEG',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Contributor::find($id);

                $data->full_name = $request->full_name;
                $data->slug = Str::slug($data->full_name);
                $data->email = $request->email;
                $data->address = $request->address;
                // $data->city = $request->city;
                // $data->province = $request->province;
                $data->descriptions = $request->descriptions;
                $data->status = $request->status;

                // if ($request->photo) {
                //     $pictureName = Str::slug($data->full_name) .'-'. time() .'.' . $request->photo->extension();
                //     $path = public_path('images/team/');
                //     if (!empty($data->photo) && file_exists($path . '/' . $data->photo)) :
                //         unlink($path . '/' . $data->photo);
                //     endif;
                //     $data->photo = $pictureName;
                //     $request->photo->move(public_path('images/team'), $pictureName);
                // }

                // picture creation
                if (isset($request->photo)) {

                    // create file name
                    $fileName = Str::slug($data->full_name) .'-'. time() .'.' . $request->photo->extension();

                    // crate file path
                    $path = public_path('images/team/' . $data->photo);

                    // dd($path);

                    // delete file if exist
                    if (file_exists($path)) {
                        File::delete($path);
                    }

                    // adding file name into database variable
                    $data->photo = $fileName;

                    // move file into folder path with the file name
                    $request->photo->move(public_path('images/team'), $fileName);
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

    // destroy
    public function destroy($id)
    {
        $data = Contributor::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.contributors.trash');
    }

    // restore
    public function restore($id)
    {
        $data = Contributor::onlyTrashed()->where('id', $id);
        $data->restore();
        alert()->success('Restored', 'Data has been restored!!')->autoclose(1500);
        return redirect()->back();
    }

    // delete
    public function delete($id)
    {
        $data = Contributor::onlyTrashed()->findOrFail($id);
        $path = public_path('images/team/' . $data->photo);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }
}
