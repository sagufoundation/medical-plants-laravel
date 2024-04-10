<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Models\Contributor;

class ContributorsController extends Controller
{
    /*
    | INDEX
    | showing table data of published records or "status=publish"
    */ 
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

    /*
    | DRAFT
    | showing table with data of drafted records "status=trash"
    */ 
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

    /*
    | TRASH
    | showing table with data of soft deleted records "softDelete=true"
    */ 
    public function trash()
    {
        //
        $datas = Contributor::onlyTrashed()->paginate(5);
        return view('dashboard.contributors.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | CREATE
    | showing create page with the form and inputs
    */ 
    public function create()
    {
        return view('dashboard.contributors.create');
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
                'full_name' => 'required',
                'email' => 'required|email|string|unique:contributors,email',
                'photo' => 'image|mimes:png,jpeg,jpg|max:4096',

            ],
            [
                'full_name.required' => 'This is a reaquired field',
                'email.required' => 'This is a reaquired field',
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
                $data->descriptions = $request->descriptions;
                $data->status = $request->status;

                // picture creation
                if (isset($request->photo)) {

                    // create file name
                    $fileName = Str::slug($data->full_name) .'-'. time() .'.' . $request->photo->extension();

                    // crate file path
                    $path = public_path('images/team/' . $data->photo);

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

    /*
    | SHOW
    | showing detail data 
    */ 
    public function show($id)
    {
        $data = Contributor::where('id', $id)->first();
        return view('dashboard.contributors.show', compact('data'));
    }

    /*
    | EDIT
    | showing edit page with the form and inputs
    */ 
    public function edit($id)
    {
        $data = Contributor::where('id', $id)->first();

        return view('dashboard.contributors.edit', compact('data'));
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
                'full_name' => 'required',
                'email' => 'required|email|string|unique:contributors,email,' .$id,
                'photo' => 'image|mimes:png,jpeg,jpg|max:4096',
            ],
            [
                'full_name.required' => 'This is a reaquired field',
                'email.required' => 'This is a reaquired field',
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

    /*
    | DESTROY
    | deleting data softly
    */ 
    public function destroy($id)
    {
        $data = Contributor::find($id);
        $data->delete();
        alert()->success('Trashed', 'Data has been moved to trash!!')->autoclose(1500);
        return to_route('dashboard.contributors.trash');
    }

    /*
    | RESTORE
    | restoring data from soft delete
    */ 
    public function restore($id)
    {
        Contributor::withTrashed()->where('id', $id)->restore();

        alert()->success('Data Restored', 'Your data has been successfully restored from the trash. It is now available for use again')->autoclose(3000);
        return redirect()->back();
    }

    /*
    | DELETE
    | deleting permanently
    */ 
    public function delete($id)
    {
        $data = Contributor::onlyTrashed()->findOrFail($id);
        $path = public_path('images/team/' . $data->photo);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();

        alert()->success('Deleted permanently', 'our data has been permanently deleted from the system. This action cannot be undone')->autoclose(3000);
        return redirect()->back();
    }
}
