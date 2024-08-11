<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 11</title>
</head>

<body>
    <?php

    /* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

    // Ejercicio 11

    //Incluir aquí la definición de la function 
    function divisores($numero)
    {
        //arreglo con los divisores, se agrega el 1 considerando que el número a dividir es un entero positivo
        $coleccionDivisores = [1];

        //iterativa donde se busca el divisor, inicia en 1 hasta el número porque el mismo es un entero positivo (20)
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                //agrega todos los divisores
                array_push($coleccionDivisores, $i);
            }
        }
        
        //en caso de que el número no posea divisor alguno, no aplica en el número usado (20)
        if (count($coleccionDivisores) == 0) {
            $coleccionDivisores = ["No tiene ningún divisor."];
        }

        return $coleccionDivisores;
    }

    // divisores($parametro);
    $num = 20;
    echo "Los divisores de $num son: ";
    foreach (divisores($num) as $divisor)
        echo "$divisor <br />";

    ?>
    <?php
    //Completar aquí con la definición de la function saludo()
    function saludo()
    {
        //obtengo la hora actual
        $fecha = date("H");
        //le resto 5 horas porque, por algún motivo, me toma la zona horaria por defecto como GMT -7 (aunque está establecida en -3), se debería solucionar usando date_default_timezone_set('America/Argentina/Buenos_Aires'); antes de obtener la hora actual

        $hora = $fecha - 5;
        $mensaje = "";
        // horario de 5:00 a 12:59
        if ($hora >= 5 && $hora <= 12) {
            $mensaje = "Buenos días";
        }
        //horario de 13:00 a 19:59
        else if ($hora >= 13 && $hora <= 19) {
            $mensaje = "Buenas tardes";
        }
        // horario de 20:00 a 23:59, y de 00:00 a 4:59
        else if ($hora >= 20 || $hora <= 4) {
            $mensaje = "Buenas noches";
        }
        return $mensaje;
    }

    $nombre = "SuNombre";
    echo "¡" . saludo() . " , $nombre!";
    ?>

</body>

</html>