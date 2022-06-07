<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\TernakController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*start web routes*/

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('more/login');
});
Route::get('/register', function () {
    return view('more/register');
});
Route::get('/profile', function () {
    return view('more/profile');
});
Route::get('/contact', function () {
    return view('more/contact');
});
/*Route::get('/forms-gudang', function () {
    return view('form/forms-gudang');
});*/
/////
// Route::get('/forms-pakan', function () {
//     return view('form/forms-pakan');
// });

// Route::post('/forms-pakan', 'PakanController@store')->name('forms-pakan');
// //

/*Route::get('/forms-ternak', function () {
    return view('form/forms-ternak');
});*/
Route::get('/forms-tambahpenjualan', function () {
    return view('form/forms-tambahpenjualan');
});

Route::get('/faq', function () {
    return view('more/faq');
});
Route::get('/tabel-laporan', function () {
    return view('table/tabel-laporan');
});
Route::get('/charts', function () {
    return view('charts');
});
Route::resource('tabel-penjualan', PenjualanController::class);
Route::resource('gudang', GudangController::class);
Route::resource('pakan', PakanController::class);
Route::resource('ternak', TernakController::class);

//ini route untuk CRUD tabel Admin
//Route::resource('tabel-admin', AdminsController::class);
//Route::resource('admin.forms-admin', AdminsController::class);

//admin route
Route::resource('admin', AdminsController::class);

//Route::get('admin/tabel-admin', AdminsController::class);

//Route::post('/simpanadmin', [AdminsController::class, 'simpanadmin'])->name('simpanadmin');
///



/*end of web routes*/

/*start of controller*/

//Route::get('/a', 'index@list');