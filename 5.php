<?php
$soma = 0;

for ($i = 1; $i <= 10; $i++) {
    $valor = readline("Digite o $i valor: ");
    $soma += $valor;
}

$media = $soma / 10;

echo "Somatória: $soma\n";
echo "Média: $media\n";
