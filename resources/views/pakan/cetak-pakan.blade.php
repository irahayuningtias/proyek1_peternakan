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
    <title>CETAK DATA PAKAN</title>
    </head>
    <body>
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
    <script type="text/javascript">
            window.print();
            </script>
    </body>
    </html>
