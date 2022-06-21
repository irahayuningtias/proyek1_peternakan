
<div class="container mt-5">
   
   <div class="row justify-content-center align-items-center">
       <div class="card" style="width: 24rem;">
           <div class="card-header">
           Edit Data Penjualan
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
           
           <form method="POST" action="{{ url('penjualan/'.$penjualan->id_penjualan) }}">
           @csrf
           @method('PUT')
           <input type="hidden" name="_penjualan" value="PATCH">

   <div class="row clearfix">
   <div class="col-md-6">ID Penjualan</div>
   <div class="col-md-6">
       <input class="form-control" type="text" name="id_penjualan" value="{{ $penjualan->id_penjualan }}"> 
       @foreach($errors->get('id_penjualan') as $msg)
           <p class="text-danger">{{ $msg }}</p>
       @endforeach
   </div>
</div>

<div class="row clearfix">
   <div class="col-md-6">ID Admin</div>
   
   <div class="col-md-6">
       <input class="form-control" type="text" name="id_admin" value="{{ $penjualan->id_admin }}"> 
       @foreach($errors->get('id_admin') as $msg)
           <p class="text-danger">{{ $msg }}</p>
       @endforeach
   </div>
</div>

<div class="row clearfix">
   <div class="col-md-6">ID Ternak</div>
   
   <div class="col-md-6">
       <input class="form-control"  type="text" name="id_ternak" value="{{ $admin->id_ternak }}">
       @foreach($errors->get('id_ternak') as $msg)
           <p class="text-danger">{{ $msg }}</p>
       @endforeach
   </div>
</div>

<div class="row clearfix">
   <div class="col-md-6">ID Gudang</div>
   
   <div class="col-md-6">
       <input class="form-control"  type="text" name="id_gudang" value="{{ $penjualan->id_gudang }}">
       @foreach($errors->get('id_gudang') as $msg)
           <p class="text-danger">{{ $msg }}</p>
       @endforeach
   </div>
</div>

<div class="row clearfix">
   <div class="col-md-6">Jumlah</div>
   
   <div class="col-md-6">
       <input class="form-control"  type="text" name="jumlah"  value="{{ $penjualan->jumlah }}">
       @foreach($errors->get('jumlah') as $msg)
           <p class="text-danger">{{ $msg }}</p>
       @endforeach
   </div>
</div>

<div class="row clearfix">
   <div class="col-md-6">Harga Unit</div>
   
   <div class="col-md-6">
       <input class="form-control"  type="text" name="harga_unit"  value="{{ $penjualan->harga_unit }}">
       @foreach($errors->get('harga_unit') as $msg)
           <p class="text-danger">{{ $msg }}</p>
       @endforeach
   </div>
</div>

<div class="row clearfix">
   <div class="col-md-6">Pembayaran</div>
   
   <div class="col-md-6">
       <input class="form-control"  type="text" name="pembayaran"  value="{{ $penjualan->pembayaran }}">
       @foreach($errors->get('pembayaran') as $msg)
           <p class="text-danger">{{ $msg }}</p>
       @endforeach
   </div>
</div>

<div class="row clearfix">
   <div class="col-md-6">Tanggal Beli</div>
   
   <div class="col-md-6">
       <input class="form-control"  type="text" name="tanggal_beli"  value="{{ $penjualan->tanggal_beli }}">
       @foreach($errors->get('tanggal_beli') as $msg)
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
