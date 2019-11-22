@extends('tableRoot')
@section('DataTable')

<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('alertifyjs/css/alertify.css') }}">
<link rel="stylesheet" href="{{ asset('alertifyjs/css/themes/default.css') }}">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTables Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Created At</th>
              <th>Updated_At</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Created At</th>
              <th>Updated_At</th>
            </tr>
          </tfoot>
          <tbody>
              <tr>
                <td>  {{  $user->id  }}  </td>
                <td>  {{  $user->name  }}  </td>
                <td>  {{  $user->email  }}  </td>
                <td>  {{  $user->password  }}  </td>
                <td>  {{ $user->created_at }}  </td>
                <td>  {{ $user->updated_at }}  </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTables Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User_Role</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo1" style="margin: 10px" id="btnNew"> New   <i class="fas fa-user-plus"></i></i></i>   </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID_User_Role</th>
              <th>Name</th>
              <th>Role</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID_User_Role</th>
              <th>Name</th>
              <th>Role</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Delete</th>
            </tr>
          </tfoot>
          <tbody>

            <?php foreach ($user->roles as $role): ?>

              <tr>
                <td>  {{  $role->pivot->id  }}  </td>
                <td>  {{  $user->name  }}  </td>
                <td>  {{  $role->name  }}  </td>
                <td>  {{ $role->pivot->created_at }}  </td>
                <td>  {{ $role->pivot->updated_at }}  </td>
                <td style="text-align:center">
                  <button name= "editButton" id="btnEdit" class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion"
                  data-name="{{ $user->name}}"
                  data-email="{{ $user->email}}"
                  data-password="{{ $user->password}}"
                  data-id="{{ $user->id}}">
                  <i class="fas fa-edit"></i></button>
                </td>

                <td style="text-align:center">
                  <form action="{ {url('tableUsers', $user->id)}}" method="post">
                    {{csrf_field()}}
                    <button name="deleteButton" id="btnDelete" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>


            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

            <!-- Modal para registros nuevos-->
            <div class="modal fade" id="modalNuevo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User_Role </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url('tableUsersRoles') }}" method="post">
                      {{ csrf_field() }}
                      <label>User_ID</label>
                      <input type="text" name="user_id" id="user_id" class="form-control input-sm">
                      <label>Role_ID</label>
                      <input type="text" name="role_id" id="role_id" class="form-control input-sm">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Add</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal para edicion de datos -->
            <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <form action=" {{ route('tableUsers.update', 'test') }}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}

                    <div class="modal-body">
                      <input type="hidden" name="user_id"  id="idUser" value="">
                      <label>Nombre</label>
                      <input type="text" name="nameUpdate" id="nameUpdate" class="form-control input-sm">
                      <label>Email</label>
                      <input type="text" name="emailUpdate" id="emailUpdate" class="form-control input-sm">
                      <label>Password</label>
                      <input type="text" name="passwordUpdate" id="passwordUpdate" class="form-control input-sm">
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-warning">Update</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- /.container-fluid -->
@endsection

<script src="{{ asset('alertifyjs/alertify.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script src="http://localhost:35729/livereload.js"></script>
<script src="https://kit.fontawesome.com/248cde9816.js" crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>


@section('scriptllenado')

<script type="text/javascript">
$('#modalEdicion').on('show.bs.modal', function (e) {

  var button = $(e.relatedTarget)
  var id = button.data('id')
  var user_id = button.data('user_id')
  var role_id = button.data('role_id')
  var modal = $(this)

  modal.find('.modal-body #idUserRole').val(id)
  modal.find('.modal-body #user_idUpdate').val(user_id)
  modal.find('.modal-body #role_idUpdate').val(role_id)

})
</script>

@endsection
