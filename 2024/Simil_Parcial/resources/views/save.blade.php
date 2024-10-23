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

        <div class="container" style="width: 80%">
            
            <form action="{{ (isset($L))? route('personas.update'):route('personas.store') }}" method="POST">
                
                 @csrf   @if(isset($L)) @method('PUT')  @endif
                 <input type="hidden" name="personasId" value="{{ isset($L)? $L->personasId : 0}}">

                <div class="row mb-3 mt-3">
                <label for="Legajo" class="col-sm-2 col-form-label">Legajo</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" placeholder="123456" name="Legajo" value="{{ (isset($L))?$L->legajo:"" }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
            <label class="form-label" for="Area">ÁREA / SECTOR</label>
                <select class="form-control" name="Area">
                <option selected disabled value="{{ (isset($L))?$L->area_id:"" }}" >{{ (isset($L))?$L->area_nombre:"SELECCIONE UNA AREA/SECTOR"}}</option>
                @foreach($areas as $a)
                <option value="{{ $a->area_Id}}" >{{ $a->area_nombre}}</option>
                @endforeach
                </select>
            </div>
            </div>  
            <div class="row mb-3">
                <div class="col">
                    <label for="Apellido" class="form-label">Apellido</label>
                    <input type="text" name="Apellido" class="form-control" placeholder="Apellido" aria-label="Apellido" value="{{ (isset($L))?$L->apellido:"" }}">
                  </div>
                  <div class="col">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" value="{{ (isset($L))?$L->nombre:"" }}">
                  </div>
            </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="Fecha" class="form-label">Fecha de Ingreso</label>
                        <input type="date" name="Fecha" class="form-control" aria-label="Fecha" value="{{ (isset($L))?$L->fecha_ingreso:""}}">
                      </div>
                      <div class="col form-group">
                        <label class="form-label">Estado</label>
                        <BR>
                        {{-- MEDIANTE UN IF HACER FUNCIONAR LO DE ABAJO --}}
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="Activo" name=Estado {{ (($L->estado)=="Activo")?"checked": "" }}>
                            <label class="form-check-label" for="Activo">Activo</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="Baja" name=Estado {{ (($L->estado)=="Baja")?"checked": "" }}>
                            <label class="form-check-label" for="Baja">Baja</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="Jubilado" name=Estado {{ (($L->estado)=="Jubilado")?"checked": "" }}>
                            <label class="form-check-label" for="Jubilado">Jubilado</label>
                          </div>
                </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col text-center">
                          <button type="submit" class=" btn-primary">ACEPTAR</button>
                      </div>
                     </div>  
            </form>
</div>
    </div>
</body>
</html>