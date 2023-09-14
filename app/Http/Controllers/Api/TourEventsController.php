<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourEvents;

class TourEventsController extends Controller
{
    public function index()
    {
        $data = TourEvents::with('user')->get();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }


    public function show($slug)
    {
        $data = TourEvents::where('slug','=', $slug)->with('user')->first();

        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => $data
        ]);
    }
}
