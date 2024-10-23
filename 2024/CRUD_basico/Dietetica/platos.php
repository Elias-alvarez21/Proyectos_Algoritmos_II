<?php 
include "Clases/platos.php";
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
        <div class="container">
        <table class="table table-striped-columns">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre del plato</th>
        <th scope="col">Categoria</th>
        <th scope="col">Id receta</th>
        <th>Acciones</th>
        </tr>
            </thead>
        <tbody class="table-group-divider">
            <?php 
                foreach(Platos::mostrarTodo() as $plato){
                echo"<tr>
                <td>{$plato->id_plato}
                <td>{$plato->nombre_plato}
                <td><a href='categorias.php?id_categoria={$plato->id_categoria}'>{$plato->id_categoria}</a></td>
                <td>{$plato->id_reseta}</td>
                <td><button type='submit' class='btn btn-primary'>Editar</button></td>
                </td> </tr>";
                }
            ?>
        </tbody>
        </table>
        </div>
        
        <div class=container>
            <form action="Controladores/crear.php" method="post">
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">nombre</label>
                    <input type="text" class="form-control"name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">id de la categoria</label>
                    <input type="number" class="form-control" name="idCategoria">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">id de la receta</label>
                    <input type="number" class="form-control" name="idReceta">
                </div>
                <button type="submit">Cargar</button>
            </form>
        </div>
    </div>
    </body>
</html>
