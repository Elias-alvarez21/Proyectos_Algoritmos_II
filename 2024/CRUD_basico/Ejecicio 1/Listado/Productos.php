<?php 
for ($i = 1; $i <= 20; $i++ ) {
$detalle = "Producto #" . $i;
$precio = rand(10, 100);
$stock = rand(0, 100);

$productList[] = array(
'id' => $i,
'detalle' => $detalle,
'precio' => $precio,
'stock' => $stock
);


//var_dump($productList);
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Productos</title>
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
          body{
            background-color: #918e8e;
          }
        </style>
    </head>
    <div class="container" style="width: 80%">
    <body>
    <a href="../Index.html" class="btn btn-primary">←</a>
      <?php
        echo "<table class='table table-primary table-striped-columns'><thead><tr><th>ID</th><th>Detalle</th><th>Precio</th><th>Stock</th></tr></thead><tbody>";
        foreach ($productList as $productos) {
            echo "<tr>";
            echo "<td>" . $productos["id"] . "</td>";
            echo "<td>" . $productos["detalle"] . "</td>";
            echo "<td>" . $productos["precio"] . "</td>";
            echo "<td>" . $productos["stock"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
        ?>
    </tr>
  </tbody>
        </table>
    </body>
    </div>
</html>
