<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Icon::orderBy('id','desc')->get();
        return view('admin.pages.icon.index',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.icon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon_name'                 => 'required',
            'icon_img'                  => 'required|image|mimes:png',
        ]);

        $tahun = date("Y");
        $bulan = date("M");



        //upload icon_img
        $filename  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').'-'.$request->file('icon_img')->getClientOriginalName();


        $url = ('storage/resource/icon/'.$tahun.'/'.$bulan.'/'.$filename);



        $file = $request->file('icon_img');
        $img = Image::make($file);
        $img->resize(30, 20);
        $path = 'storage/resource/icon/'.$tahun.'/'.$bulan.'/'.$filename;
        $img->save($path);



        // $request->file('icon_img')->storeAs('public/resource/icon/'.$tahun.'/'.$bulan.'/'.$filename);

        // $img->save('public/baz.jpg');

        //create slider
        $icon = Icon::create([
            'icon_name'=> $request->icon_name,
            'icon_img'=> $url,
        ]);


        alert()->success('Done', 'Success !!');
        // alert()->success('Title','Lorem Lorem Lorem');

        return redirect()->route('admin.icon');
    }

    /**
     * Display the specified resource.
     */
    public function show(Icon $icon)
    {

        return view('admin.pages.icon.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Icon::where('id',$id)->first();
        return view('admin.pages.icon.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'icon_name'                 => 'required',
            'icon_img'                     => 'image|mimes:png',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        if ($request->hasFile('icon_img'))
        {
            $datalama = Icon::where('id',$id)->first();
            if($datalama->icon_img){
                File::delete($datalama->icon_img);
            }
            $filename  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('icon_img')->getClientOriginalName();
            $request->file('icon_img')->storeAs('public/resource/icon/'.$tahun.'/'.$bulan,$filename);
            $url = ('storage/resource/icon/'.$tahun.'/'.$bulan.'/'.$filename);
            $data['icon_img'] = $url;
        }

        $affected = DB::table('icons')
        ->where('id', $id)
        ->update($data);
        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.icon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datalama = Icon::where('id',$id)->first();
            if($datalama->icon_img){
                File::delete($datalama->icon_img);
            }
        $deleted = DB::table('icons')->where('id', '=', $id)->delete();
        if($deleted)
        {
            alert()->success('Done', 'Success !!');
        }else{
            alert()->error('Error', 'Failed !!');
        }
        return redirect()->back();
    }
}
