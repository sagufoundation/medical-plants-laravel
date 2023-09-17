<?php

namespace App\Http\Controllers\Dashboard;

// models
use App\Models\User;

use App\Models\Roles;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // INDEX
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

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();
        return view('dashboard.users.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))->with('i', ($request->input('page', 1) - 1) * 5);

    }

    // DRAFT
    public function draft(Request $request)
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
        ])->where('status','Draft')->latest()->paginate(10);

        $jumlahtrash = User::onlyTrashed()->count();
        $jumlahdraft = User::where('status', 'Draft')->count();
        $datapublish = User::where('status', 'Publish')->count();
        return view('dashboard.users.index',compact('datas','jumlahtrash','jumlahdraft','datapublish'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    // TRASH
    public function trash(){

        $datas = User::onlyTrashed()->paginate(5);
        return view('dashboard.users.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    // CREATE
    public function create()
    {
        $roles  = Role::get();
        return view('dashboard.users.create',compact('roles'));
    }


    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'              => 'required',
                'email'             => 'required|email|unique:users,email',
                'password'          => 'required|confirmed|min:8',
                'status'            => 'required',
                'picture'        => 'image|mimes:jpeg,png,jpg|max:4096',
            ],
            [
                'name.required'     => 'This is a reaquired field',
                'email.required'    => 'This is a reaquired field',
                'email.email'       => 'Email address does not match the format',
                'email.unique'      => 'Email address already in use',
                'password.required' => 'This is a reaquired field',
                'picture.mimes'     => 'Type of this file must be PNG, JPG, JPEG',

                'status.required'   => 'This is a reaquired field',
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
                $data->status = $request->status;

                if ($request->picture) {
                    $pictureName = Str::slug($data->name) .'-'. time() .'.' . $request->picture->extension();
                    $path = public_path('assets-admin/img/users');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'assets-admin/img/users/' . $pictureName;
                    $request->picture->move(public_path('assets-admin/img/users'), $pictureName);
                }
                $data->save();

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect('dashboard/users/' . $data->id . '/show');

            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Failed! Something is wrong', 'error');
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = User::find($id);
        return view('dashboard.users.show',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = User::find($id);
        $roles = Role::all();
        return view('dashboard.users.edit',compact('data','roles'));
    }

    // UPDATE
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
            ],[

                'name.required'     => 'This is a reaquired field',
                'email.required'    => 'This is a reaquired field',
                'email.email'       => 'Email address does not match the format',
                'email.unique'      => 'Email address already in use',
                'password.required' => 'This is a reaquired field',
                'status.required'   => 'This is a reaquired field',
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
                $data->status = $request->status;
                if ($data->password) {
                    $data->password = Hash::make($request->password);
                }
                if ($request->picture) {
                    $pictureName = Str::slug($data->name) .'-'. time() .'.' . $request->picture->extension();
                    $path = public_path('assets-admin/img/users');
                    if (!empty($data->picture) && file_exists($path . '/' . $data->picture)) :
                        unlink($path . '/' . $data->picture);
                    endif;
                    $data->picture = 'assets-admin/img/users/' . $pictureName;
                    $request->picture->move(public_path('assets-admin/img/users'), $pictureName);
                }
                $data->update();
                Alert::toast('Update! This data has been update successfully.', 'success');
                return redirect('dashboard/users/' . $data->id . '/show');
            } catch (\Throwable $th) {
                Alert::toast('Failed', 'error');
                return redirect()->back();
            }
        }


    }

    // DESTROY
    public function destroy($id)
    {
        $data = User::findOrFail($id);

        $data->save();
        User::find($id)->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }


    // RESTORE
    public function restore($id){
        User::withTrashed()->where('id',$id)->restore();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

    // DELETE
    public function delete($id){
        $data = User::onlyTrashed()->findOrFail($id);
        $path = public_path('assets-admin/img/users/' . $data->picture);

        if (file_exists($path)) {
            File::delete($path);
        }

        $data->forceDelete();
        alert()->success('Deleted', 'The data has been permanently deleted!!')->autoclose(1500);
        return redirect()->back();
    }

}
