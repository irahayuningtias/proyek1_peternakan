<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            /* left: 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title>CETAK DATA ADMIN</title>
    </head>
    <body>
        <div class="form-group">
            <p align="center"><b>Laporan Data Admin</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <<th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
            </tr>
            @foreach ($adminpdf as $key => $item)
            <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{$item->nama_admin}}</td>
                <td>{{$item->jenis_kelamin}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->no_hp}}</td>
    </tr>
            @endforeach
    </table>
    </div>
    <script type="text/javascript">
            window.print();
            </script>
    </body>
    </html>
