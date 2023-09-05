<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plant;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.pages.dashboard');
    }

    public function setting()
    {
        return view('admin.pages.dashboard');
    }
}
