<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="twitter:" content="">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('alertifyjs/css/alertify.css') }}">
    <link rel="stylesheet" href="{{ asset('alertifyjs/css/themes/default.css') }}">

    <script src="https://kit.fontawesome.com/248cde9816.js" crossorigin="anonymous"></script>


    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('alertifyjs/alertify.js') }}"></script>
    <script src="http://localhost:35729/livereload.js"></script>

    <title>Tabla Dinamica</title>
  </head>
  <body>

    <div class="container">
      <div id="tabla">
        @include('tabla')
      </div>
    </div>


    <!-- Modal para registros nuevos-->
    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Persona</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('table') }}" method="post">
              {{ csrf_field() }}
              <label>Nombre</label>
              <input type="text" name="name" id="name" class="form-control input-sm">
              <label>Email</label>
              <input type="text" name="email" id="email" class="form-control input-sm">
              <label>Password</label>
              <input type="text" name="password" id="password" class="form-control input-sm">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
          </div>
        </div>
      </div>
    </div>


<!-- Modal para edicion de datos -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


        <div class="modal-body">
          <input type="text" hidden="" id="idPersona">
          <label>Nombre</label>
          <input type="text" name="nameUpdate" id="nameUpdate" class="form-control input-sm" value="{{ old('name, $user->name')}}" >
          <label>Email</label>
          <input type="text" name="emailUpdate" id="emailUpdate" class="form-control input-sm" placeholder=""="1234565">
          <label>Password</label>
          <input type="text" name="passwordUpdate" id="passwordUpdate" class="form-control input-sm">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-warning">Actualizar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>









    </div>
  </div>
</div>


  </body>

  <script type="text/javascript">
      $(document).ready(function(){
        $('#tabla').load({{ url('tabla') }});
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#guardarnuevo').click(function(){
        nombre =$('#nombre').val();
        email =$('#email').val();
        password =$('#password').val();
          agregarDatos(nombre, email, password);
      });
    });
</script>
</html>
