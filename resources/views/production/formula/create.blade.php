@extends('master/welcome')

@section('content')
<h3>Create New Vendor :</h3>
<form action="/createVendor" method="post" >
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-5">
            <label for="namaVendor">Nama :</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama Vendor">
        </div>
    </div>
    <div class="form-group">
        <div class="col-10">
            <label for="alamatVendor">Alamat :</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat Vendor">
        </div>
    </div>
    <div class="form-group">
        <div class="col-2">
            <label for="noTlp">No Telepon :</label>
            <input type="tel" class="form-control" id="no_telp" name="no_telp" placeholder="08x-xxx-xxx-xxx">
        </div>    
    </div>
    <br><br>
    <div class="col-md">
        <button type="submit" class="btn btn-primary create">Create</button>
        <a href="#" class="btn btn-primary">Cancel</a>
    </div>
    <script type="text/javascript">
        $("body").on("click","create",function(){
            var current_object = $(this);
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "error",
                showCancelButton: true,
                dangerMode: true,
                cancelButtonClass: '#DD6B55',
                confirmButtonColor: '#dc3545',
                confirmButtonText: 'Delete!',
            },function (result) {
                if (result) {
                    var action = current_object.attr('data-action');
                    var token = jQuery('meta[name="csrf-token"]').attr('content');
                    var id = current_object.attr('data-id');

                    $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
                    $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
                    $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
                    $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
                    $('body').find('.remove-form').submit();
                }
            });
        });
    </script>
</form>
@endsection