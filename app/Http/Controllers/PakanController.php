<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class PakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakans = Pakan::all();
        $pakans = Pakan::OrderBy('id_pakan', 'asc')->paginate(10);
        return view('form.tabel_pakan', ['peternakan' => $pakans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //$pakan = Pakan::all(); //mendapat data dari tabel pakan
        //return view('form.tabel-pakan',['pakan' => $pakan]);
        $admins = Admins::all();
        return view('form.forms-pakan', ['admins' => $admins]);
=======
        $admins = Admins::all(); //mendapat data dari tabel pakan
        return view('peternakan.create',['admins' =>$admins]);
>>>>>>> b8731e4aefe619804cc8a5b08ef8817866da61a2
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
            'nama_admin' => 'required',
            'jumlah' => 'required',
            'tanggal_beli' => 'required',
            'tangal_expired' => 'required',
        ]);

        $pakans = new Pakan;
<<<<<<< HEAD
        $pakans->id_pakan = $request->get('id_pakan');
        $pakans->id_admin = $request->get('id_admin');
        $pakans->nama_admin = $request->get('nama_pakan');
        $pakans->jumlah = $request->get('jumlah');
        $pakans->tanggal_beli = $request->get('tanggal_beli');
        $pakans->tangal_expired = $request->get('tangal_expired');
        $pakans->save();

        $admins = new Admins;
        $admins = $request->get('id_admin');
        $admins->save();

        //fungsi eloquent
        $pakans->admins()->associate($kelas);
        $mahasiswa->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('table.tabel-pakan')
            ->with('success', 'Data Pakan Berhasil Ditambahkan');
=======
        $pakans->id_pakan = $requesr->get('id_pakan');
        $pakans->id_pakan = $requesr->get('id_pakan');
>>>>>>> b8731e4aefe619804cc8a5b08ef8817866da61a2
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
