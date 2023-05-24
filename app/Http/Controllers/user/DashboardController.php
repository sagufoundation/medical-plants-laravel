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
     $status = '1';
     $all = DB::table('plants')
                ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
                ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
                ->where('plants.status','=',$status)
                ->orderBy('plants.id', 'desc')
                ->get();

        return view('user.pages.plant', ['all' => $all]);
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
}
