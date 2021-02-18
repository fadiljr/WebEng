@extends('master/welcome')

@section('content')
    <h3><b>Toko Retailer</b></h3>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/createNewSupplier') }}" class="btn btn-primary">Create New Supplier</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($result as $toko)
                    <tr>
                        <td>{{ $toko->id }}</td>
                        <td>{{ $toko->nama }}</td>
                        <td>{{ $toko->alamat }}</td>
                        <td>{{ $toko->no_telp }}</td>
                        <td><a href="/update/{{ $toko->id }}" class="btn btn-primary">Update</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
