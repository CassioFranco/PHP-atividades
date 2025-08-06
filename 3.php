<?php
$base = readline("Digite a base do retângulo: ");
$altura = readline("Digite a altura do retângulo: ");

$perimetro = 2 * ($base + $altura);
$area = $base * $altura;
$diagonal = sqrt(pow($base, 2) + pow($altura, 2));

echo "Perímetro: $perimetro\n";
echo "Área: $area\n";
echo "Diagonal: " . round($diagonal, 2) . "\n";

