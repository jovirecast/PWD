<?php

/* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

// Ejercicio 8

$nombres = array('roberto', 'juan', 'marta', 'moria', 'martin', 'jorge', 'miriam', 'nahuel', 'mirta');

//buscamos los nombres que comiencen con m y los agregamos a un nuevo arreglo
$letraComienzo = 'm';
$arregloNombresM = [];
foreach ($nombres as $nombre) {
    $posicionLetra = str_starts_with($nombre, $letraComienzo);
    if ($posicionLetra) {
        array_push($arregloNombresM, $nombre);
    }
}

//mostramos el arreglo en una página
echo "Los nombres del arreglo que comienzan con la letra M son los siguientes:<br>";
foreach ($arregloNombresM as $nombresNuevos) {
    echo "<li>" . $nombresNuevos . "</li>";
}
