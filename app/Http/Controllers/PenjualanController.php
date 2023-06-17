<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Ternak;
use App\Models\Gudang;
use App\Models\Penjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PenjualanRequest;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = penjualan::all();
        $penjualan = penjualan::OrderBy('id_penjualan', 'asc')->paginate(10);
        return view('penjualan.index', compact('penjualan'));
    }

    public function cetakPenjualan()
    {
        $penjualanpdf = penjualan::all();
        return view('penjualan.cetak-penjualan', compact('penjualanpdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Penjualan;
        return view('penjualan.create', compact('model'));
    }

    public function store(PenjualanRequest $request)
    {
        $model = new Penjualan;
        $model->id_penjualan = $request->id_penjualan;
        $model->id_admin = $request->id_admin;
        $model->id_ternak = $request->id_ternak;
        $model->id_gudang = $request->id_gudang;
        $model->jumlah_terjual = $request->jumlah;
        $model->harga_jual = $request->harga_unit;
        $model->tanggal_terjual = $request->tanggal_beli;
        $model->pembayaran = $request->pembayaran;
        $model->save();
        
        return redirect()->route('penjualan')
        ->with('success', 'Penjualan Berhasil Ditambahkan');
    }

    public function show(penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjualan $penjualan)
    {
        //
    }

    public function chartPenjualan($idpenjualan) {
        $penjualan = penjualan::find($idpenjualan);
        $categories = [];
        foreach($penjualan as $p)
        {
            $categories[] = $p->pembayaran;
        }
       //dd($categories);
        return view('penjualan.charts', compact('penjualan', 'categories'));
        
    }
}
