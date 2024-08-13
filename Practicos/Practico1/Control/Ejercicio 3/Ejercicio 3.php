<?php

/* 
    Trabajo práctico 1 - Repaso
    Programación Web Dinámica - año 2024 
    */

// Ejercicio 3

$arreglo = [
    "Nombre" => "Homero",
    "Apellido" => "Simpson",
    "Edad" => "Treinta y seis",
    "Direccion" => "Springfield"
];

foreach ($arreglo as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
