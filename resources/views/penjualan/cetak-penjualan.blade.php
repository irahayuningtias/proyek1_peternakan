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
    <title>CETAK DATA PENJUALAN</title>
    </head>
    <body>
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
