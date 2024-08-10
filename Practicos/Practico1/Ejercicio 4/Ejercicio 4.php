<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 4</title>
</head>

<body>
    <?php

    /* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

    // Ejercicio 4

    $a = 15;
    $b = 94;
    $c = 73;

    $mayor = max($a, $b, $c);
    $menor = min($a, $b, $c);
    
    echo "El mayor valor de ". $a. ", ".$b." y ". $c . " es " . $mayor. "<br>";
    echo "El menor valor de ". $a. ", ".$b." y ". $c . " es " . $menor. "<br>";

    ?>
</body>

</html>