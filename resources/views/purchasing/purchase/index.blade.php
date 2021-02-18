@extends('master/welcome')

@section('title', ' - Purchase Order')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Purchase Order <small>List</small></h3>
              <a href=" {{url('/purchaseOrder/new')}}" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
              <br><br>
              <form method="get">
                <div class="table-responsive table-hover">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                      <th>Id_PO</th>
                      <th>Barang</th>
                      <th>vendor</th>
                      <th>Qty</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($purchase_order as $p)
                    <tr>
                      <td>{{$p->id}}</td>
                      <td>{{$p->id_barang}}</td>
                      <td>{{$p->id_vendor}}</td>
                      <td>{{$p->quantity}}</td>
                      <td>{{$p->tgl_pembelian}}</td>
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