<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourSliders;

class SlidersController extends Controller
{
    public function index()
    {
        $data = TourSliders::get();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }


    public function show($slug)
    {
        $data = TourSliders::where('slug','=', $slug)->first();
        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }

}
