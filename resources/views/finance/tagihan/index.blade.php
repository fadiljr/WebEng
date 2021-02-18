@extends('master/welcome')

@section('title', ' - Tagihan')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Penerimaan Barang <small>List</small></h3>
            </div>
            <div class="card-body">
              <br><br>
              <form method="get">
                <div class="table-responsive table-hover">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tipe</th>
                      <th>Id_tipe</th>
                      <th>total</th>
                      <th>Tgl_tagihan</th>
                      <th>Confirmasi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($tagihan as $t)
                    <tr>
                      <td>{{$t->id}}</td>
                      <td>{{$t->tipe}}</td>
                      <td>{{$t->id_tipe}}</td>
                      <td>{{$t->tgl_tagihan}}</td>
                      <td>{{$t->total}}</td>
                      <td><a href='/tagihan/update/{{$t->id}}' class="btn btn-primary">Confirm</a></td>
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