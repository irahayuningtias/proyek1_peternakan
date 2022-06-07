<?php

namespace App\Http\Controllers;

use App\Models\gudang;
use App\Models\Admins;
use App\Models\Ternak;
use Illuminate\Support\Facades\DB;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gudang.forms-gudang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Gudang;
        $model ->id_gudang = $request->id_gudang;
        $model ->jenis_hasil = $request->jenis_hasil;
        $model ->jumlah = $request->jumlah;
        $model ->harga_unit = $request->harga_unit;
        $model ->tanggal_masuk = $request->tanggal_masuk;
        $model ->tanggal_keluar = $request->tanggal_keluar;
        $model -> save();

        return redirect('gudang')
        ->with('success', 'data admin berhasil ditambahkan');

        /*return redirect()->route('admin.tabel-admin')
        ->with('success', 'data admin berhasil ditambahkan');*/
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show(admins $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit(admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admins $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(admins $admins)
    {
        //
    }
}
