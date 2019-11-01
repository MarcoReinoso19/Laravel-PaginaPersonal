@extends('tableRoot')
@section('DataTable')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Roles_Modules</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" style="margin: 10px"> New <i class="fas fa-plus"></i>   </button>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Role_ID</th>
              <th>Module_ID</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Role_ID</th>
              <th>Module_ID</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Delete</th>
            </tr>
          </tfoot>
          <tbody>

            <?php foreach ($rolesmodules as $rolesmodules): ?>
              <tr>
                <td>  {{  $rolesmodules->id  }}  </td>
                <td>  {{  $rolesmodules->role_id  }}  </td>
                <td>  {{  $rolesmodules->module_id  }}  </td>
                <td>  {{ $rolesmodules->created_at }}  </td>
                <td>  {{ $rolesmodules->updated_at }}  </td>
                <td style="text-align:center">
                  <button name= "editButton"class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion"
                  data-role_id="{{ $rolesmodules->role_id}}"
                  data-module_id="{{ $rolesmodules->module_id}}"
                  data-id="{{ $rolesmodules->id}}">
                  <i class="fas fa-edit"></i></button>
                </td>
                <td style="text-align:center">
                  <form class="" action="{{url('tableRolesModules', $rolesmodules->id)}}" method="post">
                    {{csrf_field()}}
                    <button name="deleteButton" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>

            <!-- Modal para registros nuevos-->
            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Role_Module </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url('tableRolesModules') }}" method="post">
                      {{ csrf_field() }}
                      <label>Role_ID</label>
                      <input type="text" name="role_id" id="role_id" class="form-control input-sm">
                      <label>Module_ID</label>
                      <input type="text" name="module_id" id="module_id" class="form-control input-sm">
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

                  <form action=" {{ route('tableRolesModules.update', 'test') }}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}

                    <div class="modal-body">
                      <input type="hidden" name="rolemodule_id"  id="idRoleModule" value="">
                      <label>Role_ID</label>
                      <input type="text" name="role_idUpdate" id="role_idUpdate" class="form-control input-sm">
                      <label>Module_ID</label>
                      <input type="text" name="module_idUpdate" id="module_idUpdate" class="form-control input-sm">
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
  var role_id = button.data('role_id')
  var module_id = button.data('module_id')
  var modal = $(this)

  modal.find('.modal-body #idRoleModule').val(id)
  modal.find('.modal-body #role_idUpdate').val(role_id)
  modal.find('.modal-body #module_idUpdate').val(module_id)

})
</script>

@endsection
