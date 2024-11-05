<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARCIAL - Algoritmos y Estructuras de Datos II</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            <form method="POST"  action="{{(isset($T))? route('tareas.update',$T[0]->TareaId):route('tareas.store') }}">
                
                @csrf   @if(isset($T)) @method("PUT") @endif
                <input type="hidden" name="tareaId" value="{{ (isset($T))?$T[0]->TareaId : ""}}">
                
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="currentUser" class="validate" value="{{Auth::user()->name}}" readonly>
                        <input type="hidden" name="usuario_id" value="{{Auth::user()->id}}">
                        <label for="currentUser">USUARIO ACTUAL</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px;">
                    <div class="input-field col s12">
                        <label for="rangePriority">PRIORIDAD</label>
                        <input type="range" id="rangePriority" min="1" max="10" step="1" style="margin-top: 50px;" name="prioridad" value="{{ (isset($T))?$T[0]->prioridad : ""}}">
                    </div>
                </div>
                <input type="hidden" name="alta" value="{{now()}}">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="description" class="materialize-textarea" maxlength="255" name="descripcion" >{{ (isset($T))?$T[0]->descripcion : ""}}</textarea>
                        <label for="description">DESCRIPCIÓN</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6" style="padding-right: 5px;">
                        <input type="date" id="expiration" class="datepicker" name="vencimiento" value="{{ (isset($T))?$T[0]->vencimiento : ""}}">
                        <label for="expiration">VENCIMIENTO</label>
                    </div>
                    <div class="input-field col s6" style="padding-left: 5px;">
                        <select id="status" name="estado">
                            <option value="{{ (isset($T))?$T[0]->estado : ""}}" disabled selected>{{ (isset($T))?$T[0]->estado : "SELECCIONA ESTADO"}}</option>
                            
                            <option value="pending">PENDIENTE</option>
                            <option value="finished">FINALIZADA</option>
                            <option value="expired">VENCIDA</option>
                        </select>
                        <label>ESTADO</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light blue" type="submit">ACEPTAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.expiration').datepicker();
            $('.status').slider();
            $('select').formSelect();
        });
    </script>
</body>
</html>

