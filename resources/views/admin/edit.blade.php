
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
            
            <form method="POST" action="{{ url('admin/'.$admin->id_admin) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="_admin" value="PATCH">

    <div class="row clearfix">
    <div class="col-md-6">ID Admin</div>
    <div class="col-md-6">
        <input class="form-control" type="text" name="id_admin" value="{{ $admin->id_admin }}"> 
        @foreach($errors->get('id_admin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Nama Admin</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="nama_admin" value="{{ $admin->nama_admin }}"> 
        @foreach($errors->get('nama_admin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Jenis Kelamin</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="jenis_kelamin" value="{{ $admin->jenis_kelamin }}">
        @foreach($errors->get('jenis_kelamin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Alamat</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="alamat" value="{{ $admin->alamat }}">
        @foreach($errors->get('alamat') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">NO Handphone</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="no_hp"  value="{{ $admin->no_hp }}">
        @foreach($errors->get('no_hp') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>
</input>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
