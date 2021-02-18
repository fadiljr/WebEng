@extends('master.welcome')

@section('content')
<h3>Create New Sales Order :</h3>
<br>
    <form method="POST" action="{{ url('/sales') }}">
        @csrf
        <div class="form-inline">
            <label for="tglPemesanan">Tanggal pemesanan : &nbsp;</label>
            <input type="date" class="form-control" id="tglPemesanan" name="tgl">
        </div>
        <br>
        <label for="inputTokoRetailer">Toko Retailer</label>
        <div class="form-inline">
            <div class="form-group mb-2">
                <select id="inputTokoRetailer" class="form-control" name="toko">
                    <option selected>Choose...</option>
                @foreach($toko as $tk)
                    <option value="{{ $tk->id }}">{{ $tk->nama }}</option>
                @endforeach
                </select>
            </div>
            &nbsp;
            <a href="{{ url('/createNewSupplier') }}" class="btn btn-primary mb-2">Create Supplier</a>
        </div>
        <div class="form-group">
            <label for="inputProduk">Produk</label>
            <select id="inputProduk" class="form-control" style="width:250px" name="produk">
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
        <a href="{{ url('/sales') }}" class="btn btn-primary">Cancel</a>
    </form>
@endsection
