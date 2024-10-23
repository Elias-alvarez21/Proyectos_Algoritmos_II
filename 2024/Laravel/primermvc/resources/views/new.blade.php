<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Formulario con Bootstrap</h2>
    <form action="{{route('estudiante.store')}}" method="POST">
       @csrf
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
      </div>
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad" required>
      </div>
      <div class="form-group">
        <label for="cursando">¿Está cursando?</label>
        <select class="form-control" id="cursando" name="cursando" required>
          <option value="">Seleccione una opción</option>
          <option value="1">Sí</option>
          <option value="0">No</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <!-- Bootstrap JS y Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
