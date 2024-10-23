<?php 
require_once '../clases/socios.php';
$socios=Socios::getTodo();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Apellido y nombre</th>
      <th scope="col">DNI</th>
      <th scope="col">Nacimiento</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($socios as $socio)
        {
            echo"<tr>
            <td>$socio->partnerId</td>
            <td>$socio->partner</td>
            <td>$socio->NID</td>
            <td>$socio->birthdate</td>
            <td>$socio->gender</td>
            <td><a href='activiSocio.php?id={$socio->partnerId}' class='btn btn-primary'>Pagos</a></td>
          </tr>";
        }
    ?>
  </tbody>
    </table>
    </div>
    </body>
</html>
