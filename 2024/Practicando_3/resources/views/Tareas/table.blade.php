<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <!-- Bootstrap CSS v5.2.1 -->
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
            @foreach($T as $Ta)
            <tr>
            <td>{{ $Ta->TareaId }}</td>
            <td>{{ $Ta->name }}</td>    
            <td>{{ $Ta->descripcion }}</td>
            <td>{{ $Ta->alta }}</td>
            <td>
                <div class="progress">
                    <div class="determinate" style="width: {{($Ta->prioridad)*10}}%"></div>
                </div>
            </td>
            <td>{{ $Ta->vencimiento }}</td>
            <td><span class="new badge green" data-badge-caption="">{{ $Ta->estado }}</span></td>  
            <td style="text-align:center;"><a href="{{ route('tareas.edit',$Ta->TareaId) }}" class="btn blue btn-small"><i class="fas fa-edit"></i></a></td>
            <td style="text-align:center;">
                <form action="{{ route('tareas.destroy',$Ta->TareaId)}}" method="POST">
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