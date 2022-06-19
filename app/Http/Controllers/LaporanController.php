<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Pakan;
use App\Models\Ternak;
use App\Models\Gudang;
use App\Models\Penjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class LaporanController extends Controller
{
    public function cetakAdmin()
    {
        $adminpdf = admins::all();
        //return $data_admins;
        return view('admin.cetak-admin', compact('adminpdf'));
    }

    public function cetakPakan()
    {
        $pakanpdf = pakan::all();
        return view('pakan.cetak-pakan', compact('pakanpdf'));
    }

    public function cetakTernak(){
        $ternakpdf = Ternak::all();
        return view('ternak.cetak-ternak', compact('ternakpdf'
        ));
    }

    public function cetakGudang()
    {
        $gudangpdf = gudang::all();
        return view('gudang.cetak-gudang', compact('gudangpdf'));
    }

    public function cetakPenjualan()
    {
        $penjualanpdf = penjualan::all();
        return view('penjualan.cetak-penjualan', compact('penjualanpdf'));
    }
}
