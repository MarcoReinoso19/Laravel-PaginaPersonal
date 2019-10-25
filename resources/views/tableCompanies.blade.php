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
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th>Actions</th>
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
              <td>
                <a href="#">Editar</a>
                <a href="#">Eliminar</a>
              </td>
            </tr>
          <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection
