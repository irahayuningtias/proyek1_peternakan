<?php

namespace App\Http\Controllers;

use App\Models\gudang;
use App\Models\Admins;
use App\Models\Ternak;
use App\Http\Requests\GudangRequests;
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
        return view('gudang.index', compact('gudang'));
    }

    public function cetakGudang()
    {
        $gudangpdf = gudang::all();
        return view('gudang.cetak-gudang', compact('gudangpdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new gudang;
        return view('gudang.create', compact('model'));
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
        $model ->id_ternak = $request->id_ternak;
        $model ->id_admin = $request->id_admin;
        $model ->jenis_hasil = $request->jenis_hasil;
        $model ->jumlah = $request->jumlah;
        $model ->harga_unit = $request->harga_unit;
        $model ->tanggal_masuk = $request->tanggal_masuk;
        $model ->tanggal_keluar = $request->tanggal_keluar;
        $model -> save();
        //$ternak = new Ternak;

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
    public function edit( $idgudang)
    {
        $idgudang = Gudang::find($idgudang);
        return view('gudang.edit', compact('gudang'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(GudangRequest $request, $idgudang)
    {
        //fungsi eloquent untuk mengupdate data inputan kita
        $gudang = Gudang::find($idgudang);
        $gudang ->id_gudang = $request->id_gudang;
        $gudang ->id_ternak = $request->id_ternak;
        $gudang ->id_admin = $request->id_admin;
        $gudang ->jenis_hasil = $request->jenis_hasil;
        $gudang ->jumlah = $request->jumlah;
        $gudang ->harga_unit = $request->harga_unit;
        $gudang ->tanggal_masuk = $request->tanggal_masuk;
        $gudang ->tanggal_keluar = $request->tanggal_keluar;
        $gudang -> save();

    //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect()->route('gudang.index')
        ->with('success', 'gudang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gudang $gudang)
    {
        Gudang::destroy($gudang->id_gudang);
        return redirect()->route('gudang.index');
    }

    public function cetak_pdf(){

    }
}
