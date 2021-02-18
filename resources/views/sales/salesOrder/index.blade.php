@extends('master/welcome')

@section('content')
    <h3><b>Sales Order</b></h3>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/createSalesOrder') }}" class="btn btn-primary">Create Sales Order</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Barang</th>
                        <th>Toko Retailer</th>
                        <th>Quantity</th>
                        <th>Tanggal</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($result as $sel)
                    <tr>
                        <td>{{ $sel->id }}</td>
                        <td>{{ $sel->barang }}</td>
                        <td>{{ $sel->nama }}</td>
                        <td>{{ $sel->quantity }}</td>
                        <td>{{ $sel->tgl_permintaan }}</td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
