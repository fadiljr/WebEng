@extends('master/welcome')

@section('title', ' - New Production')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3>Create Produksi</h3>
            </div>
             <div class="card-body">
                <form action="/produksi/store" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-5">
                            <label for="namaVendor">Rencana (Barang - Quantity - Tanggal Produksi) :</label>
                            <select class="form-control" name="id_rencana" id="id_rencana">
                                @foreach ($rencana as $r)
                                    <option value={{ $r->id }}>[ {{ $r->nama }} ] - [ {{ $r->quantity }}x ] - [ {{ $r->tgl_produksi }} ]</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="status" name="status" value="1">
                    <div class="col-md">
                        <a href="{{url('produksi')}}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-primary create">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection