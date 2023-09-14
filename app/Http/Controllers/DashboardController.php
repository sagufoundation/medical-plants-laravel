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
            return view('dashboard.index');

        } elseif(Auth::user()->hasRole('contributor')){
            return view('dashboard.index');

        } else {
            echo "oops!";
        }
    }
}
