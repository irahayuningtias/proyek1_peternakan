<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
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

Route::get('/index', function () {
    return view('index');
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
Route::get('/forms-admin', function () {
    return view('form/forms-admin');
});
Route::get('/forms-gudang', function () {
    return view('form/forms-gudang');
});
Route::get('/forms-pakan', function () {
    return view('form/forms-pakan');
});
Route::get('/forms-ternak', function () {
    return view('form/forms-ternak');
});
Route::get('/forms-tambahpenjualan', function () {
    return view('form/forms-tambahpenjualan');
});
/*Route::get('/tabel-admin', function () {
    return view('table/tabel-admin');
});*/

Route::resource('tabel-admin', AdminsController::class);
Route::resource('tabel-tambahpenjualan', PenjualanController::class);

Route::get('/tabel-gudang', function () {
    return view('table/tabel-gudang');
});
Route::get('/tabel-pakan', function () {
    return view('table/tabel-pakan');
});
Route::get('/tabel-ternak', function () {
    return view('table/tabel-ternak');
});
Route::get('/tabel-tambahpenjualan', function () {
    return view('table/tabel-tambahpenjualan');
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

/*end of web routes*/

/*start of controller*/

//Route::get('/a', 'index@list');