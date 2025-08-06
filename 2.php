<?php
$valor = readline("Digite o valor do produto: ");
$reajuste = $valor * 0.01;
$novo_valor = $valor + $reajuste;

echo "Valor com 1% de aumento: R$" . number_format($novo_valor, 2, ',', '.') . "\n";
