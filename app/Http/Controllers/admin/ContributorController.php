<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contributor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ContributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = 'Publish';
        $judul = 'Publish';
       $all = Contributor::where('status_contributor', $status)->orderBy('id', 'desc')->get();
       return view('admin.pages.contributor.index', [
        'all' => $all,
        'judul' => $judul,
       ]);
    }

    public function publish()
    {
        $status = 'Publish';
        $judul = 'Publish';
        $all = Contributor::where('status_contributor', $status)->orderBy('id', 'desc')->get();
        return view('admin.pages.contributor.index', [
         'all' => $all,
         'judul' => $judul,
        ]);

    }

    public function review()
    {
        $status = 'Review';
        $judul = 'Review';
        $all = Contributor::where('status_contributor', $status)->orderBy('id', 'desc')->get();
        return view('admin.pages.contributor.index', [
         'all' => $all,
         'judul' => $judul,
        ]);
    }

    public function draft()
    {
        $status = 'Draft';
        $judul = 'Draft';
        $all = Contributor::where('status_contributor', $status)->orderBy('id', 'desc')->get();
        return view('admin.pages.contributor.index', [
         'all' => $all,
         'judul' => $judul,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.contributor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $request->validate([
            'full_name'                 => 'required',
            'email'                     => 'required|email|unique:users,email',
            'address'                   => 'required',
            'city'                      => 'required',
            'descriptions'              => 'required',
            'province'                  => 'required',
            'status_contributor'        => 'required',
            'photo'                     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tahun = date("Y");
        $bulan = date("M");
        //upload photo
        $filename  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('photo')->getClientOriginalName();

        $request->file('photo')->storeAs('public/resource/contributor/'.$tahun.'/'.$bulan,$filename);

        $url = ('storage/public/resource/contributor/'.$tahun.'/'.$bulan.'/'.$filename);

        //create
        $contributor = Contributor::create([
            'full_name'                 => $request->full_name,
            'email'                     => $request->email,
            'address'                   => $request->address,
            'city'                      => $request->city,
            'descriptions'              => $request->descriptions,
            'province'                  => $request->province,
            'status_contributor'        => $request->status_contributor,
            'photo'                     => $url,
            'status_contributor'        => $request->status_contributor,
        ]);

         User::create([
            'name'                      => $request->full_name,
            'email'                     => $request->email,
            'password'                  => Hash::make('1122qqww'),
        ]);

        alert()->success('Store', 'Success !!');

        return redirect()->route('admin.contributor');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Contributor::where('id',$id)->first();
        return view('admin.pages.contributor.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Contributor::where('id', $id)->first();
        return view('admin.pages.contributor.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $tahun = date("Y");
        $bulan = date("M");

        $request->validate([
            'full_name'                 => 'required',
            'address'                   => 'required',
            'city'                      => 'required',
            'descriptions'              => 'required',
            'province'                  => 'required',
            'status_contributor'        => 'required',
            'photo'                     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $data = array(
            'full_name'  => $request->full_name,
            'address'  => $request->address,
            'city'  => $request->city,
            'province'  => $request->province,
            'descriptions'  => $request->descriptions,
            'status_contributor'  => $request->status_contributor,
        );

        if ($request->hasFile('photo'))
        {
            $datalama = Contributor::where('id',$id)->first();
            if($datalama->photo){
                File::delete($datalama->photo);
            }

            $filename  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('photo')->getClientOriginalName();

            $request->file('photo')->storeAs('public/resource/contributor/'.$tahun.'/'.$bulan,$filename);

            $url = ('storage/public/resource/contributor/'.$tahun.'/'.$bulan.'/'.$filename);
            $data['photo'] = $url;
        }

        $update = DB::table('contributors')
              ->where('id', $id)
              ->update($data);

        alert()->success('Update', 'Success !!');
        return redirect()->route('admin.contributor');
    }



    /**
     * DRESTROY
     */
    public function destroy($id)
    {
        $datalama = Contributor::where('id',$id)->first();
            if($datalama->photo){
                File::delete($datalama->photo);
            }
        $deleted = DB::table('contributors')->where('id', '=', $id)->delete();
        if($deleted)
        {
            alert()->success('Delete', 'Success !!');
        }else{
            alert()->error('Error', 'Failed !!');
        }
        return redirect()->back();


    }
}
