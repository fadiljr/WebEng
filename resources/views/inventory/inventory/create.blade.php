@extends('master/welcome')

@section('title', ' - Rencana')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3>Create</h3>
            </div>
            <div class="card-body">
                <form action="/createVendor" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-5">
                            <label for="namaVendor">Item :</label>
                            <input type="text" class="form-control" id="item" name="nama" placeholder="Masukan nama Vendor">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-2">
                            <label for="alamatVendor">Quantity :</label>
                            <input type="number" class="form-control" id="quantity" name="alamat" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-3">
                            <label for="tgl">Date :</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="08x-xxx-xxx-xxx">
                        </div>    
                    </div>
                    <div class="col-md">
                        <a href="#" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-primary create">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection