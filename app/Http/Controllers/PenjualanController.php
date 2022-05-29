<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Ternak;
use App\Models\Gudang;
use App\Models\Penjualan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        return view('table.tabel-penjualan', ['penjualan' => $penjualan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.forms-tambahpenjualan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_penjualan' => 'required',
            'id_admin' => 'required',
            'id_ternak' => 'required',
            'id_gudang' => 'required',
            'jumlah' => 'required',
            'harga_unit' => 'required',
            'pembayaran' => 'required',
            'tanggal_beli' => 'required',
        ]);

        Penjualan::create($request->all());

        return redirect()->route('table.tabel-penjualan')
            ->with('success', 'Penjualan Berhasil Ditambahkan');
    }

    public function show($id_penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_penjualan)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
