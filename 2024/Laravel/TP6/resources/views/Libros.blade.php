<!doctype html>
<html lang="en">
    <head>
        <title>Listado de libros</title>
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
            <h1>Libros</h1>
            <form action="{{route('libros.create')}}" method="GET">
              <button type="submit" class="btn btn-outline-light btn-sm">
                <i class="fas fa-edit"></i> NUEVO REGISTRO
              </button>
            </form><br>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>----------</th>
                <th>ID Libro</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>----BOTONES----</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($libros as $L)
             <tr>
              <td>
                <form action="{{route('ventas.index', $L->libroId)}}" method="GET">
                  <button type="submit" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-edit"> Ventas</i>
                  </button>
                </form>
                </td>
                  <td>{{$L->libroId}}</td>
                  <td>{{$L->titulo}}</td>
                  <td>{{$L->autor_Id}}</td>
                  <td>{{$L->categoria_Id}}</td>
                  <td>{{$L->precio}}</td>
                  <td><div  class="d-inline">
                    {{-- <form action="{{route('libros.edit',[$L->libroId])}}" method="GET">
                    <button type="submit" class="btn btn-outline-primary btn-sm">
                      Editar
                    </button>
                  </form> --}}
                  <form action="{{route('libros.delete', $L->libroId)}}" method="GET">
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        Eliminar
                    </button>
                  </form>
                  <form action="{{route('vistazo.imagen',$L->ruta)}}" method="GET">
                    <button class="btn btn-outline-info">Ver imagen</button>
                  </form>
                </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </body>
</html>
