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
    <div class="col-md-6">Nama Admin</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="nama_admin" value="{{ $model->nama_admin }}"> 
        @foreach($errors->get('nama_admin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Lahir</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="jenis_kelamin" value="{{ $model->jenis_kelamin }}">
        @foreach($errors->get('jenis_kelamin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Alamat</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="alamat" value="{{ $model->alamat }}">
        @foreach($errors->get('alamat') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">NIP</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="no_hp"  value="{{ $model->no_hp }}">
        @foreach($errors->get('no_hp') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<br>
<button type="submit" class="btn btn-primary">SIMPAN</button>