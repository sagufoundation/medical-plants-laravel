<?php



// dashboard CONTROLLERS
use App\Http\Controllers\DashboardController;

// OTHER CLASSES
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| VISITOR
|--------------------------------------------------------------------------
*/

// Mengalihkan he alamat beranda
// Route::get('/login', function () {
//     return redirect('/login');
// });


Auth::routes([
    'register' => false
]);


/*
| CK EDITOR
|
*/

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });

Route::group(['prefix' => '/dashboard', 'middleware' => ['web', 'auth']], function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});


require_once 'dashboard.php';
require_once 'profil.php';

require_once 'visitors/common.php';

