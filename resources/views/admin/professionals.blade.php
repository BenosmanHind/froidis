@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, Bienvenue!</h4>
                    <span>professionnels</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/admin/customers')}}">professionnels</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Les professionnels</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom complet</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Connaissance</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->professional->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->professional->connaissance }}</td>
                                        @if($user->status == 0)
                                        <td id="td-status-{{$user->id}}"><span class="badge badge-warning">En attente</span></td>
                                        @elseif($user->status == 1)
                                        <td id="td-status-{{$user->id}}"><span class="badge badge-primary">En attente de validation</span></td>
                                        @elseif($user->status == 2)
                                        <td id="td-status-{{$user->id}}"><span class="badge badge-success">Validé</span></td>
                                        @else
                                        <td id="td-status-{{$user->id}}"><span class="badge badge-danger">Annuler</span></td>
                                        @endif
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp mr-1 edit-status" data-id="{{ $user->id }}"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="{{ asset('admin/detail-professional/'.$user->id) }}" class="btn btn-success shadow btn-xs sharp mr-1 edit-status"><i class="fas fa-eye"></i></a>
                                               <button class="btn btn-danger shadow btn-xs sharp" ><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-edit-status">

</div>
@endsection


@push('modal-edit-status-scripts')
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$("body").on('click','.edit-status',function() {

  var id = $(this).attr("data-id");

  $.ajax({
    url: '/admin/edit-status/'+id,
    type: "GET",
    success: function (res) {

      $('#modal-edit-status').html(res);
      $('#modal-edit-status').find("#status").selectpicker();
      $("#editStatus").modal('show');
    }
  });

});
</script>
<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });

  $("#modal-edit-status").on('click','#updateStatus',function(e){

       var id = $('#user').val();
        e.preventDefault();
        let status = $('#status').val();
        $.ajax({
          type:"PUT",
          url: '/admin/update-status/'+id,
          data:{
            "_token": "{{ csrf_token() }}",
            status:status,

          },
          success:function(response){
            $('#editStatus').modal('hide');
            toastr.success("Statut modifié avec succès", "Succès", {
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    positionClass: "toast-top-right",
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1

            })
            if(status == 0){
              $("#td-status-"+id).html('<span class="badge badge-warning">'+'En Attente'+'</span>');
            }
            else if(status == 1){
              $("#td-status-"+id).html('<span class="badge badge-primary">'+'En Attente de validation'+'</span>');
            }
            else if(status == 2){
              $("#td-status-"+id).html('<span class="badge badge-success">'+'Validé'+'</span>');
            }
            else{
              $("#td-status-"+id).html('<span class="badge badge-danger">'+'Annuler'+'</span>');
            }

          },

          });

   });
</script>
 @endpush
