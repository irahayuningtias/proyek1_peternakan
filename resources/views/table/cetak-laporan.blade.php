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
    <title>CETAK DATA LAPORAN</title>
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

    <div class="form-group">
            <p align="center"><b>Laporan Data Pakan</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Pakan</th>                  
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal Beli</th>
                <th scope="col">Tanggal Expired</th>               
            </tr>
            @foreach ($pakanpdf as $key => $value)
            <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{$value->nama_pakan}}</td>
                <td>{{$value->jumlah}}</td>
                <td>{{$value->tanggal_beli}}</td>
                <td>{{$value->tanggal_expired}}</td>   
    </tr>
            @endforeach
    </table>
    </div>

    <div class="form-group">
            <p align="center"><b>Laporan Data Ternak</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Jenis Ternak</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Keluar</th>           
            </tr>
            @foreach ($ternakpdf as $key => $item)
            <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{$item->jumlah}}</td>
                <td>{{$item->jenis_ternak}}</td>
                <td>{{$item->tanggal_masuk}}</td>
                <td>{{$item->tanggal_keluar}}</td>
    </tr>
            @endforeach
    </table>
    </div>

    <div class="form-group">
            <p align="center"><b>Laporan Data Gudang</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Jenis Hasil Ternak</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga Unit</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Keluar</th>
            </tr>
            @foreach ($gudangpdf as $key => $item)
            <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{$item->jenis_hasil}}</td>
                <td>{{$item->jumlah}}</td>
                <td>{{$item->harga_unit}}</td>
                <td>{{$item->tanggal_masuk}}</td>
                <td>{{$item->tanggal_keluar}}</td>
    </tr>
            @endforeach
    </table>
    </div>
    
        <div class="form-group">
            <p align="center"><b>Laporan Data Penjualan</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Jumlah</th>
                  <th scope="col">Harga Unit</th>
                  <th scope="col">Pembayaran</th>
                  <th scope="col">Tanggal Beli</th>
            </tr>
            @foreach ($penjualanpdf as $key => $item)
            <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{$item->jumlah}}</td>
                  <td>{{$item->harga_unit}}</td>
                  <td>{{$item->pembayaran}}</td>
                  <td>{{$item->tanggal_beli}}</td>
    </tr>
            @endforeach
    </table>
    </div>
    <script type="text/javascript">
            window.print();
            </script>
    </body>
    </html>
