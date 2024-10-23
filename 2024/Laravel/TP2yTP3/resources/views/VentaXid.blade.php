<!doctype html>
<html lang="en">
    <head>
        <title>Ventas</title>
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
        <style>
            body {
                background-color: #808080;
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <h1>Ventas del libro</h1>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>ID venta</th>
                <th>Libro</th>
                <th>Fecha</th>
                <th>Total $</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($venta as $V)
             <tr>
                <td>{{$V->ventaId}}</td>
                <td>{{$V->libro_Id}}</td>
                <td>{{$V->fecha}}</td>
                <td>{{$V->total}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>
