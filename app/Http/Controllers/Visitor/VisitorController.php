<?php

namespace App\Http\Controllers\Visitor;

use App\Models\Plant;
use App\Models\Regency;
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
        // $regencies = Regency::all();
        $regencies = Regency::withCount('plant')->get();

        return view('visitor.pages.home',
            [
                'all' => $all,
                'regencies' => $regencies,
            ]
        );
    }

    // SEARCH
    public function search(Request $request)
    {
        $search = $request->s;
        $datas = DB::table('plants')->where('');

    }

    // PLANTS
    public function plants(Request $request)
    {

        $parameter = $request->parameter ?? 'latin_name';
        $datas = Plant::where([
            ['latin_name', '!=', Null],
            [function ($query) use ($request, $parameter) {
                if (($s = $request->s)) {
                    $query->orWhere($parameter, 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->where('status', 'Publish')->latest('id')->paginate(10);

        return view('visitor.pages.the-plants.index', compact('datas','request'));
    }

    // PLANTS BY REGENCIES
    public function plantsByRegency(Request $request, $regency)
    {

        $status = 'Publish';
        $datas = DB::table('plants')
            ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
            ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
            ->join('regencies', 'plants.id_regency', '=', 'regencies.id')
            ->select('plants.*', 'regencies.name')
            ->where('plants.status', '=', $status)
            ->where('regencies.slug', '=', $regency)
            ->orderBy('plants.id', 'desc')
            ->paginate();

        $regencyDetail = Regency::where('slug', $regency)->first();



        if($datas) {
                return view('visitor.pages.the-plants.index',
                [
                    'datas' => $datas,
                    // 'regencies' => $regencies,
                    'regencyDetail' => $regencyDetail
                ]
            );
        } else {
            return redirect('plants');
        }

        // return view('visitor.pages.the-plants.index', compact('datas'));
    }

    // PLANT DETAIL
    public function plantsDetail($id) {
        $data = Plant::where('id', $id)->first();
        if($data) {
            return view('visitor.pages.the-plants.show', compact('data'));
        } else {
            return redirect('plants');
        }
    }

    // PAGE > OVERVIEW
    public function overview()
    {
        return view('visitor.pages.overview');
    }

    // PAGE > HOT TO CONTRIBUTE
    public function howToContribute()
    {
        return view('visitor.pages.how-to-contribute');
    }

    // PAGE > OUR SPONSORS
    public function ourSponsors()
    {
        return view('visitor.pages.our-sponsors');
    }

    // PAGE > CONNECT WITH US
    public function connectWithUs()
    {
        return view('visitor.pages.connect-with-us');
    }

    // PAGE > PRIVACY
    public function privacy()
    {
        return view('visitor.pages.privacy');
    }

    // PAGE > TERMS
    public function terms()
    {
        return view('visitor.pages.terms');
    }

    // PAGE > LOGIN
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
