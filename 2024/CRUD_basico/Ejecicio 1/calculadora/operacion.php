<!doctype html>
<html lang="en">
    <head>
        <title>Resultado</title>
        <!-- Required meta tags -->
        <style>
            body{
                background-color: #918e8e;
            }
        </style>
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
$primernum=$_GET["primervalor"];
$segundonum=$_GET["segundovalor"];
$ope=$_GET["operacion"];
//var_dump($primernum,$ope,$segundonum);
switch($ope)
{
    case "Suma":
        $color="success";
        $resul=$primernum+$segundonum;
        //echo"El resultado de la operacion es: ",$resultado;
        break;
    case "Resta":
        $color="danger";
        $resul=$primernum-$segundonum;
        //echo"El resultado de la operacion es: ",$resultador;
        break;
    case "Multiplicacion":
        $color="primary";
        $resultado=$primernum*$segundonum;
        //echo"El resultado de la operacion es: ",$resultado;
        break;
    case "Division":
        $color="warning";
        $resul=$primernum/$segundonum;
        //echo"El resultado de la operacion es: ",$resultado;
        break;
}?>
    <div class="card text-bg-<?php echo $color?> mb-3" style="max-width: 18rem;">
    <div class="card-header">RESULTADO</div>
    <div class="card-body">
    <h5 class="card-title">Operación: <?php echo $ope ?></h5>
        <p class="card-text">Resultado: <?php echo $resul ?></p>
  </div>
    </body>
</html>
