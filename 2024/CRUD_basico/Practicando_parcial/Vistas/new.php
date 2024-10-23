<?php 
require_once "../Clases/Area.php";
require_once "../Clases/Task.php";
require_once "../Clases/Auth.php";
session_start();
Auth::verif();

if(isset($_GET["id"])){
    $X=Task::getByidTASK($_GET["id"]);
}
?>
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
            <form action="../Controladores/<?php if(isset($_GET["id"])) echo "update.php";else echo"crear.php"?>" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="task_name">NOMBRE DE LA TAREA</label>
                        <input type="text" class="form-control" name="task_name" value="<?php if(isset($X))echo"$X->task_name";else echo"" ?>">
                        <input type="hidden" class="form-control" name="task_id" value="<?php if(isset($X))echo"$X->task_id";else echo"" ?>">

                    </div>
                    <div class="col">
                        <label class="form-label" for="area_id">ÁREA</label>
                        <select class="form-select" name="area_id" value="<?php if(isset($X))echo"$X->area_id";else echo"" ?>">
                            <?php foreach(Area::getAll() as $fila):
                                echo "<option value='$fila->area_id'>{$fila->area_name}</option>";
                                endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="description">DESCRIPCIÓN</label>
                        <input class="form-control" name="description" value="<?php if(isset($X))echo"$X->area_name";else echo"" ?>">>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="start_date">FECHA DE INICIO</label>
                        <input type="date" class="form-control" name="start_date" value="<?php if(isset($X))echo"$X->start_date";else echo"" ?>">
                    </div>
                    <div class="col">
                        <label class="form-label" for="end_date">FECHA DE FINALIZACIÓN</label>
                        <input type="date" class="form-control" name="end_date" value="<?php if(isset($X))echo"$X->end_date";else echo"" ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="priority">PRIORIDAD</label>
                        <input type="number" class="form-control" name="priority" value="<?php if(isset($X))echo"$X->priority";else echo"" ?>">
                    </div>
                    <div class="col">
                        <label class="form-label">ESTADO</label>
                        <select class="form-select" name="status" value="<?php if(isset($X))echo"$X->status";else echo"" ?>">
                            <option value="started">Started</option>
                            <option value="in progress">In Progress</option>
                            <option value="finished">Finished</option>
                            <option value="inconclusive">Inconclusive</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col text-center">
                        <?php 
                        if(isset($_GET["id"]))
                        {
                            echo"
                            <form action='../Controladores/update.php' >
                                <input type='hidden' name='id' value='$X->task_id'>
                            <button type='submit' class='btn btn-warning mx-1'>ACTUALIZAR</button><br>
                            </form>
                            
                            <form action='../Controladores/delete.php' >
                                <input type='hidden' name='id' value='$X->task_id'>
                                <button type='submit' class='btn btn-danger mx-1'>ELIMINAR</button> 
                            </form>";
                        }else{
                          echo"  <button type='submit' class='btn btn-primary mx-1'>ACEPTAR</button>";
                        }
                        
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



 