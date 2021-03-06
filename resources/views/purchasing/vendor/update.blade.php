@extends('master/welcome')

@section('title', ' - Update Vendor')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h3>Update Vendor :</h3>
            </div>
            <div class="card-body">
                <form method="post" action="/vendor/update/{{$vendor->id}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-5">
                            <label for="namaVendor">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$vendor->nama}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-10">
                            <label for="alamatVendor">Alamat :</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat Vendor"  value="{{$vendor->alamat}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-2">
                            <label for="noTlp">No Telepon :</label>
                            <input type="tel" class="form-control" id="no_telp" name="no_telp" placeholder="08x-xxx-xxx-xxx"  value="{{$vendor->no_telp}}">
                        </div>    
                    </div>
                    <br><br>
                    <div class="col-md">
                    <button type="submit" class="btn btn-primary">update</button>
                        <a href="/vendor/index" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection