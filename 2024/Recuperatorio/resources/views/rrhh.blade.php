<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARCIAL - ALGORITMOS Y ESTRUCTURAS DE DATOS II</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}
</head>
<body>

<div class="container">

    <h5 class="center-align">Asignación de RRHH / Áreas</h5>

    <div class="row">
        <a class="btn modal-trigger" href="#infoModal">Información</a>
    </div>

    <table class="highlight">
        <thead>
            <tr>
                <th>ID</th>
                <th>RRHH</th>
                <th>Fecha</th>
                <th>Área</th>
                <th>Habilitado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todo as $t) 
            <form action="{{ route('asing.update',$t->Asing_Id)}}" method="POST">
             @csrf  @method("PUT")
            <tr>
                <td>{{ $t->Asing_Id }}</td>
                <td>
                    <select name="RRHH">
                        <option value="{{$t->rrhh}}"  selected>{{ $t->nombre." ".$t->apellido }}</option>
                        @foreach($rrhh as $r)
                        <option value="{{$r->RRHH_Id}}">{{ $r->nombre." ".$r->apellido }}</option>
                        @endforeach
                    </select>
                </td>
                <td><input type="date" value="{{ $t->fecha }}" name="fecha"/></td>
                <td>
                    <select name="areas">
                        <option value="{{$t->areas}}"  selected>{{ $t->nombreArea }}</option>
                        @foreach($areas as $a)
                        <option value="{{$a->AreasId}}"  >{{ $a->nombreArea }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <label>
                       <input type="checkbox" name="habilitado" {{ (($t->habilitado)==true)?"checked":""}} />
                        <span></span>
                    </label>
                </td>
                <td>
                    <input type="hidden" name="id" value="{{$t->Asing_Id}}">
                    <button type="submit" class="btn-small orange">Editar</button>
                </form>
                <form action="{{ route('asing.delete',$t->Asing_Id) }}" method="POST">@csrf @method("DELETE")
                    <button type="submit" class="btn-small red">Eliminar</button>
                </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>

    <h5 class="center-align">Agregar Nuevo Registro</h5>
    <form action="{{ route('asing.store') }}" method="POST">
        @csrf
        <div class="input-field col s12">
            <select id="select" name="RRHH" required>
                <option value="" disabled selected>Elige un RRHH</option>
                @foreach($rrhh as $R)
                <option value="{{$R->RRHH_Id}}">{{$R->nombre." ".$R->apellido}}</option>
                @endforeach
            </select>
            <label>RRHH</label>
        </div>

        <div class="input-field col s12">
            <input type="date" id="fecha" name="fecha" required>
            <label for="fecha">Fecha</label>
        </div>

        <div class="input-field col s12">
            <select id="area" name="areas" required>
                <option value="" disabled selected>Elige un área</option>
                @foreach($areas as $A)
                <option value="{{$A->AreasId}}">{{ $A->nombreArea }}</option>
                @endforeach
            </select>
            <label>Área</label>
        </div>

        <div class="input-field col s12">
            <p>
                <label>
                    <input type="checkbox" id="habilitado" name="Habilitado" />
                    <span>Habilitado</span>
                </label>
            </p>
        </div>

        <button class="btn waves-effect waves-light" type="submit">Agregar Registro</button>
    </form>

    <div id="infoModal" class="modal">
        <div class="modal-content">
            <h4>Información</h4>
            <p>Se asume que un rrhh puede pertenecer a varias áreas y por su parte un área disponer de más de un rrhh. El botón editar actualiza la información que puede modificarse en cada una de las filas.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
        </div>
    </div>

</div>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
        var modalElems = document.querySelectorAll('.modal');
        var modalInstances = M.Modal.init(modalElems);
    });
</script> --}}
</body>
</html>




