@extends('tableRoot')
@section('DataTable')
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

            <?php foreach ($users as $user): ?>
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
                  <!--<a href="{{ route('users.show', $user) }}"> -->
                  <a href="{{ route('users.show', ['id' => $user->id]) }}">

                    <button type="submit" name= "roleButton" id="btnRole" class="btn btn-info" method="get"><i class="fas fa-user-edit"></i></button>
                  </a>
                </td>

                <td style="text-align:center">
                  <form action="{{url('tableUsers', $user->id)}}" method="post">
                    {{csrf_field()}}
                    <button name="deleteButton" id="btnDelete" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>




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
                            <?php foreach ($data as $data): ?>
                              <a class="dropdown-item" name="role" id="role">{{  $data->name  }}</a>
                            <?php endforeach; ?>
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


<!-- /.container-fluid -->
@endsection

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
