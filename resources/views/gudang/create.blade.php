
    <br/>
    <form method="POST" action="{{ url('gudang') }}" enctype="multipart/form-data">
        @csrf 
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
        <div class="col-md-6">ID Ternak</div>
    
        <div class="col-md-6">
        <input class="form-control" type="text" name="id_ternak" value="{{ $model->id_ternak }}"> 
        @foreach($errors->get('id_ternak') as $msg)
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
    <div class="col-md-6">Jenis Hasil</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="jenis_hasil" value="{{ $model->jenis_hasil }}"> 
        @foreach($errors->get('jenis_hasil') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Jumlah</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="jumlah" value="{{ $model->jumlah }}">
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
    <div class="col-md-6">Tanggal Masuk</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_masuk"  value="{{ $model->tanggal_masuk }}">
        @foreach($errors->get('tanggal_masuk') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Keluar</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_keluar"  value="{{ $model->tanggal_keluar }}">
        @foreach($errors->get('tanggal_keluar') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>


<button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>