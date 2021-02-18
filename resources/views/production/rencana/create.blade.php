@extends('master/welcome')

@section('title', ' - Create Rencana')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3>Create Rencana</h3>
            </div>
            <div class="card-body">
                <form action="/rencana/store" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-5">
                            <label for="namaVendor">Barang :</label>
                            <select class="form-control" name="id_barang" id="id_barang">
                                @foreach ($barang as $b)
                                    <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-2">
                            <label for="alamatVendor">Quantity :</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-3">
                            <label for="tgl">Date :</label>
                            <input type="date" class="form-control" id="date" name="tgl_produksi" placeholder="">
                        </div>    
                    </div>
                    <br>
                    <div class="col-md">
                        <a href="{{url('rencana')}}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-primary create">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection