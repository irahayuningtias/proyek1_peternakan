<div>    
    <br/>
    <form method="POST" action="{{ url('pakan') }}" enctype="multipart/form-data">
        @csrf 
        <div class="row clearfix">
    <div class="col-md-6">ID Pakan</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="id_pakan" value="{{ $model->id_pakan }}"> 
        @foreach($errors->get('id_pakan') as $msg)
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
    <div class="col-md-6">Nama Pakan</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="nama_pakan" value="{{ $model->nama_pakan }}">
        @foreach($errors->get('nama_pakan') as $msg)
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
    <div class="col-md-6">Tanggal Beli</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_beli"  value="{{ $model->tanggal_beli }}">
        @foreach($errors->get('tanggal_beli') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Expired</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_expired"  value="{{ $model->tanggal_expired }}">
        @foreach($errors->get('tanggal_expired') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>


<button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>