@extends('master/welcome')

@section('content')
<h3>Create New Supplier :</h3>
<form method="POST" action="{{ url('/createNewSupplier') }}">
    @csrf
    <div class="form-group">
        <div class="col-5">
            <label for="namaSupplier">Nama :</label>
            <input type="text" class="form-control" id="namaSupplier" placeholder="Masukan nama Supplier" name="nama">
        </div>
    </div>
    <div class="form-group">
        <div class="col-10">
            <label for="alamatSupplier">Alamat :</label>
            <input type="text" class="form-control" id="alamatSupplier" placeholder="Masukan alamat Supplier" name="alamat">
        </div>
    </div>
    <div class="form-group">
        <div class="col-2">
            <label for="noTlp">No Telepon :</label>
            <input type="tel" class="form-control" id="noTlp" placeholder="08x-xxx-xxx-xxx" name="tlp">
        </div>    
    </div>
    <br>
    <div class="col-md">
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ url('/createSalesOrder')}}" class="btn btn-primary">Cancel</a>
    </div>
</form>
@endsection