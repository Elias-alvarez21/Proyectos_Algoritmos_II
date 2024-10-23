<!doctype html>
<html lang="en">
    <head>
        <title>Registrar un auto</title>
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
        <div class="container">
       <form action="{{route('auto.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control">
            </div>
            <div class="col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control">
            </div>
            <div class="col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Año</label>
                <input type="date" name="año" class="form-control">
            </div>
            <div class="col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Color</label>
                <input type="text" name="color" class="form-control">
            </div>
            <div class="col-sm-5">
                <label for="exampleFormControlInput1" class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control">
            </div>
            {{-- CREAR UN INPUT PARA CARGAR UNA IMAGEN DEL AUTO storage --}}
        </div><br>
        <button type="submit" class="btn btn-success">Guardar</button>
       </form>
    </div>
    </body>
</html>
