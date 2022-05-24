<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TernakController extends Controller
{
    public function index(){
        $data_ternak = DB::table('ternak')->get();
        //return view('table/tabel-ternak',['data_ternak'=>$data_ternak]);
    }
}
