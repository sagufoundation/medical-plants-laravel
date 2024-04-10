<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

// models
use App\Models\User;
use App\Models\Roles;

class UserController extends Controller
{
    /*
    | INDEX
    | showing table data of published records or "status=publish"
    */ 
    public function index(Request $request)
    {
        $datas = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Publish')->latest()->paginate(10);

        return view('dashboard.users.index',compact('datas'))->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /*
    | DRAFT
    | showing table with data of drafted records "status=trash"
    */ 
    public function draft(Request $request)
    {
        $datas = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query
                        ->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status','Draft')->latest()->paginate(10);

        return view('dashboard.users.index',compact('datas'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /*
    | TRASH
    | showing table with data of soft deleted records "softDelete=true"
    */ 
    public function trash(){

        $datas = User::onlyTrashed()->paginate(10);
        return view('dashboard.users.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /*
    | CREATE
    | showing create page with the form and inputs
    */ 
    public function create()
    {
        $roles  = Role::all();
        return view('dashboard.users.create',compact('roles'));
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
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8',
                'status' => 'required',
                'picture' => 'image|mimes:jpeg,png,jpg|max:4096',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {

                $data = new User();
                $data->name = $request->name;
                $data->slug = Str::slug($data->name);
                $data->email = $request->email;
                $data->password = bcrypt($request->password);
                $data->assignRole($request->roles);
                $data->status = $request->status;

                // picture creation
                if (isset($request->picture)) {

                    // create file name
                    $fileName = Str::slug($data->full_name) .'-'. time() .'.' . $request->picture->extension();

                    // create file path
                    $path = public_path('images/users/' . $data->picture);

                    // delete file if exist
                    if (file_exists($path)) {
                        File::delete($path);
                    }

                    // adding file name into database variable
                    $data->photo = $fileName;

                    // move file into folder path with the file name
                    $request->photo->move(public_path('images/users'), $fileName);
                }

                $data->save();

                alert()->success('Success!', 'Your new entry has been created and added to the system.')->autoclose(3000);
                return to_route('dashboard.users.show', $data->id);

            } catch (\Throwable $th) {
                alert()->error('Action Failed', 'An error occurred while performing the action. Please try again later or contact support for assistance.')->autoclose(3000);
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
        $data = User::find($id);
        return view('dashboard.users.show', compact('data'));
    }

    /*
    | EDIT
    | showing edit page with the form and inputs
    */ 
    public function edit($id)
    {
        $data = User::find($id);
        $roles = Role::all();
        return view('dashboard.users.edit', compact('data','roles'));
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
                'name' => 'required',
                'status' => 'required',
                'email' => 'required|email|unique:users,email,'.$id,
                'password' => 'confirmed',
                'picture' => 'image|mimes:jpeg,png,jpg|max:4096',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = User::find($id);
                $data->name = $request->name;
                $data->slug = Str::slug($data->name);
                $data->email = $request->email;

                if ($data->password) {
                    $data->password = Hash::make($request->password);
                }
                
                $data->assignRole($request->roles);
                $data->status = $request->status;


                // picture creation
                if (isset($request->picture)) {

                    // create file name
                    $fileName = Str::slug($data->full_name) .'-'. time() .'.' . $request->picture->extension();

                    // create file path
                    $path = public_path('images/users/' . $data->picture);

                    // delete file if exist
                    if (file_exists($path)) {
                        File::delete($path);
                    }

                    // adding file name into database variable
                    $data->photo = $fileName;

                    // move file into folder path with the file name
                    $request->photo->move(public_path('images/users'), $fileName);
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

    /*
    | DESTROY
    | deleting data softly
    */ 
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        alert()->success('Moved to Trash', 'Your data has been moved to the trash. It can be recovered if needed')->autoclose(3000);
        return to_route('dashboard.users.trash');
    }

    /*
    | RESTORE
    | restoring data from soft delete
    */ 
    public function restore($id){
        User::withTrashed()->where('id',$id)->restore();

        alert()->success('Data Restored', 'Your data has been successfully restored from the trash. It is now available for use again')->autoclose(3000);
        return redirect()->back();
    }

    /*
    | DELETE
    | deleting permanently
    */ 
    public function delete($id){
        $data = User::onlyTrashed()->findOrFail($id);
        $path = public_path('assets-admin/img/users/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();

        alert()->success('Deleted permanently', 'our data has been permanently deleted from the system. This action cannot be undone')->autoclose(3000);
        return redirect()->back();
    }

}
