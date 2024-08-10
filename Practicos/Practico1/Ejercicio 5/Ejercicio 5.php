<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

    /* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

    // Ejercicio 5

    $valor = 2;
    $i = 1;
    $finTabla = 5;
    echo "<b><u>Empleando for </u></b><br>";
    for ($r = $i; $r <= $finTabla; $r++) {
        $resultadoFor = $valor * $r;
        echo $valor . " x " . $r . " es " . $resultadoFor . "<br>";
    }
    echo "<hr style="."width:70px; align = left".">";


    $checkWhile = true;
    $s = $i;
    echo "<b><u>Empleando while </u></b><br>";
    while ($checkWhile) {
        $resultadoWhile = $valor * $s;
        echo $valor . " x " . $s . " es " . $resultadoWhile . "<br>";
        $s++;
        if ($s > $finTabla) {
            $checkWhile = false;
        }
    }
    echo "<hr style="."width:70px; align = left".">";

    $checkDo = true;
    $t = $i;
    echo "<b><u>Empleando do-while </u></b><br>";
    do {
        $resultadoDo = $valor * $t;
        echo $valor . " x " . $t . " es " . $resultadoDo . "<br>";
        $t++;
        if ($t > $finTabla) {
            $checkDo = false;
        }
    } while ($checkDo);

    ?>
</body>

</html>