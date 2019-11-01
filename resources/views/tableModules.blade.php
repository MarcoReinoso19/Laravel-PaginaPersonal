@extends('tableRoot')
@section('DataTable')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Modules</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" style="margin: 10px"> New <i class="fas fa-plus"></i>   </button>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Route</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Route</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Delete</th>
            </tr>
          </tfoot>
          <tbody>

            <?php foreach ($modules as $modules): ?>
              <tr>
                <td>  {{  $modules->id  }}  </td>
                <td>  {{  $modules->name  }}  </td>
                <td>  {{  $modules->route  }}  </td>
                <td>  {{ $modules->created_at }}  </td>
                <td>  {{ $modules->updated_at }}  </td>
                <td style="text-align:center">
                  <button name= "editButton"class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion"
                  data-name="{{ $modules->name}}"
                  data-route="{{ $modules->route}}"
                  data-id="{{ $modules->id}}">
                  <i class="fas fa-edit"></i></button>
                </td>
                <td style="text-align:center">
                  <form class="" action="{{url('tableModules', $modules->id)}}" method="post">
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Module </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url('tableModules') }}" method="post">
                      {{ csrf_field() }}
                      <label>Name</label>
                      <input type="text" name="name" id="name" class="form-control input-sm">
                      <label>Route</label>
                      <input type="text" name="route" id="route" class="form-control input-sm">
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

                  <form action=" {{ route('tableModules.update', 'test') }}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}

                    <div class="modal-body">
                      <input type="hidden" name="module_id"  id="idModule" value="">
                      <label>Name</label>
                      <input type="text" name="nameUpdate" id="nameUpdate" class="form-control input-sm">
                      <label>Route</label>
                      <input type="text" name="routeUpdate" id="routeUpdate" class="form-control input-sm">
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
  var route = button.data('route')
  var modal = $(this)

  modal.find('.modal-body #idModule').val(id)
  modal.find('.modal-body #nameUpdate').val(name)
  modal.find('.modal-body #routeUpdate').val(route)

})
</script>

@endsection
