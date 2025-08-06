<?php
$valor1 = readline("Digite o primeiro valor: ");
$valor2 = readline("Digite o segundo valor (diferente do primeiro): ");

if ($valor1 == $valor2) {
    echo "Os valores devem ser diferentes.\n";
} else {
    $maior = ($valor1 > $valor2) ? $valor1 : $valor2;
    echo "Maior valor: $maior\n";
}
