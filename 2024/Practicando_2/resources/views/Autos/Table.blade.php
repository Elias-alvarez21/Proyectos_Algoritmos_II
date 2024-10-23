<!doctype html>
<html lang="en">
    <head>
        <title>Lista de autos</title>
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
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($autos as $a)
                <tr>
                    <td>{{ $a->autoId }}</td>
                    <td>{{ $a->marca }}</td>
                    <td>{{ $a->modelo }}</td>
                    <td>{{ $a->año}}</td>
                    <td>{{ $a->color }}</td>
                    <td>{{ $a->precio}}</td>
                    <td><form action="{{ route("autos.delete",$a->autoId) }}" method="POST">@csrf @METHOD('DELETE')<button class="btn btn-outline-danger" type="submit">ELIMINAR</button></form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
