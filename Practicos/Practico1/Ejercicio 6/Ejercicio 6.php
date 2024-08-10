<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

    /* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

    // Ejercicio 6

    $horarios = array(
        array("Lunes" => "Arquitectura y Seguridad de Computadoras <br><br>
        16:00 a 20:00"),
        array("Martes" => "Diseño Gráfico <br><br>
        16:00 a 20:00"),
        array("Miércoles" => "Arquitectura y Seguridad de Computadoras <br><br>
        16:00 a 20:00"),
        array("Jueves" => "Programación Web Dinámica <br><br>
        15:30 a 18:30"),
        array("Viernes" => "Programación Web Dinámica <br><br>
        15:30 a 20:00"),
    );

    echo "<p><u> Primer diseño </u></p>";
    echo "<table rules = " . "all" . " style=" . '"border: 1px solid; text-align:center; table-layout:fixed; width: max-content; height: 200px;"' . ">";

    foreach ($horarios as $fila) {
        echo "<tr>";
        foreach ($fila as $clave => $valor) {
            echo "<th>" . $clave . "</th>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($fila as $clave => $valor) {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<p><u> Segundo diseño </u></p>";
    echo "<table rules = " . "all" . " style=" . '"border: 1px solid; text-align:center; table-layout:fixed; width: 80%; height: 200px;"' . ">";

    echo "<tr>";
    foreach ($horarios as $fila) {
        foreach ($fila as $clave => $valor) {
            echo "<th>" . $clave . "</th>";
        }
    }
    echo "</tr>";

    echo "<tr>";
    foreach ($horarios as $fila) {
        foreach ($fila as $clave => $valor) {
            echo "<td>" . $valor . "</td>";
        }
    }
    echo "</tr>";
    echo "</table>";

    ?>
</body>

</html>