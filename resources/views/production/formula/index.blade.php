@extends('master/welcome')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Production <small>List</small></h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-primary">Create</button>
              <br><br>
              <form method="get">
                <div class="table-responsive table-hover">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Barang</th>
                        <th>Bahan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>A</td>
                        <td>B</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Update</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>  

@endsection