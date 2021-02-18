@extends('master.welcome')

@section('title', ' - Create Purchase Order')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h3>Create New Purchase Order :</h3>
            </div>
            <div class="card-body">
                <br>
                    <form method="POST" action="{{ url('/purchaseOrder/create') }}">
                        @csrf
                        <div class="form-inline">
                            <label for="tglPemesanan">Tanggal pembelian : &nbsp;</label>
                            <input type="date" class="form-control" id="tgl_pembelian" name="tgl_pembelian">
                        </div>
                        <br>
                        <label for="inputTokoRetailer">Vendor</label>
                        <div class="form-inline">
                            <div class="form-group mb-2">
                                <select id="inputTokoRetailer" class="form-control" name="id_vendor">
                                    <option selected>Choose...</option>
                                @foreach($vendor as $v)
                                    <option value="{{ $v->id }}">{{ $v->nama }}</option>
                                @endforeach
                                </select>
                            </div>
                            &nbsp;
                            <a href="{{ url('/vendor/new') }}" class="btn btn-primary mb-2">Create vendor</a>
                        </div>
                        <div class="form-group">
                            <label for="inputProduk">barang</label>
                            <select id="inputProduk" class="form-control" style="width:250px" name="id_barang">
                                <option selected>Choose...</option>
                            @foreach ($barang as $brg)
                                <option value="{{ $brg->id }}">{{ $brg->nama }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" id="quantity" class="form-control" style="width:80px" name="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ url('/purchaseOrder') }}" class="btn btn-danger">Cancel</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
