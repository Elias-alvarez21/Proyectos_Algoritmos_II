<!doctype html>
<html lang="en">
    <head>
        <title>Calculadora</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <style>
          body{
            background-color: #918e8e;
          }
        </style>
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    
    <body>
    <a href="../Index.html" class="btn btn-primary">←</a>
    <div class="container" style="width: 80%">
      <form action="operacion.php" method="GET" >
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Primer Valor</label>
        <input type="number" class="form-control"name="primervalor">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Segundo Valor</label>
        <input type="number" class="form-control" name="segundovalor">
      </div>
      <div class="mb-3">
        <label for="exampleSelect" class="form-label">Operación</label>
        <select class="form-select" name="operacion">
          <option name="Suma">Suma</option>
          <option name="Resta">Resta</option>
          <option name="Multiplicacion">Multiplicacion</option>
          <option name="División">Division</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
  </form>
</div>

    </body>
</html>
