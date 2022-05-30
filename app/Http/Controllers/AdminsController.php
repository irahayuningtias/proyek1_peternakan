<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = admins::all();
        $admins = admins::OrderBy('id_admin', 'asc')->paginate(10);
        //return $data_admins;
        return view('admin.tabel-admin', ['admin'=> $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$admins = Admins::all();
        return view('admin.forms-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'id_admin' => 'required',
            'nama_admin' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $admin = Admin::create([
            $admin->id_admin = $request->id_admin,
            $admin->nama_admin = $request->nama_admin,
            $admin->jenis_kelamin = $request->jenis_kelamin,
            $admin->alamat = $request->alamat,
            $admin->no_hp = $request->no_hp,
        ]);

        return redirect()->route('admin.tabel-admin')
        ->with('success', 'data admin berhasil ditambahkan');
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
