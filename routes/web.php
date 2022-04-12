<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index 7', function () {
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

Route::get('/faq', function () {
    return view('more/faq');
});
Route::get('/tabel', function () {
    return view('table/tabel');
});
Route::get('/charts', function () {
    return view('charts');
});

/*end of web routes*/

/*start of controller*/

//Route::get('/a', 'index@list');