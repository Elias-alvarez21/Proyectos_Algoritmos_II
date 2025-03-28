<!doctype html>
<html lang="en">
    <head>
        <title>Registrar un libro</title>
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
        <form method="POST" action="{{route('libros.store') }}" >
            @csrf
            <div class="container mt-5">
                <div class="col-md-3 mb-3">
                    <label for="text" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo">
                </div>
                <div class="col-md-3 mb-3">
                    <select class="form-select" name="autores" >
                        <option  value="Seleccione un autor">
                         @foreach($autores as $autor)
                            <option value="{{ $autor->autorId }}">{{ $autor->nombre }}</option>
                        @endforeach 
                    </select>
                    </div>
                 <div class="col-md-3 mb-3">
                <select class="form-select" name="categorias"  >
                    <option value="seleccione una categoria"></option>
                    @foreach($categorias as $C)
                        <option value="{{ $C->categoriaId }}">{{ $C->nombre }}</option>
                    @endforeach 
                </select>
                </div> 
                <div class="col-md-3 mb-3">
                    <label for="precioInput" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio" >
                </div><br>
                <div class="col-md-3 mb-3">
                    <button type="submit" class="btn btn-outline-warning">ACEPTAR</button>
                </div>
            </div>
        </form>

        
    </body>
</html>
