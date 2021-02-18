@extends('master/welcome')

@section('title', ' - Barang')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Item <small>List</small></h3>
            </div>
            <div class="card-body">
              <a href="{{url('barang/create')}}" class="btn btn-primary btn-sm">Create</a>
              <br><br>
              <form method="get">
                <div class="table-responsive table-hover">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Tipe</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($barang as $b)
                        <tr>
                          <td>{{ $b->nama }}</td>
                          <td>Rp. {{ $b->harga }}</td>
                          <td>{{ $b->tipe }}</td>
                          <td>{{ $b->keterangan }}</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Update</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>  
@endsection