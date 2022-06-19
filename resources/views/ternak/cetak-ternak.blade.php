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
    <title>CETAK DATA TERNAK</title>
    </head>
    <body>
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
    <script type="text/javascript">
            window.print();
            </script>
    </body>
    </html>
