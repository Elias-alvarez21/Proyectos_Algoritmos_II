<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARCIAL - Algoritmos y Estructuras de Datos II</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    Aplicación CRUD
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="container" style="width: 80%;">
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <table id="listTable" class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>LEGAJO</th>
                                <th style="display:none">ID</th>
                                <th>ÁREA / SECTOR</th>    
                                <th>APELLIDO</th>
                                <th>NOMBRE</th>
                                <th>FECHA DE INGRESO</th>
                                <th>ESTADO</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($pers as $p) 
                                <tr>
                                    <td>{{ $p->legajo }}</td>
                                    <td style="display:none">{{ $p->personasId }}</td>
                                    <td>{{ $p->area_nombre  }}</td>
                                    <td>{{ $p->apellido }}</td>
                                    <td>{{ $p->nombre }}</td>
                                    <td>{{ $p->fecha_ingreso }}</td>
                                    <td>{{ $p->estado}}</td>
                                    <td style="text-align:center;"><a href="{{ route('personas.edit',$p->personasId) }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fas fa-edit" aria-hidden="true"></i></a></td>
                                <td style="text-align:center;">
                                   <form action="{{ route('personas.destroy',$p->personasId) }}" method="POST">
                                    @method("DELETE") @csrf
                                       <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Desea eliminar el producto?')"><i class="fas fa-window-close" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                                </tr>    
                                @endforeach
                                
                        </tbody>
                    </table>
                    
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
                </div>
            </div>
            <div class="row">
        <div class="col"><hr></div>
    </div>
    <div class="row justify-content-center">
              <div class="col text-center">
                <a href="{{ route('personas.create') }}" class="btn btn-success btn-sm active" role="button" aria-pressed="true"><i class="fas fa-user-plus" aria-hidden="true"></i></a>
            </div>
   </div> 
</div>
    </div>
</body>
</html>