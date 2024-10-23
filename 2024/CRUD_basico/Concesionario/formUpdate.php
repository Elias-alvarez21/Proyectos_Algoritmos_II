<?php 
include 'Clases/coches.php';
require_once 'Clases/login.php';
session_start();
Login::chequeo();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Carga de datos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <?php 
        if(isset($_GET['idcoche'])){
            $Find=Coches::FindId($_GET['idcoche']);
        }
        //var_dump($Find);
        ?>
    <div class="container" style="width: 80% ;background-color: #34495E">
            <form action="Controlador/edit.php" method="POST">

            <div class="mb-3">
                <label for="matricula" class="form-label">Matricula</label>
                <input type="text" class="form-control" name="matricula" value="<?php if(isset($Find->matricula)) echo $Find->matricula; ?>">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control"  value="<?php if(isset($Find->marca)) echo $Find->marca; ?>" name="marca">
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control"  value="<?php if(isset($Find->modelo)) echo $Find->modelo; ?>" name="modelo">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control"  value="<?php if(isset($Find->color)) echo $Find->color; ?>" name="color">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control"  value="<?php if(isset($Find->precio)) echo $Find->precio; ?>" name="precio">
            </div>
            <input type="hidden" name="id" value="<?php echo $_GET['idcoche']?>">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>
        </div>
    </body>
</html>
