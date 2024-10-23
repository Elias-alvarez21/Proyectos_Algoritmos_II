<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Inicio de Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Inicio de Sesión</h3>
        </div>
        <div class="card-body">
          <form action="../controllers/login.php" method="POST">
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="usuario@ejemplo.com" required>
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña" required>
            </div>
             <div class="d-grid">
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
