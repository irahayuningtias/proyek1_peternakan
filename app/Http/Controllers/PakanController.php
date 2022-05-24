<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Pakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakan = Pakan::all();
        $pakan = Pakan::OrderBy('id_pakan', 'asc')->paginate(10);
        return view('table.tabel-pakan', ['pakan' => $pakan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pakan = Pakan::all(); //mendapat data dari tabel pakan
        return view('form.tabel-pakan',['pakan' => $pakan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'id_pakan' => 'required',
            'id_admin' => 'required',
            'nama_pakan' => 'required',
            'jumlah' => 'required',
            'tanggal_beli' => 'required',
            'tangal_expired' => 'required',
        ]);

        $pakan = new Pakan;
        $pakan->id_pakan = $request->get('id_pakan');
        $pakan->id_admin = $request->get('id_admin');
        $pakan->nama_admin = $request->get('nama_pakan');
        $pakan->jumlah = $request->get('jumlah');
        $pakan->tanggal_beli = $request->get('tanggal_beli');
        $pakan->tangal_expired = $request->get('tangal_expired');

        $pakan->save();

        return view('form.tabel-pakan', ['pakan' => $pakan]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show(Admins $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit(Admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admins $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admins $admins)
    {
        //
    }
}
