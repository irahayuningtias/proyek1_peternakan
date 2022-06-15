<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use App\Http\Requests\AdminsRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Collection;
//use App\Http\Controllers\PDF;
use Barryvdh\DomPDF;
use PDF;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = admins::all();
        $model = admins::OrderBy('id_admin', 'asc')->paginate(10);
        //return $data_admins;
        return view('admin.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$admins = Admins::all();
        $model = new Admins;
        return view('admin.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminsRequest $request)
    {
        //validasi data
        /*$request->validate([
            'id_admin' => 'required',
            'nama_admin' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);*/

        $model = new Admins;
            $model->id_admin = $request->id_admin;
            $model->nama_admin = $request->nama_admin;
            $model->jenis_kelamin = $request->jenis_kelamin;
            $model->alamat = $request->alamat;
            $model->no_hp = $request->no_hp;
            $model->save();

        return redirect('admin')
        ->with('success', 'data berhasil ditambahkan');
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
    public function edit($idadmin)
    {
        $admin = admins::find($idadmin);
        return view('admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(AdminsRequest $request, $idadmin)
    {
        
        //fungsi eloquent untuk mengupdate data inputan kita
        $admin = admins::find($idadmin);
            $admin->id_admin = $request->id_admin;
            $admin->nama_admin = $request->nama_admin;
            $admin->jenis_kelamin = $request->jenis_kelamin;
            $admin->alamat = $request->alamat;
            $admin->no_hp = $request->no_hp;
            $admin->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('admin.index')
            ->with('success', 'admin Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(admins $admin)
    {
         //fungsi eloquent untuk menghapus data
        //$model = admins::find($idadmin);
        //$admins->delete();
        //$admin->delete();

        admins::destroy($admin->id_admin);
        return redirect()->route('admin.index')
            -> with('success', 'admin Berhasil Dihapus');
    }


    public function pdf()
    {
        //$admin['coba'] =  "mencoba";
        $admin = admins::all();

        $pdf = PDF::loadView('admin.cetak_pdf', compact('admin'));
        return $pdf->download('cetak_pdf.pdf');
    }
}
