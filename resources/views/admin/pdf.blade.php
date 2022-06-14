<div class="col-md-4">
    <h1>Kartu Hasil Studi (KHS)</h1>
    <div class="card">
        <div class="card-body">
            <b>Nim : </b> {{$mahasiswa->Nim}}
            <br><br>
            <b>Nama : </b> {{$mahasiswa->Nama}}
            <br><br>
            <b>Kelas : </b> {{$mahasiswa->kelas->nama_kelas}}
        </div>
    </div>
    <br>
</div>
<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" border="1">
                <tr>
                    <th>ID Admin</th>
                    <th>Nama Admin</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telephone</th>
                    <th>updated_at</th>
                    <th>created_at</th>
                </tr>
                @foreach ($data_admin as $item)
                <tr>
                    <td> {{ $item->id_admin}} </td>
                    <td> {{ $item->nama_admin }} </td>
                    <td> {{ $item->jenis_kelamin }} </td>  
                    <td> {{ $item->alamat }} </td>
                    <td> {{ $item->no_hp }} </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>