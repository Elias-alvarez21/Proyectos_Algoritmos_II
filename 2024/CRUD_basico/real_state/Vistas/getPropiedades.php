<?php
require_once '../Clases/propiedades.php';
require '../Clases/usuarios.php';
session_start();
Usuarios::Verificador();
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
        <style>
        .body {
            background-color: #434343;
            color: grey;;
        }
        .container {
            background-color: #343434;
            color: grey; /* Opcional: para asegurar que el texto sea legible */
        }
        </style>

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container" >
        <a href="../Controladores/loguout.php" class="btn btn-danger">Cerrar sesion</a>
        <a href="formPropiedad.php" class="btn btn-success">Crear una propiedad nueva</a>

        <table class="table table-dark table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Tipo de operacion</th>
            <th scope="col">Precio</th>
            <th scope="col">Divisa</th>
            <th>Habitacion</th>
            <th>Metros cuadrados</th>
            <th>Direccion</th>
            <th>Id ciudad</th>
            <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        foreach(Propiedades::traerTodo() as $prop){
        
            echo"<tr>
                <th>{$prop->id}</th>
                <td>{$prop->titulo}</td>
                <td>{$prop->descripcion}</td>
                <td>{$prop->tipo_operacion}</td>
                <td>{$prop->precio}</td>
                <td>{$prop->divisa}</td>
                <td>{$prop->habitaciones}</td>
                <td>{$prop->metros_cuadrados}</td>
                <td>{$prop->direccion}</td>
                <td>{$prop->id_ciudad}</td>

                <td><a href='../Controladores/eliminarPropiedad.php?id={$prop->id}' class='btn btn-danger'>ELIMINAR</a><br>
                    <a href='formPropiedad.php?id={$prop->id}' class='btn btn-primary'>Editar</a></td>
                    

            </tr> ";
        }
        ?>
        </tbody>
        </table>
        </div>
    </body>
</html>
