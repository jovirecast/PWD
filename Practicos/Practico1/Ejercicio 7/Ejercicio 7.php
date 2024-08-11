<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

    /* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

    // Ejercicio 7

    $arregloNumeros = [
        1, 2.5, 5, 6.25, 8, 9.7, 10, 12.4, 13.2, 14,
        16, 18, 18.1, 20.75, -2, -5.5, -7, -8.9, -11, -20.5
    ];

    //$cantidadNumeros = count($arregloNumeros);

    //$sumaNumeros = array_sum($arregloNumeros);

    //$promedioNumeros = $sumaNumeros / $cantidadNumeros;

    $sumaNumeros = 0;
    $cantidadNumeros = 0;
    foreach ($arregloNumeros as $numero){
        $sumaNumeros+= $numero;
        $cantidadNumeros++;
        $promedioNumeros = $sumaNumeros / $cantidadNumeros;
    }

    echo "La suma de los números del arreglo es ". $sumaNumeros." y está compuesto por ". $cantidadNumeros. " números <br>";
    echo "El promedio es de: ". $promedioNumeros;
    ?>
</body>

</html>