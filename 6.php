<?php
$soma = 0;
$quantidade = 0;

while (true) {
    $valor = readline("Digite um valor (0 para sair): ");
    if ($valor == 0) break;
    $soma += $valor;
    $quantidade++;
}

if ($quantidade > 0) {
    $media = $soma / $quantidade;
    echo "Somatória: $soma\n";
    echo "Média: $media\n";
    echo "Quantidade: $quantidade\n";
} else {
    echo "Nenhum valor foi informado.\n";
}
