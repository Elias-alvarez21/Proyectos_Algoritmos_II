<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARCIAL - Algoritmos y Estructuras de Datos II</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div id="app">
        <nav class="white">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Aplicación CRUD</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>

        <div class="container" style="width: 80%;">
            <table id="listTable" class="striped responsive-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>GENERADA POR</th>    
                        <th>DESCRIPCIÓN</th>
                        <th>ALTA</th>
                        <th>PRIORIDAD</th>
                        <th>VENCIMIENTO</th>
                        <th>ESTADO</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
    <tbody>
        @foreach($all as $a)
        <tr>
            <td>{{$a->tareasId}}</td>
            <td>{{$a->name}}</td>
            <td>{{$a->descripcion}}</td>
            <td>{{$a->alta}}</td>
            <td>{{$a->prioridad}}</td>
            {{-- <td>
                <div class="progress" value="{{($a->prioridad)*10}}">
                    <div class="determinate"   aria-valuemax="100"></div>
                </div>
            </td> --}}
            <td>{{$a->vencimiento}}</td>
            <td><span class="new badge green" data-badge-caption="">FINALIZADA</span></td>  
            <td style="text-align:center;"><a href="{{ route('tareas.edit',$a->tareasId) }}" class="btn blue btn-small"><i class="fas fa-edit"></i></a></td>
            <td style="text-align:center;">
                <form action="{{ route('tareas.delete',$a->tareasId) }}" method="POST">
                    @csrf @method("DELETE")
                    <button type="submit" class="btn red btn-small" onclick="return confirm('¿Desea eliminar la tarea?')"><i class="fas fa-window-close"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
           </table>

            <div class="d-flex">
                <ul class="pagination">
                    <li class="disabled"><a href="#">Anterior</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li class="waves-effect"><a href="#">2</a></li>
                    <li class="waves-effect"><a href="#">Siguiente</a></li>
                </ul>
            </div>

            <div class="row">
                <div class="col"><hr></div>
            </div>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <a href="{{ route('tareas.create') }}" class="btn green btn-small"><i class="fas fa-user-plus"></i></a>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>
