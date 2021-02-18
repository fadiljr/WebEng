@extends('master/welcome')

@section('title', ' - Create Barang')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3>Create</h3>
            </div>
            <div class="card-body">
                <form action="/barang/store" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-5">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" id="item" name="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-5">
                            <label for="harga">Harga:</label>
                            <input type="text" class="form-control" id="item" name="harga" placeholder="Harga">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-5">
                            <label for="keterangan">Keterangan :</label>
                            <input type="text" class="form-control" id="date" name="keterangan" placeholder="keterangan">
                        </div>    
                    </div>
                    <div class="form-group">
                        <div class="col-5">
                            <label for="tipe">Tipe :</label>
                            <input type="text" class="form-control" id="item" name="tipe" placeholder="1 atau 2">
                        </div>
                    </div>
                    <br>
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