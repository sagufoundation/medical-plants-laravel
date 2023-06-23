<?php

namespace App\Http\Controllers\Visitor;

use App\Models\Plant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;

class VisitorController extends Controller
{
    public function __construct()
    {
    }

    // INDEX
    public function index()
    {
        $status = 'Publish';
        $all = DB::table('plants')
            ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
            ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
            ->where('plants.status', '=', $status)
            ->orderBy('plants.id', 'desc')
            ->get();
        return view('visitor.pages.home', ['all' => $all]);
    }

    // public function ___thePlants()
    // {

    //     $status = 'Publish';
    //     $count = DB::table('plants')
    //         ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
    //         ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
    //         ->where('plants.status', '=', $status)
    //         ->orderBy('plants.id', 'desc')
    //         ->count();
    //     return view('visitor.pages.the-plants', ['count' => $count]);
    // }

    // THE PLANTS
    public function thePlants()
    {


        $datas = Plant::where([
            ['local_name', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    if (isset(request()->filter) && request()->filter == 'local_name') {
                        $query->orWhere('local_name', 'LIKE', '%' . $s . '%')->get();
                    }elseif (isset(request()->filter) && request()->filter == 'taxonomists') {
                        $query->orWhere('taxonomists', 'LIKE', '%' . $s . '%')->get();
                    } else {
                        $query->get();
                    }
                }
            }]
        ])->where('status', 'Publish')->latest()->paginate(5);
        return view('visitor.pages.the-plants', compact('datas'));
    }

    public function thePlantsDetail($id) {
        $data = Plant::where('id', $id)->first();

        return view('visitor.pages.detail-plant', compact('data'));
        return view('visitor.pages.detail-plant');
    }

    public function overview()
    {
        return view('visitor.pages.overview');
    }

    public function howToContribute()
    {
        return view('visitor.pages.contributor');
    }

    public function ourSponsors()
    {
        return view('visitor.pages.our-sponsors');
    }

    public function connectWithUs()
    {
        return view('visitor.pages.connect-with-us');
    }

    public function login()
    {
        return view('visitor.pages.login');
    }

    public function json()
    {
        $status = 'Publish';
        $all = DB::table('locations')
            ->leftJoin('icons', 'locations.icon_id', '=', 'icons.id')
            ->where('locations.status', '=', $status)
            ->orderBy('locations.id', 'desc')
            ->get();
        $data_maps = json_encode($all);
        echo $data_maps;
    }

    public function filter(Request $request)
    {
        $keyword = $request->keyword;
        $page = $request->noAwal; // Halaman yang ingin ditampilkan
        $perPage = 8; // Jumlah data per halaman

        $all = DB::table('plants')
            ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
            ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
            ->where('plants.status', '=', 'Publish')
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get();

        $count = $all->count();

        if ($request->choose == 'plant') {
            $all = DB::table('plants')
                ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
                ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
                ->where('plants.status', '=', 'Publish')
                ->Where('plants.local_name', 'like', '%' . $keyword . '%')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->get();
            $count = $all->count();
        }

        if ($request->choose == 'tribe') {
            $all = DB::table('plants')
                ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
                ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
                ->where('plants.status', '=', 'Publish')
                ->Where('locations.tribes', 'like', '%' . $keyword . '%')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->get();
            $count = $all->count();
        }

        if ($request->choose == 'contributor') {
            $all = DB::table('plants')
                ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
                ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
                ->where('plants.status', '=', 'Publish')
                ->Where('contributors.full_name', 'like', '%' . $keyword . '%')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->get();
            $count = $all->count();
        }

        return ['data' => $all, 'count' => $count];
    }

    public function location(Request $request)
    {
        $keyword = $request->keyword;
        $page = $request->noAwal; // Halaman yang ingin ditampilkan
        $perPage = 8; // Jumlah data per halaman
        $lokasi_slug = $request->location;

        $all = DB::table('plants')
            ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
            ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
            ->where('plants.status', '=', 'Publish')
            ->where('locations.slug', '=', $lokasi_slug)
            ->skip(($page - 1) * $perPage)
            ->take($perPage)
            ->get();

        $count = $all->count();

        if ($request->choose == 'plant') {
            $all = DB::table('plants')
                ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
                ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
                ->where('plants.status', '=', 'Publish')
                ->where('locations.slug', '=', $lokasi_slug)
                ->Where('plants.local_name', 'like', '%' . $keyword . '%')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->get();
            $count = $all->count();
        }

        if ($request->choose == 'tribe') {
            $all = DB::table('plants')
                ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
                ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
                ->where('plants.status', '=', 'Publish')
                ->where('locations.slug', '=', $lokasi_slug)
                ->Where('locations.tribes', 'like', '%' . $keyword . '%')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->get();
            $count = $all->count();
        }

        if ($request->choose == 'contributor') {
            $all = DB::table('plants')
                ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
                ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
                ->where('plants.status', '=', 'Publish')
                ->where('locations.slug', '=', $lokasi_slug)
                ->Where('contributors.full_name', 'like', '%' . $keyword . '%')
                ->skip(($page - 1) * $perPage)
                ->take($perPage)
                ->get();
            $count = $all->count();
        }

        return ['data' => $all, 'count' => $count];
    }

    public function tribe($slug)
    {
        $status = '1';
        $data = DB::table('locations')
            ->where('locations.slug', '=', $slug)
            ->get()->first();

        return view('visitor.pages.tribe', ['data' => $data]);
    }

    public function detail_plant($slug)
    {
        $data = DB::table('plants')
            ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
            ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
            ->where('plants.status', '=', 'Publish')
            ->where('plants.slug_plant', '=', $slug)
            ->get()
            ->first();
        return view('visitor.pages.detail-plant', compact('data'));
    }

    public function view()
    {
        return view('b5');
    }
}
