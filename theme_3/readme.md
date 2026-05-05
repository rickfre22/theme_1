Funciones en PHP: Definición y Estructura Técnica
Las funciones en PHP son bloques de código encapsulados que ejecutan tareas específicas, permitiendo la modularidad, reutilización de código y la reducción de la redundancia mediante el principio DRY (Don't Repeat Yourself).

1. Declaración y Firma de la Función
Una función estándar se define mediante la palabra reservada function. En versiones modernas (PHP 7.0+ y 8.0+), se recomienda encarecidamente el uso de Type Hinting (tipado) para mejorar la robustez del código.

PHP
function calcularTotal(float $precio, int $cantidad): float {
    return $precio * $cantidad;
}
Componentes técnicos:
Identificador: Nombre de la función (sigue las reglas de etiquetas en PHP, no empieza por números).

Parámetros: Variables de entrada que actúan como placeholders locales.

Type Hinting: Restricción de tipos para los parámetros de entrada.

Return Type Declaration: Especifica el tipo de dato que la función devolverá obligatoriamente.

2. Paso de Parámetros: Valor vs. Referencia
Por defecto, los argumentos se pasan por valor (se crea una copia local). Para modificar la variable original fuera del scope de la función, se utiliza el paso por referencia mediante el símbolo &.

PHP
// Paso por referencia
function aplicarDescuento(float &$precio, float $porcentaje): void {
    $precio -= ($precio * $porcentaje);
}
3. Funciones Anónimas y Closures
Las funciones anónimas (o closures) no poseen un nombre identificado y suelen utilizarse como callbacks. En PHP, pueden heredar variables del ámbito padre mediante la palabra clave use.

PHP
$factor = 1.2;
$iva = function (float $monto) use ($factor): float {
    return $monto * $factor;
};
4. Funciones de Flecha (Arrow Functions)
Introducidas en PHP 7.4, son una sintaxis abreviada para closures de una sola línea. Capturan automáticamente las variables del scope externo por valor.

PHP
$multiplicador = 10;
$fn = fn($n) => $n * $multiplicador;
5. Parámetros Nombrados (PHP 8.0+)
Permiten pasar argumentos a una función basándose en el nombre del parámetro en lugar de su posición, lo que mejora la legibilidad en funciones con múltiples argumentos opcionales.

PHP
// Definición
function configurar(string $host, int $puerto = 80, bool $debug = false) { ... }

// Invocación técnica
configurar(host: "localhost", debug: true);
6. Scope y Visibilidad
Local Scope: Las variables definidas dentro de una función no son accesibles fuera.

Global Scope: Para acceder a una variable externa, se debe usar la palabra clave global o el array superglobal $GLOBALS[] (aunque se considera una mala práctica en favor de la inyección de dependencias).

Static Variables: Variables que mantienen su valor entre múltiples llamadas a la misma función pero solo existen en el scope local.

PHP
function contador(): int {
    static $a = 0;
    return ++$a;
}
Resumen de Mejores Prácticas
Tipado estricto: Utilizar declare(strict_types=1); al inicio del archivo para forzar la validación de tipos.

Pureza: En la medida de lo posible, diseñar funciones puras (que el resultado dependa solo de sus argumentos de entrada sin efectos secundarios).

Documentación: Utilizar bloques PHPDoc para describir parámetros y excepciones.

PHP
/**
 * Procesa el pago de una orden.
 *
 * @param float $monto Cantidad total a cobrar.
 * @throws Exception Si el monto es negativo.
 * @return bool Estado de la transacción.
 */
function procesarPago(float $monto): bool { ... }