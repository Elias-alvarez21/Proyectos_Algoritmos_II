<?php 
require_once "../Clases/Auth.php";
session_start();
Logueo::verif();


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
                                <th>TÍTULO</th>    
                                <th>DIRECTOR</th>
                                <th>AÑO ESTRENO</th>
                                <th>GÉNERO</th>
                                <th>RATING</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                            require_once "../Clases/Movies.php";
                            $x= new Movies("1","2",3,"4","5","6",7,8);//le mando parametros alesatorios para que me devuelva el getAll
                            #$x->getAll();
                            #var_dump(Movies::getAll());
                              foreach($x->getAll() as $filas):
                                echo"
                                <tr >
                                    <td>$filas->id </td>
                                    <td>$filas->title </td>
                                    <td>$filas->director </td>
                                    <td>$filas->release_year </td>
                                    <td>$filas->genre </td>
                                    <td>$filas->rating </td>
                                    <td style='text-align:center;'><a href='register.php?id=$filas->id' class='btn btn-primary btn-sm' role='button' aria-pressed='true'><i class='fas fa-eye' aria-hidden='true'></i></a></td>
                                    <td><a href='../Controladores/change.php?change=' class='btn btn-danger btn-sm' role='button' aria-pressed='true'><i class='fas fa-toggle-off' aria-hidden='true'></i></a></td></tr><tr>
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
                <a href="register.php" id="btnAdd" class="btn btn-primary circular-btn">+</a>
            </div>
        </div>
    </div>
</body>
</html>