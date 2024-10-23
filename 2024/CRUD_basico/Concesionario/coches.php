<?php
require_once 'Clases/coches.php';
require_once 'Clases/login.php';
session_start();
Login::chequeo();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Tabla de coches</title>
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
        <style>
            .box.body{
                background-color: #FF5733 ;
                }
            .box1 {
                width: 50%;
                float: left;
                background-color: #212529 ;
            }
            .box2 {
                width: 50%;
                float: right;
                /*background-color: #212529 ;*/
            }
    </style>
    </head>
    <body>
    <div class="box">
       <div class="box">
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Matricula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Precio</th>
                <th>-------Acciones-------</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
            <?php
                foreach(Coches::getCoches() as $fila){
                    //var_dump($fila);

                    //LLAMAR A LAS VARIABLES COMO ESTAN EN LA BASE DE DATOS, SINO NO IMPRIME
                    echo "<tr>
                    <td>{$fila->idcoche}</td>
                    <td>{$fila->matricula}</td>
                    <td>{$fila->marca}</td>
                    <td>{$fila->modelo}</td>
                    <td>{$fila->color}</td>
                    <td>{$fila->precio}</td>
                    <td><a href='formUpdate.php?idcoche={$fila->idcoche}'class='btn btn-warning' type='POST'>Editar</a>
                        <a href='Controlador/delete.php?id={$fila->idcoche}'class='btn btn-danger' type='POST'>Eliminar</a>
                    </td>
                    </tr>";
                }
            ?>
            </tr>
        </tbody>
        </table>
        </div>
        <div class="box2">
            <form action="Controlador/insert.php" method="POST">

            <div class="mb-3">
                <label for="matricula" class="form-label">Matricula</label>
                <input type="text" class="form-control" name="matricula">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca">
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" name="color">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio">
            </div>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
    </body>
</html>
