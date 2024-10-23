<!DOCTYPE html>
<html>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
.circular-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: none;
  outline: none;
  background-color: #007bff;
  color: #fff;
  font-size: 24px;
  cursor: pointer;
  transition: transform 0.3s;
}

.circular-btn:hover {
  transform: rotate(360deg);
}
</style>  
    
</head>

<body>
<div class="container" style="width:80%"> 
<BR>
<?php if(isset($_GET['message'])) {
          if($_GET['message']) 
            echo '<div class="alert alert-success" role="alert">El estudiante se actualizó correctamente!!!</div>';
          else
          echo '<div class="alert alert-danger" role="alert">Sucedió un error!!!!</div>';
          }
?>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr><th>#</th><th>Apellido</th><th>Nombre</th><th>Carrera</th><th></th></tr>
    </thead>
    <tbody>

<?php
require_once "db.php";
$sth = $connect->query("SELECT C.*, S.* FROM careers C INNER JOIN students S ON S.career_code = C.career_code ORDER BY S.last_name");
$rows = $sth->fetchAll();

foreach($rows as $row) {
        echo "<tr><td>{$row['id']}<td>{$row['last_name']}<td>{$row['first_name']}<td>{$row['career_name']}</td><td><a href='student.php?id={$row['id']}' class='btn btn-primary'>EDITAR ESTUDIANTE {$row['id']}</a></td><td><form action='delete.php' method='POST'><input type='hidden' name='id' value='{$row['id']}'><input type='submit' class='btn btn-danger' value='Eliminar'></form></td></tr>";
}

?>
    </tbody>
</table>
</div>
</div>
<a href="student.php" id="btnAdd" class="btn btn-primary circular-btn">+</a>
</body>

</html>

