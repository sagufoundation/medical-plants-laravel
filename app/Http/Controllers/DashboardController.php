<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    // INDEX
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            $histories = \App\Models\LoginHistory::with('user')
                        ->where('user_id', auth()->id())
                        ->latest()
                        ->take(10)
                        ->get();


            return view('dashboard.index', compact('histories'));

        } elseif(Auth::user()->hasRole('contributor')){
            return view('dashboard.index');

        } else {
            echo "oops!";
        }
    }
}
