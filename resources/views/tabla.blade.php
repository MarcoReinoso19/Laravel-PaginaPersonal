<div class="row">
  <div class="col-sm-12">
    <h2>Modelo Tabla</h2>
    <caption>
      <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo"> Agregar <i class="fas fa-plus"></i>   </button>
    </caption>
    <table class= "table table-hover table-condensed table-bordered">

      <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Email</td>
        <td>Password</td>
        <td>Creater_At</td>
        <td>Updated_At</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>

      <?php foreach ($users as $users): ?>
      <tr>
        <td>  {{  $users->id  }}  </td>
        <td>  {{  $users->name  }}  </td>
        <td>  {{  $users->email  }}  </td>
        <td>  {{  $users->password  }}  </td>
        <td>  {{ $users->created_at }}  </td>
        <td>  {{ $users->updated_at }}  </td>
        <td>

            <button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion"> <i class="fas fa-edit"></i></button>
          
        </td>
        <td>
          <form class="" action="{{url('table', $users->id)}}" method="post">
            {{csrf_field()}}
            <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>

    </table>
  </div>
</div>
