@extends('master/welcome')

@section('title', ' - Create Storage')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h3>Rincian Penerimaan Barang :</h3>
            </div>
            <div class="card-body">
                <br>
                    <form method="POST" action="{{ url('/store/create/new') }}">
                        @csrf
                        <div class="form-inline">
                            <label for="tglPemesanan">Tanggal Masuk : &nbsp;</label>
                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                        </div>
                        <br>
                        <div class="form-inline">
                            <label for="tglPemesanan">Tanggal Exp : &nbsp;</label>
                            <input type="date" class="form-control" id="tgl_kadaluarsa" name="tgl_kadaluarsa">
                        </div>
                        <br>
                        <div class="form-inline">
                            <label for="inputGudang">Gudang : &nbsp;</label>
                            <div class="form-group mb-2">
                                <select id="inputTokoRetailer" class="form-control" name="id_gudang">
                                    <option selected>Choose...</option>
                                @foreach($gudang as $g)
                                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <label for="barang">Id_Barang : &nbsp;</label>
                        <label for="inputBarang">{{$purchase_order->id_barang}}</label>
                        <br><br>
                        <label for="barang">Quantity : &nbsp;</label>
                        <label for="inputBarang">{{$purchase_order->quantity}}</label>
                        <br><br>
                        <input type="hidden" class="form-control" id="id_barang" name="id_barang" value="{{$purchase_order->id_barang}}">
                        <input type="hidden" class="form-control" id="quantity" name="quantity" value="{{$purchase_order->quantity}}">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
            </div>
        </div>
    </div>
</div>  
@endsection
