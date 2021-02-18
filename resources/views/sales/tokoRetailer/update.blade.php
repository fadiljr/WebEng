@extends('master/welcome')

@section('content')
<h3>Update Supplier :</h3>
    @foreach($result as $toko)
<form method="post" action="/updateSupplier/{{ $toko->id }}">
    @csrf
    @method('patch')
    <div class="form-group">
        <div class="col-5">
            <label for="namaSupplier">Nama :</label>
            <input type="text" class="form-control" id="namaSupplier" name="nama" value="{{$toko->nama}}">
        </div>
    </div>
    <div class="form-group">
        <div class="col-10">
            <label for="alamatSupplier">Alamat :</label>
            <input type="text" class="form-control" id="alamatSupplier" value="{{$toko->alamat}}" name="alamat">
        </div>
    </div>
    <div class="form-group">
        <div class="col-2">
            <label for="noTlp">No Telepon :</label>
            <input type="tel" class="form-control" id="noTlp" value="{{$toko->no_telp}}" name="tlp">
        </div>    
    </div>
    <br>
    <div class="col-md">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ url('/supplier')}}" class="btn btn-primary">Cancel</a>
    </div>
    @endforeach
</form>
@endsection