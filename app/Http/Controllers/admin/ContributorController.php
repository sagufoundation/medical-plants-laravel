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
        $status = '1';
        $judul = 'Publish';
       $all = Contributor::where('status_contributor', $status)->orderBy('id', 'desc')->get();
       return view('admin.pages.contributor.index', [
        'all' => $all,
        'judul' => $judul,
       ]);
    }

    public function publish()
    {
        $status = '1';
        $judul = 'Publish';
        $all = Contributor::where('status_contributor', $status)->orderBy('id', 'desc')->get();
        return view('admin.pages.contributor.index', [
         'all' => $all,
         'judul' => $judul,
        ]);

    }

    public function review()
    {
        $status = '2';
        $judul = 'Review';
        $all = Contributor::where('status_contributor', $status)->orderBy('id', 'desc')->get();
        return view('admin.pages.contributor.index', [
         'all' => $all,
         'judul' => $judul,
        ]);
    }

    public function draft()
    {
        $status = '3';
        $judul = 'draft';
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

        $url = ('storage/resource/contributor/'.$tahun.'/'.$bulan.'/'.$filename);

        //create
        $contributor = Contributor::create([
            'full_name'=> $request->full_name,
            'email'=> $request->email,
            'address'=> $request->address,
            'city'=> $request->city,
            'descriptions'=> $request->descriptions,
            'province'=> $request->province,
            'status_contributor'=> $request->status_contributor,
            'photo'=> $url,
            'status_contributor'=> $request->status_contributor,
        ]);

         User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make('1122qqww'),
        ]);

        alert()->success('Done', 'Success !!');
        // alert()->success('Title','Lorem Lorem Lorem');

        return redirect()->route('admin.contributor');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $data = Contributor::where('slug',$slug)->first();
        // dd($data);
        return view('admin.pages.contributor.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $data = Contributor::where('slug',$slug)->first();
        return view('admin.pages.contributor.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $slug)
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
            $datalama = Contributor::where('slug',$slug)->first();
            if($datalama->photo){
                File::delete($datalama->photo);
            }

            $filename  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('photo')->getClientOriginalName();

            $request->file('photo')->storeAs('public/resource/contributor/'.$tahun.'/'.$bulan,$filename);

            $url = ('storage/resource/contributor/'.$tahun.'/'.$bulan.'/'.$filename);
            $data['photo'] = $url;
        }

        $update = DB::table('contributors')
              ->where('slug', $slug)
              ->update($data);

        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.contributor');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $datalama = Contributor::where('slug',$slug)->first();
            if($datalama->photo){
                File::delete($datalama->photo);
            }
        $deleted = DB::table('contributors')->where('slug', '=', $slug)->delete();
        if($deleted)
        {
            alert()->success('Done', 'Success !!');
        }else{
            alert()->error('Error', 'Failed !!');
        }
        return redirect()->back();


    }
}
