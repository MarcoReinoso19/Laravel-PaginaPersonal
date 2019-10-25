@extends('tableRoot')

@section('DataTable')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">UsersRoles</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>company_ID</th>
              <th>user_ID</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>company_ID</th>
              <th>user_ID</th>
              <th>Created At</th>
              <th>Updated_At</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>

            <?php foreach ($companiesusers as $companiesusers): ?>
            <tr>
              <td>  {{  $companiesusers->id  }}  </td>
              <td>  {{  $companiesusers->company_id  }}  </td>
              <td>  {{  $companiesusers->user_id  }}  </td>
              <td>  {{ $companiesusers->created_at }}  </td>
              <td>  {{ $companiesusers->updated_at }}  </td>
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
