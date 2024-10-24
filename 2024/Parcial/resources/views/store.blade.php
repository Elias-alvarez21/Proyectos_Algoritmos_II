<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARCIAL - Algoritmos y Estructuras de Datos II</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
/>
</head>
<body>
    <div id="app">
        <nav class="white">
            <div class="container">
                <a class="brand-logo black-text" href="#">Aplicación CRUD</a>
            </div>
        </nav>

        <div class="container" style="max-width: 800px;">
            <h5 class="center-align">Registrar Tarea</h5>
            <form  action="{{ (isset($all)?route('tareas.update',$all->tareasId):route('tareas.store')) }}" method="POST">
                @csrf
                @if(isset($all))
                @method("PUT")
                @endif
                <input type="hidden" name="tareaId" value="{{(isset($all->tareasId))?$all->tareasId:""}}">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" id="currentUser" class="validate" value="1" name="usuario" readonly>
                        <label for="currentUser">USUARIO ACTUAL</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="input-field col s12">
                        <label for="rangePriority">PRIORIDAD</label>
                        <input name="prioridad"type="range" id="rangePriority" min="1" max="10" step="1" style="margin-top: 50px;">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea name="descripcion" id="description" class="materialize-textarea" maxlength="255" >{{(isset($all))?$all->descripcion : ""}}</textarea>
                        <label for="description">DESCRIPCIÓN</label>
                    </div>
                </div>
                <input type="hidden"  value="{{now()}}"name="alta">
                <div class="row">
                    <div class="input-field col s6" style="padding-right: 5px;">
                        <input type="date" id="expiration" class="datepicker" name="vencimiento" value="{{ (isset($all))?$all->vencimiento : ""}}">
                        <label for="expiration">VENCIMIENTO</label>
                    </div>
                    <div class="form-select" aria-label="Default select example">
                        <select id="status" name="estado">
                            <option value="value="{{ (isset($all))?$all->estado : ""}} disabled selected>{{ (isset($all))?$all->estado : "SELECCIONA ESTADO"}}</option>
                            <option value="pending">PENDIENTE</option>
                            <option value="finished">FINALIZADA</option>
                            <option value="expired">VENCIDA</option>
                        </select>
                        <label>ESTADO</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center-align">
                        <button class="btn btn-success" type="submit">ACEPTAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- <script>
         $(document).ready(function(){
            $('.datepicker').datepicker();
            $('.status').slider();
            $('select').formSelect();
        });
    </script> --}}
</body>
</html>

