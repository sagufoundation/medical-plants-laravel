<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Icon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = '1';
        $judul = 'Publish';
        $all = DB::table('locations')
                ->leftJoin('icons', 'locations.icon_id', '=', 'icons.id')
                ->where('locations.status','=',$status)
                ->orderBy('locations.id', 'desc')
                ->get();
        $data_maps = json_encode($all);


       return view('admin.pages.location.index', [
        'all' => $all,
        'judul' => $judul,
        'data_maps' => $data_maps

       ]);
    }

    public function json()
    {
        $status = '1';
        $all = DB::table('locations')
        ->leftJoin('icons', 'locations.icon_id', '=', 'icons.id')
        ->where('locations.status','=',$status)
        ->orderBy('locations.id', 'desc')
        ->get();
        $data_maps = json_encode($all);

        foreach ($all as $key => $all) {
            $data[] = [
                'id' => $all->id,
                'tribes' => $all->tribes,
                'long' => $all->long,
                'lat' => $all->lat,
                'lat' => $all->lat,
                'img_icon' => $all->icon_img,
            ];
        }
        // return $data;
        echo $data_maps;
    }

    public function publish()
    {
        $status = '1';
        $judul = 'Publish';
         $all = DB::table('locations')
                ->leftJoin('icons', 'locations.icon_id', '=', 'icons.id')
                ->where('locations.status','=',$status)
                ->orderBy('locations.id', 'desc')
                ->get();

        return view('admin.pages.location.index', [
         'all' => $all,
         'judul' => $judul,
        ]);

    }

    public function review()
    {
        $status = '2';
        $judul = 'Review';
         $all = DB::table('locations')
                ->leftJoin('icons', 'locations.icon_id', '=', 'icons.id')
                ->where('locations.status','=',$status)
                ->orderBy('locations.id', 'desc')
                ->get();

        return view('admin.pages.location.index', [
         'all' => $all,
         'judul' => $judul,
        ]);
    }

    public function draft()
    {
        $status = '3';
        $judul = 'Draft';
         $all = DB::table('locations')
                ->leftJoin('icons', 'locations.icon_id', '=', 'icons.id')
                ->where('locations.status','=',$status)
                ->orderBy('locations.id', 'desc')
                ->get();

        return view('admin.pages.location.index', [
         'all' => $all,
         'judul' => $judul,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $icons = DB::table('icons')->get();
        return view('admin.pages.location.create',['icons' => $icons]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon_id'                 => 'required',
            'tribes'                   => 'required',
            'desc'                      => 'required',
            'long'                       => 'required',
            'lat'                  => 'required',
            // 'link'        => 'required',
            'status'        => 'required',
        ]);


        //create
        $location = Location::create([
            'icon_id'=> $request->icon_id,
            'tribes'=> $request->tribes,
            'desc'=> $request->desc,
            'long'=> $request->long,
            'lat'=> $request->lat,
            'province'=> $request->province,
            'link'=> $request->link,
            'status'=> $request->status,
        ]);

        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.location');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $all = DB::table('locations')
        ->where('locations.slug','=',$slug)
        ->orderBy('locations.id', 'desc')
        ->get()->first();

        $icons = DB::table('icons')->get();

        return view('admin.pages.location.detail',['data' => $all, 'icons' => $icons]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $all = DB::table('locations')
        ->where('locations.slug','=',$slug)
        ->orderBy('locations.id', 'desc')
        ->get()->first();

        $icons = DB::table('icons')->get();

        return view('admin.pages.location.edit',['data' => $all, 'icons' => $icons]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $slug)
    {
        $request->validate([
            'icon_id'                 => 'required',
            'tribes'                   => 'required',
            'desc'                      => 'required',
            'long'                       => 'required',
            'lat'                  => 'required',
            // 'link'        => 'required',
            'status'        => 'required',
        ]);


        //create
        $data = array(
            'icon_id'=> $request->icon_id,
            'tribes'=> $request->tribes,
            'desc'=> $request->desc,
            'long'=> $request->long,
            'lat'=> $request->lat,
            'link'=> $request->link,
            'status'=> $request->status,
        );

        $update = DB::table('locations')
        ->where('slug', $slug)
        ->update($data);

        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.location');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $deleted = DB::table('locations')->where('slug', '=', $slug)->delete();
        if($deleted)
        {
            alert()->success('Done', 'Success !!');
        }else{
            alert()->error('Error', 'Failed !!');
        }
        return redirect()->back();
    }
}
