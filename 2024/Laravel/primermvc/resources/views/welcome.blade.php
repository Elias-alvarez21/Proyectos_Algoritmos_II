<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla con Bootstrap y Font Awesome</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container mt-5">
    <h2>Ejemplo de Tabla con Bootstrap y Font Awesome</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Apellido</th>
          <th>Nombre</th>
          <th>Edad</th>
          <th>Habilitado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($estudiantes as $e)
       <tr>
          <td>{{$e->id}}</td>
          <td>{{$e->apellido}}</td>
          <td>{{$e->nombre}}</td>
          <td>{{$e->edad}}</td>
          <td>
            @if($e->cursando == 1)
            <span class="text-success">
              <i class="fas fa-check-circle"></i>
            </span>
            @else
            <span class="text-danger">
                <i class="fa-solid fa-xmark"></i>
              </span>
            @endif
          </td>
          <td>
            <button type="button" class="btn btn-primary btn-sm">
              <i class="fas fa-edit"></i> Editar
            </button>
            <button type="button" class="btn btn-danger btn-sm ml-2">
              <i class="fas fa-trash-alt"></i> Eliminar
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS y Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

