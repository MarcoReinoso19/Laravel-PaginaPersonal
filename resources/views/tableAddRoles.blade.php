<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tables</title>

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

</head>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTables Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Users</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" style="margin: 10px" id="btnNew"> New   <i class="fas fa-user-plus"></i></i></i>   </button>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Role</th>
              <th style="text-align:center">Delete</th>
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
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Role</th>
              <th style="text-align:center">Delete</th>
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
                <td style="text-align:center">
                  <button name= "editButton" id="btnEdit" class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion"
                  data-name="{{ $user->name}}"
                  data-email="{{ $user->email}}"
                  data-password="{{ $user->password}}"
                  data-id="{{ $user->id}}">
                  <i class="fas fa-edit"></i></button>
                </td>


                <td style="text-align:center">
                  <a href="{{ route('users.show', $user) }}">
                    <button type="submit" name= "roleButton" id="btnRole" class="btn btn-info" method="get"><i class="fas fa-user-edit"></i></button>
                  </a>
                </td>

                <td style="text-align:center">
                  <form action="{ {url('tableUsers', $user->id)}}" method="post">
                    {{csrf_field()}}
                    <button name="deleteButton" id="btnDelete" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>


            <!-- Modal para registros nuevos-->
            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url('tableUsers') }}" method="post">
                      {{ csrf_field() }}
                      <label>Nombre</label>
                      <input type="text" name="name" id="name" class="form-control input-sm">
                      <label>Email</label>
                      <input type="text" name="email" id="email" class="form-control input-sm">
                      <label>Password</label>
                      <input type="text" name="password" id="password" class="form-control input-sm">
                      <p></p>
                      <label>Role</label>
                      <div class="btn-group">
                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu">

                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" id="btnAdd">Add</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

<script src="{{ asset('alertifyjs/alertify.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script src="http://localhost:35729/livereload.js"></script>
<script src="https://kit.fontawesome.com/248cde9816.js" crossorigin="anonymous"></script>

@section('scriptllenado')


<script type="text/javascript">
$('#modalEdicion').on('show.bs.modal', function (e) {

  var button = $(e.relatedTarget)
  var id = button.data('id')
  var name = button.data('name')
  var email = button.data('email')
  var password = button.data('password')
  var modal = $(this)

  modal.find('.modal-body #idUser').val(id)
  modal.find('.modal-body #nameUpdate').val(name)
  modal.find('.modal-body #emailUpdate').val(email)
  modal.find('.modal-body #passwordUpdate').val(password)

})
</script>

@endsection
