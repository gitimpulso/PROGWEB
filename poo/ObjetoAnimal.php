<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objeto</title>
</head>
<body>
    <?php
        include("Animal.php");
        $perro = new Animal("Palito", "Cruza");
        $nom = $perro->getNombre();
        $raz = $perro->getRaza();
        echo "Nombre: " . $nom . " Raza: " . $raz . "<br>";
        $perro->setNombre("Charly Palito");
        echo "Nuevo nombre: " . $perro->getNombre();
    ?>
</body>
</html>