<?php



// DASHBOARD CONTROLLERS
use App\Http\Controllers\DashboardController;

// OTHER CLASSES
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// REGISTER = FALSE
Auth::routes([
    'register' => false
]);

require_once 'dashboard.php';
require_once 'visitors/common.php';

