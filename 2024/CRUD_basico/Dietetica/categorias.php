<?php

include "Clases/categorias.php";
require_once "Clases/logueo.php";
session_start();
Logueo::verf();

?>
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

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <div class="container">
        <table class="table table-striped-columns">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        </tr>
            </thead>
        <tbody class="table-group-divider">
            <?php 
                foreach(Categoria::mostrarTodo() as $categ){
                echo"<tr>
                <td>{$categ->id_categoria}
                <td>{$categ->nombre_cat}
                </td> </tr>";
                }
            ?>
        </tbody>
        </table>
    </div>
    </body>
</html>
