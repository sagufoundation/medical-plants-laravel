<?php

namespace App\Http\Controllers\Visitor;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

    public function search(Request $request) 
    {
        $search = $request->s;
        $datas = DB::table('plants')->where('');
                
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
    // public function thePlants(Request $request)
    // {

    //     $searchString = null;

    //     $datas = Plant::whereHas('province', function ($query) use ($searchString){
    //         $query->where('name', 'LIKE', '%'.$searchString.'%');
    //     })
    //     ->where([

    //         ['local_name', '!=', Null],
    //         [function ($query) {
    //             if (($s = request()->s)) {
    //                 if (isset(request()->filter) && request()->filter == 'local_name') {
    //                     $query->orWhere('local_name', 'LIKE', '%' . $s . '%')->get();
    //                 } elseif (isset(request()->filter) && request()->filter == 'indonesian_name') {
    //                     $query->orWhere('indonesian_name', 'LIKE', '%' . $s . '%')->get();
    //                 } elseif (isset(request()->filter) && request()->filter == 'latin_name') {
    //                     $query->orWhere('latin_name', 'LIKE', '%' . $s . '%')->get();
    //                 } elseif (isset(request()->filter) && request()->filter == 'taxonomists') {
    //                     $query->orWhere('taxonomists', 'LIKE', '%' . $s . '%')->get();
    //                 } elseif (isset(request()->filter) && request()->filter == 'province') {
    //                     $query->orWhere('id_province', 'LIKE', '%' . $s . '%')->get();
    //                 } else {
    //                     $query->get();
    //                 }
    //             }
    //         }]
    //     ])
    //     ->where('status', 'Publish')->latest()->paginate(8);
    //     return view('visitor.pages.the-plants.index', compact('datas'));
    // }






    public function thePlants(Request $request)
    {        

        $datas = Plant::where([
            ['local_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('local_name', 'LIKE', '%' . $s . '%')
                        // ->orWhere('deskripsi', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->latest('id')->paginate(5);
        return view('visitor.pages.the-plants.index', compact('datas'));
    }

    public function thePlantsDetail($id) {
        $data = Plant::where('slug', $id)->first();

        return view('visitor.pages.the-plants.show', compact('data'));
    }

    public function overview()
    {
        return view('visitor.pages.overview');
    }

    public function howToContribute()
    {
        return view('visitor.pages.how-to-contribute');
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
        return view('auth.login');
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
