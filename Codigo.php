<?php

// Coordenadas de los vértices del triángulo
$x1 = 1;
$y1 = 2;

$x2 = 4;
$y2 = 6;

$x3 = 7;
$y3 = 3;

// Calcular las longitudes de los lados del triángulo
$lado1 = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
$lado2 = sqrt(pow($x3 - $x2, 2) + pow($y3 - $y2, 2));
$lado3 = sqrt(pow($x1 - $x3, 2) + pow($y1 - $y3, 2));

// Mostrar los resultados
echo "Los lados del triángulo son: <br>";
echo "Lado 1: " . $lado1 . "<br>";
echo "Lado 2: " . $lado2 . "<br>";
echo "Lado 3: " . $lado3 . "<br>";

?>
