<form method="POST" action="{{ url('penjualan') }}" enctype="multipart/form-data">
@csrf
<div class="row clearfix">
    <div class="col-md-6">ID Penjualan</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="id_penjualan" value="{{ $model->id_penjualan }}"> 
        @foreach($errors->get('id_penjualan') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">ID Admin</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="id_admin" value="{{ $model->id_admin }}"> 
        @foreach($errors->get('id_admin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">ID Ternak</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="id_ternak" value="{{ $model->id_ternak }}"> 
        @foreach($errors->get('id_ternak') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">ID Gudang</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="id_gudang" value="{{ $model->id_gudang }}"> 
        @foreach($errors->get('id_gudang') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Jumlah</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="jumlah" value="{{ $model->jumlah }}"> 
        @foreach($errors->get('jumlah') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Harga Unit</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="harga_unit" value="{{ $model->harga_unit }}">
        @foreach($errors->get('harga_unit') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Pembayaran</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="pembayaran" value="{{ $model->pembayaran }}">
        @foreach($errors->get('pembayaran') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Beli</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_beli"  value="{{ $model->tanggal_beli }}">
        @foreach($errors->get('tanggal_beli') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<button type="submit" class="btn btn-primary">SIMPAN</button>
</form>