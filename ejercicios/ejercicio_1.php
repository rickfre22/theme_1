<?php
/*Ejercicio 1:
Ingresar el tiempo de duración de una llamada telefónica y determinar la cantidad a pagar, de acuerdo con lo siguiente:
a. Toda llamada que dure tres minutos o menos tienen un costo de $300.
b. Cada minuto adicional cuesta $50.*/

$minutos = 6; 
$costo_base = 300;
$costo_total = 0;

if ($minutos <= 3) {
    $costo_total = $costo_base;
} else {
    $minutos_adicionales = $minutos - 3;
    $costo_total = $costo_base + ($minutos_adicionales * 50);
}

echo "El total a pagar por " . $minutos . " minutos es: $" . $costo_total;
?>