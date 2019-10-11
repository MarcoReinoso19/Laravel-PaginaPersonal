<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consulta a la Base de Datos</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container">
      <?php foreach ($roles as $roles): ?>
        <h2>{{ $roles->name }}</h2>
        <span>Id = {{ $roles->id }} <br></span>
        <span>Creado el {{ $roles->created_at }}<br></span>
        <span>Actualizado el {{ $roles->updated_at }}<br></span>
      <?php endforeach; ?>
    </div>

    <div class="table-container" style="padding:100px">
      <h2>Todas las Tablas</h2>
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Created At</th>
          <th>Updated_At</th>
          <th>Actions</th>
        </tr>

      <?php foreach ($roles2 as $roles2): ?>
        <tr>
          <td>{{$roles2->id}}</td>
          <td>{{$roles2->name}}</td>
          <td>{{$roles2->created_at }}</td>
          <td>{{$roles2->updated_at }}</td>
          <td>
            <a href="#">Editar</a>
            <a href="#">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>

      </table>
    </div>
    <script src="{{ asset('css/bootstrap.min.css') }}"></script>
  </body>
</html>
