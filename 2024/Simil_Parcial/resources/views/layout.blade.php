<!doctype html>
<html lang="en">
    <head>
        <title>LEGAJOS REGISTRADOS</title>
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
                   <style>
            body {
                background-color: #808080;
            }
            #contenedor{
                background-color: rgb(255, 255, 255);
            }
        </style>
    </head>

    <body>
        <div>
            @yield("content")
        </div>
        <div class="d-flex">
            <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(Actual)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                  </li>
                </ul>
              </nav>
        </div>
        <div class="row">
            <div class="col"><hr></div>
        </div>
        <div class="row justify-content-center">
                  <div class="col text-center">
                    <a href="{{ route('personas.create') }}" class="btn btn-success btn-sm active" role="button" aria-pressed="true"><i class="fas fa-user-plus" aria-hidden="true"></i></a>
                </div>
        </div>
    </body>
</html>
