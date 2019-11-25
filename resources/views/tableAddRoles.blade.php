@extends('tableRoot')
@section('DataTable')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTables Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <form action="{{ url()->previous() }}">
          <button class="btn btn-primary" style="margin: 10px"> Back <i class="fas fa-arrow-left"></i></button>
        </form>
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
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo1" style="margin: 10px" id="btnNew"> New   <i class="fas fa-user-cog"></i></i></button>
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
