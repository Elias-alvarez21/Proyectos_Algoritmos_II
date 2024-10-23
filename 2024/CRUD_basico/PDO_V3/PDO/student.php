<?php
include 'classes/career.php';
include 'classes/student.php';
require_once 'classes/login.php';
session_start();
Login::Verify();

if(isset($_GET['id']))
$FindId = Student::getById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Alta de Estudiante</h2>
  <form action="./controllers/<?php if(isset($FindId->id)) echo "update.php"; else echo "insert.php"; ?>" method="POST">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="first_name" value="<?php if(isset($FindId->first_name)) echo $FindId->first_name; ?>" placeholder="Ingresa tu nombre">
    </div>
    <div class="form-group">
      <label for="apellido">Apellido:</label>
      <input type="text" class="form-control" id="apellido" name="last_name" value="<?php if(isset($FindId->last_name)) echo $FindId->last_name; ?>" placeholder="Ingresa tu apellido">
    </div>
    <div class="form-group">
      <label for="pais">Carrera:</label>
      <select class="form-control" id="carrera" name="career">
      <?php
          foreach(Career::getAll() as $row) {
            echo "<option value='{$row->career_code}' ".(isset($FindId->career_code) ? ($FindId->career_code == $row->career_code ? " selected " : "") : "").">{$row->career_name}</option>";
          }
?>
      </select>
    </div>
    <?php if(isset($FindId)) echo "<input type='hidden' name='idActualizar' value='{$FindId->id}'>"; ?>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
</body>
</html>
