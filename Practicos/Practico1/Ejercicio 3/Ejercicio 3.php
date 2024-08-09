<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

    /* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

    // Ejercicio 3

    $arreglo = ["Nombre" => "Homero",
    "Apellido" => "Simpson",
    "Edad" => "Treinta y cuatro",
    "Direccion" => "Springfield"];

    foreach ($arreglo as $clave => $valor){
        echo $clave . ": " . $valor . "<br>";
    }

    ?>
</body>

</html>