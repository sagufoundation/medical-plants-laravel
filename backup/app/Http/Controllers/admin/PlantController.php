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
    // INDEX
    public function index()
    {
        $judul = 'Publish';
        $datas = Plant::where('status', 'publish')->orderBy('id', 'desc')->get();

        return view('admin.pages.plant.index', compact('datas', 'judul'));
    }

    // PUBLISH
    public function publish()
    {
        $judul = 'Publish';
        $datas = Plant::where('status', 'publish')->orderBy('id', 'desc')->get();

        return view('admin.pages.plant.index', compact('datas', 'judul'));
    }

    // REVIEW
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

    // DRAFT
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

    // CREATE
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

    // STORE
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

        //create
        $plant = Plant::create([
            'id_location' => $request->id_location,
            'id_contributor' => $request->id_contributor,
            'local_name' => $request->local_name,
            'taxonomists' => $request->taxonomists,
            'treatments' => $request->treatments,
            'province' => $request->province,
            'status' => $request->status,
            // 'cover_picture' => $url,
            // 'gallery_picture' => $galleryurl,
        ]);

        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.plant');
    }

    // SHOW
    public function show($id)
    {
        $data = Plant::first();

        return view('admin.pages.plant.detail', compact('data'));
    }

    // EDIT
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
    
    // UPDATE
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





        // $update = DB::table('plants')
        //     ->where('id', $id)
        //     ->update($data);

        alert()->success('Done', 'Success !!');
        return redirect()->route('admin.plant');
    }
    
    // DESTROY
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
