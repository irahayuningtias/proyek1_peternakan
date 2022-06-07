<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Pakan;
use Illuminate\Http\Request;
use App\Http\Requests\PakanRequest;

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
        $request->validate([
            'id_pakan' => 'required',
            'id_admin' => 'required',
            'nama_admin' => 'required',
            'jumlah' => 'required',
            'tanggal_beli' => 'required',
            'tangal_expired' => 'required',
        ]);

        $model = new Pakan;
        $model->id_pakan = $request->get('id_pakan');
        $model->id_admin = $request->get('id_admin');
        $model->nama_admin = $request->get('nama_pakan');
        $model->jumlah = $request->get('jumlah');
        $model->tanggal_beli = $request->get('tanggal_beli');
        $model->tangal_expired = $request->get('tangal_expired');
        $model->save();




        // $Admins = new Admins;
        // $Admins = $request->get('id_admin');
        // $pakans->save();

        //fungsi eloquent
        // $pakans->kelas()->associate($kelas);
        // $pakans->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pakan.create')
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
    public function edit($id_pakan)
    {
        $Pakan = Pakan::find($id_pakan);
        return view('form.forms-pakan', compact('Pakan'));
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
