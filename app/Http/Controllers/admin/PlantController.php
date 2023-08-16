<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

// models
use App\Models\Plant;
use App\Models\Provinces;
use App\Models\Contributor;
use App\Models\Location;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = 'Publish';
        $datas = Plant::where('status', 'publish')->orderBy('id', 'desc')->get();

        return view('admin.pages.plant.index', compact('datas', 'judul'));
    }


    // public function index()
    // {
    //     $judul = 'Publish';
    //     $all = DB::table('plants')
    //         ->selectRaw('plants.id AS id')
    //         ->selectRaw('plants.cover_picture')
    //         ->selectRaw('plants.local_name')
    //         ->selectRaw('plants.taxonomists')
    //         ->selectRaw('plants.treatments')
    //         ->selectRaw('locations.tribes')
    //         ->selectRaw('contributors.full_name')
    //         ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
    //         ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
    //         ->where('plants.status', '=', $judul)
    //         ->orderBy('plants.id', 'desc')
    //         ->get();

    //     // dd($all);
    //     return view('admin.pages.plant.index', [
    //         'all' => $all,
    //         'judul' => $judul,
    //     ]);
    // }

    public function publish()
    {
        $judul = 'Publish';
        $datas = Plant::where('status', 'publish')->orderBy('id', 'desc')->get();

        return view('admin.pages.plant.index', compact('datas', 'judul'));
    }

    public function review()
    {
        $judul = 'Review';
        $all = DB::table('plants')
            ->selectRaw('plants.id AS id')
            ->selectRaw('plants.cover_picture')
            ->selectRaw('plants.local_name')
            ->selectRaw('plants.taxonomists')
            ->selectRaw('plants.treatments')
            ->selectRaw('locations.tribes')
            ->selectRaw('contributors.full_name')
            ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
            ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
            ->where('plants.status', '=', $judul)
            ->orderBy('plants.id', 'desc')
            ->get();

        return view('admin.pages.plant.index', [
            'all' => $all,
            'judul' => $judul,
        ]);
    }

    public function draft()
    {
        $judul = 'Draft';

        $all = DB::table('plants')
            ->selectRaw('plants.id AS id')
            ->selectRaw('plants.cover_picture')
            ->selectRaw('plants.local_name')
            ->selectRaw('plants.taxonomists')
            ->selectRaw('plants.treatments')
            ->selectRaw('locations.tribes')
            ->selectRaw('contributors.full_name')
            ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
            ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
            ->where('plants.status', '=', $judul)
            ->orderBy('plants.id', 'desc')
            ->get();
        return view('admin.pages.plant.index', [
            'all' => $all,
            'judul' => $judul,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $location = DB::table('locations')
            ->where('locations.status', '=', 'Publish')
            ->orderBy('locations.id', 'desc')->get();

        $contributor = DB::table('contributors')
            ->where('contributors.status_contributor', '=', 'Publish')
            ->orderBy('contributors.id', 'desc')->get();

        $provinces = Provinces::get();

        return view(
            'admin.pages.plant.create',
            ['locations' => $location, 'contributors' => $contributor, 'provinces' => $provinces]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_location'                    => 'required',
            'id_contributor'                 => 'required',
            'local_name'                     => 'required',
            'taxonomists'                    => 'required',
            'treatments'                     => 'required',
            'status'                         => 'required',
            'cover_picture'                  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_picture'                => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        $fileNameRandom = Str::slug($request->local_name) . '-' . date('YmdHis');

        // COVER PICTURE
<<<<<<< HEAD
        $filename  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('cover_picture')->getClientOriginalName();
        $request->file('cover_picture')->storeAs('public/resource/plant/'.$tahun.'/'.$bulan, $filename);
        $url = ('storage/resource/plant/'.$tahun.'/'.$bulan.'/'.$filename);

        // GALLERY PICTURE
        $galleryfilename  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('gallery_picture')->getClientOriginalName();
        $request->file('gallery_picture')->storeAs('public/resource/plant/gallery/'.$tahun.'/'.$bulan, $galleryfilename);
        $galleryurl = ('storage/resource/plant/gallery/'.$tahun.'/'.$bulan.'/'.$filename);
=======
        $filename  = $fileNameRandom . '.' . $request->file('cover_picture')->getClientOriginalExtension();
        $request->file('cover_picture')->storeAs('public/resource/plants/' . $tahun . '/' . $bulan, $filename);
        $url = ('storage/resource/plants/' . $tahun . '/' . $bulan . '/' . $filename);

        // GALLERY PICTURE
        $galleryfilename  = $fileNameRandom . '-gallery.' . $request->file('gallery_picture')->getClientOriginalExtension();
        $request->file('gallery_picture')->storeAs('public/resource/plants/' . $tahun . '/' . $bulan, $galleryfilename);
        $galleryurl = ('storage/resource/plants/' . $tahun . '/' . $bulan . '/' . $filename);
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a

        //create
        $plant = Plant::create([
            'id_location' => $request->id_location,
            'id_contributor' => $request->id_contributor,
            'local_name' => $request->local_name,
            'taxonomists' => $request->taxonomists,
            'treatments' => $request->treatments,
            'province' => $request->province,
            'status' => $request->status,
            'cover_picture' => $url,
            'gallery_picture' => $galleryurl,
        ]);

        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.plant');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Plant::first();

        return view('admin.pages.plant.detail', compact('data'));
    }



    // public function show($id)
    // {
    //     $data = DB::table('plants')
    //         ->selectRaw('plants.id AS id')
    //         ->selectRaw('plants.cover_picture')
    //         ->selectRaw('plants.status')
    //         ->selectRaw('plants.gallery_picture')
    //         ->selectRaw('plants.local_name')
    //         ->selectRaw('plants.taxonomists')
    //         ->selectRaw('plants.treatments')
    //         ->selectRaw('locations.tribes')
    //         ->selectRaw('contributors.full_name')
    //         ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
    //         ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
    //         ->where('plants.id', '=', $id)
    //         ->orderBy('plants.id', 'desc')
    //         ->get()->first();

    //     return view('admin.pages.plant.detail', ['data' => $data]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = DB::table('plants')
            ->where('plants.id', '=', $id)
            ->get()->first();

        $location = DB::table('locations')
            ->where('locations.status', '=', 'Publish')
            ->orderBy('locations.id', 'desc')->get();

        $contributor = DB::table('contributors')
            ->where('contributors.status_contributor', '=', 'Publish')
            ->orderBy('contributors.id', 'desc')->get();

        return view('admin.pages.plant.edit', ['data' => $data, 'locations' => $location, 'contributors' => $contributor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_location'                    => 'required',
            'id_contributor'                 => 'required',
            'local_name'                     => 'required',
            'taxonomists'                    => 'required',
            'treatments'                     => 'required',
            'status'                         => 'required',
            // 'cover_picture'                  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'gallery_picture'                => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = array(
            'id_location' => $request->id_location,
            'id_contributor' => $request->id_contributor,
            'local_name' => $request->local_name,
            'taxonomists' => $request->taxonomists,
            'treatments' => $request->treatments,
            'status' => $request->status,
        );
        $tahun = date("Y");
        $bulan = date("M");

        $fileNameRandom = Str::slug($request->local_name) . '-' . date('YmdHis');

        if ($request->hasFile('cover_picture')) {
            $datalama = Plant::where('id', $id)->first();
            if ($datalama->cover_picture) {
                File::delete($datalama->cover_picture);
            }
<<<<<<< HEAD
            $filename         = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('cover_picture')->getClientOriginalName();
            $request->file('cover_picture')->storeAs('public/resource/plant/'.$tahun.'/'.$bulan,$filename);
            $url = ('storage/resource/plant/'.$tahun.'/'.$bulan.'/'.$filename);
=======

            // COVER PICTURE
            $filename  = $fileNameRandom . '.' . $request->file('cover_picture')->getClientOriginalExtension();
            $request->file('cover_picture')->storeAs('public/resource/plants/' . $tahun . '/' . $bulan, $filename);
            $url = ('storage/resource/plants/' . $tahun . '/' . $bulan . '/' . $filename);
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
            $data['cover_picture'] = $url;
        }

        if ($request->hasFile('gallery_picture')) {
            $datalama = Plant::where('id', $id)->first();
            if ($datalama->gallery_picture) {
                File::delete($datalama->gallery_picture);
            }
<<<<<<< HEAD
            $filenamegallery  = 'medicalplant'.'-'.date('Y-m-d-H-i-s').$request->file('gallery_picture')->getClientOriginalName();
            $request->file('gallery_picture')->storeAs('public/resource/plant/gallery'.$tahun.'/'.$bulan,$filenamegallery);
            $urlgallery = ('storage/resource/plant/gallery'.$tahun.'/'.$bulan.'/'.$filenamegallery);
            $data['gallery_picture'] = $urlgallery;
=======

            $galleryfilename  = $fileNameRandom . '-gallery.' . $request->file('gallery_picture')->getClientOriginalExtension();
            $request->file('gallery_picture')->storeAs('public/resource/plants/' . $tahun . '/' . $bulan, $galleryfilename);
            $galleryurl = ('storage/resource/plants/' . $tahun . '/' . $bulan . '/' . $galleryfilename);
            $data['gallery_picture'] = $galleryurl;
>>>>>>> 1ea0269b68e4fceff77b5efe4a0d08c52fb9994a
        }


        $update = DB::table('plants')
            ->where('id', $id)
            ->update($data);

        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.plant');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datalama = Plant::where('id', $id)->first();
        if ($datalama->cover_picture) {
            File::delete($datalama->cover_picture);
        }
        $deleted = DB::table('plants')->where('id', '=', $id)->delete();
        if ($deleted) {
            alert()->success('Done', 'Success !!');
        } else {
            alert()->error('Error', 'Failed !!');
        }
        return redirect()->back();
    }
}
