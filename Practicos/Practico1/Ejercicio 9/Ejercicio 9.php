<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 9</title>
</head>

<body>
    <?php

    /* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

    // Ejercicio 9

    $numeros = [
        [1, 2, 3, 5, 8, 13, 21, 34, 55, 89], [-1, -2, -3, -5, -8, -13, -21, -34, -55, -89], [3, 4, 2, 1, 10, 9, 8, 7, 6, 5], [101, 102, 103, 104, 105, 106, 107, 108, 109, 100], [1111, 121, 3, 323, 3223, 654, 789, 987, 456, 852], [99, 88, 77, 66, 55, 44, 33, 22, 11, 1], [877, 988, 766, 655, 544, 433, 322, 211, 100, 99], [753, 951, 7823, 9821, 208, 802, 3278, 1289, 701, 107], [-9, -8, -7, -6, -5, -4, -3, -2, -1, 1], [1, 1, 1, 1, 1, 1, 1, 1, 1, 2]
    ];

    //buscamos el número con mayor valor del arreglo y lo mostramos en pantalla
    $numeroMaximo = 0;
    echo "Usando la función max, el máximo de cada elemento de números enteros es: ";
    foreach ($numeros as $arrNumeros) {
        //usando la función max
        $numeroMaximo = max($arrNumeros);
        //mostrando el máximo en una lista
        echo "<li>" . $numeroMaximo . "</li>";
    }

    //sin usar la función max
    echo "Sin usar la función max, el máximo de cada elemento de números enteros es: ";
    $arrNumerosMaximos = [];
    foreach ($numeros as $arrNumeros){
        $numeroMaximo  = -999999999999999999999999999999;
        foreach ($arrNumeros as $numero){
            if ($numero > $numeroMaximo){
                $numeroMaximo = $numero;                
            }
        }
        array_push($arrNumerosMaximos,$numeroMaximo);
    }

    foreach ($arrNumerosMaximos as $numerosPantalla){
        echo "<li>" . $numerosPantalla . "</li>";
    }

    ?>
</body>

</html>