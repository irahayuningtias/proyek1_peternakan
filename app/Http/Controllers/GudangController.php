<?php

namespace App\Http\Controllers;

use App\Models\gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $gudang = gudang::all();
        $gudang = gudang::OrderBy('id_gudang', 'asc')->paginate(10);
        return view('table.tabel-gudang', ['gudang'=>$gudang]);
    }
}
