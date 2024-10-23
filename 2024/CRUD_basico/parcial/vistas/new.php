<?php 
require_once "../clases/area.php";
require_once "../clases/tareas.php";
$Select1=Area::getAll();
$Select2=Tareas::getAll();

$X=Tareas::getByUser($_GET["id"]);
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
            <form action="../controladores/"<?php if(isset($_GET["id"]))echo "actualizar.php";else echo "crear.php"?> method="POST">
                <input type="hidden" name="idUsuario" value=1>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="task_name">NOMBRE DE LA TAREA</label>
                        <input type="text" class="form-control" id="task_name" name="task_name" required
                        value="<?php if(isset($X->area_name))echo $X->area_name ?>">
                    </div>
                    <div class="col">
                        <label class="form-label" for="area_id">ÁREA</label>
                        <select class="form-select" id="area_id" name="area_id">
                            <?php foreach($Select1 as $impr)
                            echo "<option value='{$impr->area_id}'>$impr->area_name</option>";
                            ?>
                        </select>
                        <!-- <option value="1">Software Development</option> -->
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="description">DESCRIPCIÓN</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="start_date">FECHA DE INICIO</label>
                        <input type="date" class="form-control" id="start_date" name="start_date">
                    </div>
                    <div class="col">
                        <label class="form-label" for="end_date">FECHA DE FINALIZACIÓN</label>
                        <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="priority">PRIORIDAD</label>
                        <input type="number" class="form-control" id="priority" name="priority">
                    </div>
                    <div class="col">
                        <label class="form-label">ESTADO</label>
                        <select class="form-select" name="state">
                        <option value="started">Started</option>
                            <option value="in progress">In Progress</option>
                            <option value="finished">Finished</option>
                            <option value="inconclusive">Inconclusive</option>
                          
                            <!-- foreach($Select2 as $impr2);
                            if($impr2->priority==1) echo" <option value=></option>";else  -->
                            
                                               
                        </select>
                    </div>
                </div> 
                <div class="row justify-content-center">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary mx-1">ACEPTAR</button>

                        <button type="button" class="btn btn-warning mx-1">ACTUALIZAR</button>
                        <button type="button" class="btn btn-danger mx-1">ELIMINAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



