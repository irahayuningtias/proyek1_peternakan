
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Data Admin
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ url('gudang/'.$gudang->id_gudang) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="_gudang" value="PATCH">

    <div class="row clearfix">
    <div class="col-md-6">ID Gudang</div>
    <div class="col-md-6">
        <input class="form-control" type="text" name="id_gudang" value="{{ $gudang->id_gudang }}"> 
        @foreach($errors->get('id_gudang') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
        <div class="col-md-6">ID Ternak</div>
    
        <div class="col-md-6">
        <input class="form-control" type="text" name="id_ternak" value="{{ $gudang->id_ternak }}"> 
        @foreach($errors->get('id_ternak') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
        <div class="col-md-6">ID Admin</div>
    
        <div class="col-md-6">
        <input class="form-control" type="text" name="id_admin" value="{{ $gudang->id_admin }}"> 
        @foreach($errors->get('id_admin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Jenis Hasil</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="jenis_hasil" value="{{ $gudang->jenis_hasil }}"> 
        @foreach($errors->get('jenis_hasil') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Jumlah</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="jumlah" value="{{ $gudang->jumlah }}">
        @foreach($errors->get('jumlah') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Harga Unit</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="harga_unit" value="{{ $gudang->harga_unit }}">
        @foreach($errors->get('harga_unit') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Masuk</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_masuk"  value="{{ $gudang->tanggal_masuk }}">
        @foreach($errors->get('tanggal_masuk') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Keluar</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_keluar"  value="{{ $gudang->tanggal_keluar }}">
        @foreach($errors->get('tanggal_keluar') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
