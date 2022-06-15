<?php

namespace App\Http\Controllers;

use App\Models\Ternak;
use App\Models\Pakan;
use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TernakRequest;

class TernakController extends Controller
{
    public function index(){
        $ternak = Ternak::all();
        $ternak = Ternak::OrderBy('id_ternak', 'asc')->paginate(10);
        return view('ternak.index', compact(
            'ternak'
        ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = new Ternak;
        return view('ternak.create', compact(
            'datas'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = new Ternak;
        $datas->id_ternak = $request->id_ternak;
        $datas->id_pakan = $request->id_pakan;
        $datas->id_admin = $request->id_admin;
        $datas->jumlah = $request->jumlah;
        $datas->jenis_ternak = $request->jenis_ternak;
        $datas->tanggal_masuk = $request->tanggal_masuk;
        $datas->tanggal_keluar = $request->tanggal_keluar;
        $datas->save();

        return redirect('ternak')
        ->with('success', 'data ternak berhasil ditambahkan');

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
    public function edit($idternak)
    {
        $ternak = Ternak::find($idternak);
        return view('ternak.edit', compact('ternak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(TernakRequest $request,  $idternak)
    {
        $ternak = Ternak::find($idternak); 
        $ternak->id_ternak = $request->id_ternak;
        $ternak->id_pakan = $request->id_pakan;
        $ternak->id_admin = $request->id_admin;
        $ternak->jumlah = $request->jumlah;
        $ternak->jenis_ternak = $request->jenis_ternak;
        $ternak->tanggal_masuk = $request->tanggal_masuk;
        $ternak->tanggal_keluar = $request->tanggal_keluar;
        $ternak->save();
        
        return redirect()->route('ternak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ternak $ternak)
    {
        Ternak::destroy($ternak->id_ternak);
        return redirect()->route('ternak.index');
    }
}
