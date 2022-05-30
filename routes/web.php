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
//Route::get('/forms-pakan', function () {
//    return view('form/forms-pakan');
//});
Route::get('/forms-ternak', function () {
    return view('form/forms-ternak');
});
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

Route::resource('tabel-admin', AdminsController::class);
Route::resource('tabel-penjualan', PenjualanController::class);
Route::resource('tabel-gudang', GudangController::class);
Route::resource('tabel-pakan', PakanController::class);
Route::resource('tabel-ternak', TernakController::class);
});

//Route::post('/forms-pakan', 'PakanController@store')->name('forms-pakan');

/*end of web routes*/

/*start of controller*/

//Route::get('/a', 'index@list');