<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $status = '1';
        $all = DB::table('plants')
        ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
        ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
        ->where('plants.status','=',$status)
        ->orderBy('plants.id', 'desc')
        ->get();
        return view('user.pages.dashboard',['all' => $all]);
    }

    public function plant()
    {
        return view('user.pages.plant');
    }

    public function contributor()
    {
        return view('user.pages.contributor');
    }

    public function overview()
    {
        return view('user.pages.overview');
    }

    public function sponsor()
    {
        return view('user.pages.sponsor');
    }

    public function connent()
    {
        return view('user.pages.connent');
    }

    public function login()
    {
        return view('user.pages.login');
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

    public function filter(Request $request)
    {
        $keyword = $request->keyword;
        $all = DB::table('plants')
        ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
        ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
        ->where('plants.status','=',1)
        ->where(function($query) use ($keyword){
            $query->orWhere('plants.local_name', 'like', '%' . $keyword . '%')
                ->orWhere('plants.taxonomists', 'like', '%' . $keyword . '%')
                ->orWhere('locations.tribes', 'like', '%' . $keyword . '%')
                ->orWhere('contributors.full_name', 'like', '%' . $keyword . '%');
        });
        if($request->choose === 'plant' )
        {
            $all->orderBy('plants.local_name', 'asc');
        }elseif($request->choose === 'tribe')
        {
            $all->orderBy('locations.tribes', 'asc');
        }elseif($request->choose === 'contributor')
        {
            $all->orderBy('contributors.full_name', 'desc');
        }else{
            $all->orderBy('plants.updated_at', 'asc');
        }
        $all = $all->get();

        return $all;
    }

    public function tribe($slug)
    {
        $status = '1';
        $data = DB::table('locations')
                   ->where('locations.slug','=',$slug)
                   ->get()->first();

        return view('user.pages.tribe',['data' => $data]);
    }
}
