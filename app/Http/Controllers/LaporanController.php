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

    public function index()
    {
        $model = admins::all();
        $model = admins::OrderBy('id_admin', 'asc')->paginate(10);

        $pakans = pakan::all();
        $pakans = pakan::OrderBy('id_pakan', 'asc')->paginate(10);

        $gudang = gudang::all();
        $gudang = gudang::OrderBy('id_gudang', 'asc')->paginate(10);

        $ternak = Ternak::all();
        $ternak = Ternak::OrderBy('id_ternak', 'asc')->paginate(10);

        $penjualan = penjualan::all();
        $penjualan = penjualan::OrderBy('id_penjualan', 'asc')->paginate(10);
        return view('laporan.index', compact('model', 'pakans', 'gudang', 'ternak', 'penjualan'));
    }


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
