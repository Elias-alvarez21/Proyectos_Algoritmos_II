<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Propiedad</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-center">Registrar Propiedad</h3>
        </div>
        <div class="card-body">
          <form action="../controllers/city.php" method="post">
            <div class="mb-3">
              <label for="inputTitle" class="form-label">Título</label>
              <input type="text" class="form-control" id="inputTitle" name="title" required>
            </div>
            <div class="mb-3">
              <label for="inputDescription" class="form-label">Descripción</label>
              <textarea class="form-control" id="inputDescription" name="description"></textarea>
            </div>
            <div class="mb-3">
              <label for="inputOperationType" class="form-label">Tipo de Operación</label>
              <select class="form-select" id="inputOperationType" name="operation_type" required>
                <option value="Rent">Alquiler</option>
                <option value="Sale">Venta</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="inputPrice" class="form-label">Precio</label>
              <input type="number" class="form-control" id="inputPrice" name="price" step="0.01" required>
            </div>
            <div class="mb-3">
              <label for="inputCurrency" class="form-label">Moneda</label>
              <input type="text" class="form-control" id="inputCurrency" name="currency" required>
            </div>
            <div class="mb-3">
              <label for="inputBedrooms" class="form-label">Dormitorios</label>
              <input type="number" class="form-control" id="inputBedrooms" name="bedrooms">
            </div>
            <div class="mb-3">
              <label for="inputSquareMeters" class="form-label">Metros Cuadrados</label>
              <input type="number" class="form-control" id="inputSquareMeters" name="square_meters" step="0.01">
            </div>
            <div class="mb-3">
              <label for="inputAddress" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="inputAddress" name="address">
            </div>
            <div class="mb-3">
              <select class="form-control" name="ciudad">
                <?php
                  require '../classes/city.class.php';
                  foreach(City::getAll() as $city)
                  echo "<option value='{$city['id_city']}'>{$city['name']} ({$city['postal_code']})</option>";                   
                ?>
              </select>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Registrar</button>
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





