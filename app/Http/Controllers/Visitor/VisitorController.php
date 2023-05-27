<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VisitorController extends Controller
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
        return view('visitor.pages.home',['all' => $all]);
    }

    public function thePlants()
    {
        return view('visitor.pages.the-plants');
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
        $location = $request->location;
        $all = DB::table('plants')
        ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
        ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
        ->where('plants.status','=','Publish')
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
        if($location != null)
        {
            $all->where('locations.slug','=',$location);
        }
        $all = $all->get();

        return $all;
    }

    public function location(Request $request)
    {
        $keyword = $request->keyword;
        $location_slug = $request->location;
        $all = DB::table('plants')
        ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
        ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
        ->where('plants.status','=','Publish')
        ->where('locations.slug','=',$request->slug)
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

        return view('visitor.pages.tribe',['data' => $data]);
    }

    public function detail_plant($slug)
    {
        $data = DB::table('plants')
        ->leftJoin('locations', 'plants.id_location', '=', 'locations.id')
        ->leftJoin('contributors', 'plants.id_contributor', '=', 'contributors.id')
        ->where('plants.status','=','Publish')
        ->where('plants.slug_plant','=',$slug)
        ->get()
        ->first();
        return view('visitor.pages.detail-plant',compact('data'));
    }
}
