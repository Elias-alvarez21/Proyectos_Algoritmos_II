<?php 
require_once '../Clases/propiedades.php';
require '../Clases/ciudades.php';
require_once '../Clases/usuarios.php';
$Ciudades=Ciudades::TraerCiudades();
if(isset($_GET["id"]))
{
    $x=propiedades::obtenerId($_GET['id']);
}

$Y=propiedades::traerTodo();

session_start();
Usuarios::Verificador();
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Cargar/Actualizar datos</title>
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
        .body {
            background-color: #434343;
            color: grey;;
        }
        .container {
            background-color: #343434;
            color: grey; /* Opcional: para asegurar que el texto sea legible */
        }
        </style>
    </head>
 
    <body>
    <div class="container">
            <form action="../Controladores/<?php if(isset($_GET['id'])) echo"actualizarPropiedad.php"; else echo"crearPropiedad.php";?>" method="POST">
                <?php 
                    if(isset($x))echo"<input type='hidden' name='id' value='".$_GET['id']."'>";
                ?>
                <div class="mb-3">
                <input type="hidden" name="">
                <label for="input1" class="form-label">Titulo</label>
                <input type="text" name="titulo" class="form-control" value="<?php if(isset($x))echo $x->titulo;else echo" ";?>">
                </div>
                <div class="mb-3">
                <label for="input2" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="<?php if(isset($x))echo $x->descripcion;else echo"";?>">
                </div>
                <label for="input3" class="form-label">Tipo de operacion</label>
                <select class="form-select" name="operacion" type="text" value="<?php if(isset($x))echo $x->operacion;else echo"";?>">
                    <option selected></option>
                    <option value="<?php echo isset($Y) ? 'Alquiler' : ''; ?>">Alquiler</option>
                    <option value="<?php echo isset($Y) ? 'Venta' : ''; ?>">Venta</option>
                </select>
                <div class="mb-3">
                <label for="input3" class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control" value="<?php if(isset($x))echo $x->precio;else echo"";?>">
                </div>
                <label for="input3" class="form-label">Divisa</label>
                <select class="form-select"  name="divisa" type="text" value="<?php if(isset($x))echo $x->divisa;else echo"";?>">
                    <option selected value="<?php echo $x->divisa ?>"><?php echo $x->divisa ?></option>
                    <option value="USD">USD</option>
                    <option value="ARS">ARS</option>
                    <option value="PATACONES">PATACONES</option>
                    <option value="BOLIVARES">BOLIVARES</option>
                </select>
                <div class="mb-3">
                <label for="input4" class="form-label">Habitaciones</label>
                <input type="number" name="habitaciones" class="form-control" value="<?php if(isset($x))echo $x->habitaciones;else echo"";?>">
                </div>
                <div class="mb-3">
                <label for="input5" class="form-label">Metros cuadrados</label>
                <input type="number" name="metros" class="form-control" value="<?php if(isset($x))echo $x->metros_cuadrados;else echo"";?>">
                </div>
                <div class="mb-3">
                <label for="input6" class="form-label">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="<?php if(isset($x))echo $x->direccion;else echo"";?>">
                </div>
                <label for="input">Ciudades</label>
                <select class="form-select"  name="ciudades" type="number" >
                    
                    <?php 
                    foreach($Ciudades as $ciudad) {
                        $selected = ($ciudad->id == $x->id_ciudad) ? 'selected' : '';// FUNCIONA COMO UN IF-ELSE
                        echo "<option value='{$ciudad->id}' {$selected}>{$ciudad->nombre}</option>";
                    }
                    ?>
                </select>

                <button type="submit" class="btn btn-primary">ACEPTAR</button>
            </form>
        </div>
    </body>
</html>
