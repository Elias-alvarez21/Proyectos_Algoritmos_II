<?php 
require_once "../Clases/Auth.php";
session_start();
Auth::verif();
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
 <style>
        .circular-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            outline: none;
            background-color: #007bff;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            transition: transform 0.3s;
        }
       .circular-btn:hover {
            transform: rotate(360deg);
        }
    </style>
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
                                <th>#</th>
                                <th>ÁREA</th>    
                                <th>DESCRIPCIÓN</th>
                                <th>INICIO</th>
                                <th>FINALIACIÓN</th>
                                <th>PRIORIDAD</th>
                                <th>ESTADO</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require_once "../Clases/Task.php";
                            foreach(Task::getAll() as $fila):
                                #$variable = ($fila->status='started') ? 'primary' : 'danger';
                                                                #$variable = ($fila->status='started') ? 'primary' : 'danger';
                                /*if(($fila->status=="started"))
                                {
                                    $color="primary";
                                }elseif($fila->status=="inconclusive")
                                {
                                    $color="danger";
                                }
                                else{
                                    $color="success";
                                }*/
                            echo "
                             <tr>
                                <td>$fila->task_id</td>
                                <td>$fila->task_name</td>
                                <td>$fila->area_name</td>
                                <td>$fila->start_date</td>
                                <td>$fila->end_date</td>
                                
                                <td><div class='progress'><div class='progress-bar bg-warning' role='progressbar' style='width: $fila->priority%' aria-valuenow='2' aria-valuemin='0' aria-valuemax='100'></div></div></td>
                                <td><span class='badge rounded-pill bg-primary'>$fila->status</span></td>  
                                <td style='text-align:center;'><a href='new.php?id=$fila->task_id' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='fas fa-eye' aria-hidden='true'></i></a></td>
                            </tr> 
                                ";
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="container">
                <a href="new.php" id="btnAdd" class="btn btn-primary circular-btn">+</a>
            </div>
        </div>
    </div>
</body>
</html>
