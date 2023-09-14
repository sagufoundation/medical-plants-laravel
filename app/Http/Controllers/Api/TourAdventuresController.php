<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourAdventures;
use App\Http\Resources\PostResource;

class TourAdventuresController extends Controller
{
    public function index()
    {

     $data = TourAdventures::with('user')->get();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }

    public function show($slug)
    {
        $data = TourAdventures::where('slug','=', $slug)->with('user')->first();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }
}
