@extends('tableRoot')
@section('DataTable')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Companies</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo" style="margin: 10px"> New <i class="fas fa-plus"></i>   </button>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
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
              <th>Email</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th style="text-align:center">Edit</th>
              <th style="text-align:center">Delete</th>
            </tr>
          </tfoot>
          <tbody>

            <?php foreach ($companies as $companies): ?>
              <tr>
                <td>  {{  $companies->id  }}  </td>
                <td>  {{  $companies->name  }}  </td>
                <td>  {{  $companies->email  }}  </td>
                <td>  {{ $companies->created_at }}  </td>
                <td>  {{ $companies->updated_at }}  </td>
                <td style="text-align:center">
                  <button name= "editButton"class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion"
                  data-nit="{{ $companies->nit}}"
                  data-name="{{ $companies->name}}"
                  data-email="{{ $companies->email}}"
                  data-id="{{ $companies->id}}">
                  <i class="fas fa-edit"></i></button>
                </td>
                <td style="text-align:center">
                  <form class="" action="{{url('tableCompanies', $companies->id)}}" method="post">
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Company </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url('tableCompanies') }}" method="post">
                      {{ csrf_field() }}
                      <label>Nit</label>
                      <input type="text" name="nit" id="nit" class="form-control input-sm">
                      <label>Name</label>
                      <input type="text" name="name" id="name" class="form-control input-sm">
                      <label>Email</label>
                      <input type="text" name="email" id="email" class="form-control input-sm">
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

                  <form action=" {{ route('tableCompanies.update', 'test') }}" method="post">
                    {{method_field('patch')}}
                    {{csrf_field()}}

                    <div class="modal-body">
                      <input type="hidden" name="company_id"  id="idCompany" value="">
                      <label>Nit</label>
                      <input type="text" name="nitUpdate" id="nitUpdate" class="form-control input-sm">
                      <label>Name</label>
                      <input type="text" name="nameUpdate" id="nameUpdate" class="form-control input-sm">
                      <label>Email</label>
                      <input type="text" name="emailUpdate" id="emailUpdate" class="form-control input-sm">
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
  var nit = button.data('nit')
  var name = button.data('name')
  var email = button.data('email')
  var modal = $(this)

  modal.find('.modal-body #idCompany').val(id)
  modal.find('.modal-body #nitUpdate').val(nit)
  modal.find('.modal-body #nameUpdate').val(name)
  modal.find('.modal-body #emailUpdate').val(email)

})
</script>

@endsection
