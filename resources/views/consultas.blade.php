<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consulta a la Base de Datos</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  </head>
  <body>

    <div class="table-container" style="padding:100px">
      <h1>Todas las Tablas</h1>

<div class="table-container" style="padding:100px">
      <h2>Tabla Users</h2>
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Created At</th>
          <th>Updated_At</th>
          <th>Actions</th>
        </tr>

      <?php foreach ($users as $users): ?>
        <tr>
          <td>{{$users->id}}</td>
          <td>{{$users->name}}</td>
          <td>{{$users->email}}</td>
          <td>{{$users->password}}</td>
          <td>{{ $users->created_at }}</td>
          <td>{{ $users->updated_at }}</td>
          <td>
            <a href="#">Editar</a>
            <a href="#">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>

      </table>
      </div>

      <h2>Tabla Roles</h2>
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Created At</th>
          <th>Updated_At</th>
          <th>Actions</th>
        </tr>

      <?php foreach ($roles as $roles): ?>
        <tr>
          <td>{{ $roles->id}}</td>
          <td>{{ $roles->name}}</td>
          <td>{{ $roles->created_at }}</td>
          <td>{{ $roles->updated_at }}</td>
          <td>
            <a href="#">Editar</a>
            <a href="#">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>

      </table>
      </div>



      </table>
</div>
    </div>
    <script src="{{ asset('css/bootstrap.min.css') }}"></script>
  </body>
</html>
