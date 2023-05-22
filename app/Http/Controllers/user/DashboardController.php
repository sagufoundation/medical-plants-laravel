<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.pages.dashboard');
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
}
