<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
    }

    public function index()
    {
        return view('admin.pages.dashboard');
    }

    public function setting()
    {
        return view('admin.pages.dashboard');
    }
}
