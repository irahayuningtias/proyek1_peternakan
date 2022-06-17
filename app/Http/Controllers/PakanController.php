<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminsController;
use App\Models\Admins;
use App\Models\Pakan;
use Illuminate\Http\Request;
use App\Http\Requests\pakanRequest;
use PDF;

class PakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakans = pakan::all();
        $pakans = pakan::OrderBy('id_pakan', 'asc')->paginate(10);
        return view('pakan.index', compact('pakans'));
    }

    public function cetakPakan()
    {
        $pakanpdf = pakan::all();
        return view('pakan.cetak-pakan', compact('pakanpdf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new pakan;
        return view('pakan.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PakanRequest $request)
    {
        //melakukan validasi data
        // $request->validate([
        //     'id_pakan' => 'required',
        //     'id_admin' => 'required',
        //     'nama_admin' => 'required',
        //     'jumlah' => 'required',
        //     'tanggal_beli' => 'required',
        //     'tangal_expired' => 'required',
        // ]);

        $model = new Pakan;
        $model->id_pakan = $request->id_pakan;
        $model->id_admin = $request->id_admin;
        $model->nama_pakan = $request->nama_pakan;
        $model->jumlah = $request->jumlah;
        $model->tanggal_beli = $request->tanggal_beli;
        $model->tanggal_expired = $request->tanggal_expired;
        $model->save();




        // $Admins = new Admins;
        // $Admins = $request->get('id_admin');
        // $pakans->save();

        //fungsi eloquent
        // $pakans->kelas()->associate($kelas);
        // $pakans->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('pakan')
            ->with('success', 'Data Pakan Berhasil Ditambahkan');
    }

    /////////////////////////////////////////////////////////////
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show($id_admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit($idpakan)
    {
        $pakan = Pakan::find($idpakan);
        return view('pakan.edit', compact('pakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(PakanRequest $request, $idpakan)
    {
         //fungsi eloquent untuk mengupdate data inputan kita
         $pakan = Pakan::find($idpakan);
         $pakan->id_pakan = $request->id_pakan;
         $pakan->id_admin = $request->id_admin;
         $pakan->nama_pakan = $request->nama_pakan;
         $pakan->jumlah = $request->jumlah;
         $pakan->tanggal_beli = $request->tanggal_beli;
         $pakan->tanggal_expired = $request->tanggal_expired;
         $pakan->save();

     //jika data berhasil diupdate, akan kembali ke halaman utama
     return redirect()->route('pakan.index')
         ->with('success', 'pakan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pakan $pakan)
    {
        Pakan::destroy($pakan->id_pakan);
        return redirect()->route('pakan')
            -> with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function cetak_pdf(){
        $pakan =  pakan::all();
        $id_pakan =  DB::table('admin')
        ->join('admin');

        //$pdf = PDF::loadview('admin.pdf', compact('admin'))
    }

}
