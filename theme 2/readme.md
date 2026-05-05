# Estructura de control

## condicionales

Las estructuras condicionales son las que permiten que tu código tome decisiones. Básicamente, le dicen al programa: "Si ocurre esto, haz aquello; si no, haz esto otro".

1. La estructura
if, else y else if Es la más utilizada. Evalúa una expresión booleana y ejecuta el bloque de código correspondiente.PHP

php
$hora = 14;
if ($hora < 12) {
    echo "¡Buenos días!";
} elseif ($hora < 20) {
    echo "¡Buenas tardes!";
} else {
    echo "¡Buenas noches!";
}
php

2. Operador Ternario
Es una forma compacta de escribir un if simple en una sola línea. Es ideal para asignar valores rápidos


php
.Sintaxis: (condición) ? valor_si_cierto : valor_si_falso;PHP$edad = 20;
$resultado = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $resultado;
php


3. Estructura switchCuando tienes una sola variable que quieres comparar con muchos valores distintos, el switch es más limpio y legible que usar mil elseif.PHP


php
$colorFavorito = "rojo";
switch ($colorFavorito) {
    case "rojo":
        echo "El color es rojo.";
        break;
    case "azul":
        echo "El color es azul.";
        break;
    default:
        echo "No reconozco ese color.";
}
php


php
$mensaje = match ($estatus) {
    200, 300 => "Éxito",
    400, 404 => "Error del cliente",
    500 => "Error del servidor",
    default => "Estado desconocido",
};
php


