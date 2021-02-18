@extends('master/welcome')

@section('title', ' - Production')

@section('content')

<div class="row">
    <div class="col-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Production <small>List</small></h3>
            </div>
            <div class="card-body">
              <a href="{{url('produksi/create')}}" class="btn btn-primary btn-sm">New</a>
              <br><br>
                <div class="table-responsive table-hover">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Rencana</th>
                        <th>Barang</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($produksi as $p)
                        <tr>
                          <td>{{$p->id_rencana}}</td>
                          <td>{{$p->nama}}</td>
                          <td>{{$p->quantity}}</td>
                          <td>{{$p->status == 0 ? 'On Progress' : 'Done'}}</td>
                          <form method="post" action="{{url('/produksi/update/'.$p->p_id.'/')}}">
                            @csrf
                            @method('patch')
                          <td><button type="submit" class="btn btn-primary btn-sm">Update</button></td>
                          </form>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection