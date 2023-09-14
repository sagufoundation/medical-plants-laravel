<?php

namespace App\Http\Controllers\Dashboard;

// models
use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
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
        return view('dashboard.packages.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
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
                'job_title'         => 'required',
                'email'             => 'required|email|unique:users,email',
                'password'          => 'required|confirmed|min:8',
                'status'            => 'required'
            ],
            [
                'job_title.required'     => 'This is a reaquired field',
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

                $input = $request->all();
                $input['password'] = Hash::make($input['password']);
                $input['email_verified_at'] = now();
                $user = User::create($input);
                $user->assignRole($request->input('roles'));

                Alert::toast('Created! This data has been created successfully.', 'success');
                return redirect()->route('dashboard.users');

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
        $user = User::find($id);
        return view('dashboard.users.show',compact('user'));
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

                'job_title.required'     => 'This is a reaquired field',
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
                $account = User::find($id);
                $account->name = $request->name;
                $account->email = $request->email;
                $account->status = $request->status;
                if ($request->password) {
                    $account->password = Hash::make($request->password);
                }
                if ($request->picture) {

                    $imageName = Str::slug($request->name) . '.' . $request->picture->extension();
                    $path = public_path('images/users');
                    if (!empty($account->picture) && file_exists($path . '/' . $account->picture)) :
                        unlink($path . '/' . $account->picture);
                    endif;
                    $account->picture = $imageName;
                    $request->picture->move(public_path('images/users'), $imageName);
                }
                $account->update();
                Alert::toast('Update! This data has been update successfully.', 'success');
                return redirect()->route('dashboard.users');

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
        User::withTrashed()->where('id',$id)->forceDelete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->back();
    }

}
