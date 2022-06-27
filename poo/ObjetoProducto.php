<?php
    include("Producto.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objeto de Producto</title>
</head>
<body>
    <?php
        $zapato = new Producto("Bota marron", 1500);
        echo "<h1>".$zapato->getNombre()."</h1>";
        echo "<h3>$ ".$zapato->getPrecio()."</h3>";
        $zapato->setPrecio(1850);
        echo "<h3>Nuevo precio: $ ".$zapato->getPrecio()."</h3>";
    ?>
</body>
</html>