@extends('master/welcome')

@section('title', ' - Vendor')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Vendor <small>List</small></h3>
              <a href=" {{url('/vendor/new')}}" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
              <br><br>
              <form method="get">
                <div class="table-responsive table-hover">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No Telp</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($vendor as $v)
                    <tr>
                      <td>{{$v->nama}}</td>
                      <td>{{$v->alamat}}</td>
                      <td>{{$v->no_telp}}</td>
                      <td><a href='/vendor/list/{{$v->id}}' class="btn btn-primary">Update</a></td>
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