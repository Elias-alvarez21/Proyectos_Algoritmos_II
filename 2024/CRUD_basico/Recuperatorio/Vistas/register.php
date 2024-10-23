<?php 
require_once "../Clases/Auth.php";
require_once "../Clases/Movies.php";
session_start();
Logueo::verif();

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FINAL - Algoritmos y Estructuras de Datos II</title>
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
        <?php 
       
        
        if(isset($_GET["id"]))
        {
            $var=$_GET["id"];
            $_SESSION["user_id"];
            $x= new Movies("1","2",3,"4","5","6",7,1,$var);
            $todo=$x->getById();
            //var_dump($_SESSION);
        }
        ?>
        <div class="container" style="width: 80%; margin-top: 50px;">
            <form id="movieForm" action="../Controladores/<?php if(isset($_GET["id"]))echo"actualizar.php"; else echo"crear.php" ?>" method="POST"> 
                <input type="hidden" name="id" value="<?php  if(isset($_GET["id"])) echo"{$_GET["id"]}"; else echo ""?>">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="titulo" class="form-label"><i class="fas fa-film"></i> Título</label>
                            <input type="text" class="form-control" name="titulo" required value="<?php if(isset($todo[0]->title)) echo $todo[0]->title ;else echo "";?>">
                        </div>
                        <div class="mb-3">
                            <label for="director" class="form-label"><i class="fas fa-user"></i> Director</label>
                            <input type="text" class="form-control" name="director" value="<?php if(isset($todo[0]->director)) echo $todo[0]->director ;else echo "";?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="anio_estreno" class="form-label"><i class="fas fa-calendar-alt"></i> Año de Estreno</label>
                            <input type="number" class="form-control" name="anio_estreno" value="<?php if(isset($todo[0]->release_year)) echo $todo[0]->release_year ;else echo "";?>">
                        </div>
                        <div class="mb-3">
                            <label for="genero" class="form-label"><i class="fas fa-film"></i> Género</label>
                            <select class="form-select" name="genero">
                            <option value='<?php if(isset($todo[0]->genre)) echo $todo[0]->genre ;else echo '';?>'></option>";
 
                                <option value="Animacion">Animación</option>
                                <option value="Accion">Acción</option>
                                <option value="Aventura">Aventura</option>
                                <option value="Biografica">Biográfica</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Crimen">Crimen</option>
                                <option value="Drama">Drama</option>
                                <option value="Ciencia Ficcion">Ciencia Ficción</option>
                                <option value="Terror">Terror</option>
                                <option value="Romance">Romance</option>
                                <option value="Documental">Documental</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="sinopsis" class="form-label"><i class="fas fa-align-left"></i> Sinopsis</label>
                    <textarea class="form-control" name="sinopsis" value="<?php if(isset($todo[0]->synopsis)) echo $todo[0]->synopsis ;else echo "";?>"></textarea>
                </div>
                <div class="mb-3">
                    <label for="actores_principales" class="form-label"><i class="fas fa-users"></i> Actores Principales</label>
                    <input type="text" class="form-control" name="actores_principales" value="<?php if(isset($todo[0]->main_actors)) echo $todo[0]->main_actors ;else echo "";?>">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label"><i class="fas fa-star"></i> Rating</label>
                    <input type="number" class="form-control" name="rating" step="0.1" min="0" max="10" value="<?php if(isset($todo[0]->rating)) echo $todo[0]->rating ;else echo "";?>">
                </div>
                <div class="text-center">
                    <?php 
                    if(isset($_GET["id"])){
                    
                    echo "
                    <form action='' method='POST'>
                    <input type='hidden' name='id'value='{$todo[0]->id}'>
                    <button type='submit' class='btn btn-warning mx-1'><i class='fas fa-edit'></i> Actualizar</button>
                    </form>

                    <form action='../Controladores/eliminar.php' method='POST'> 
                    <input type='hidden' name='id'value='{$todo[0]->id}'>
                    <button type='submit' class='btn btn-danger mx-1'><i class='fas fa-trash-alt'></i> Eliminar</button>
                    </form>
                    ";
                    
                    }else{
                        echo"<button type='submit' class='btn btn-primary mx-1'><i class='fas fa-save'></i> Guardar</button>";
                    
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

