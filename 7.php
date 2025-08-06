<?php
$maior = null;
$menor = null;

while (true) {
    $valor = readline("Digite um valor (0 para sair): ");
    if ($valor == 0) break;

    if ($maior === null || $valor > $maior) {
        $maior = $valor;
    }

    if ($menor === null || $valor < $menor) {
        $menor = $valor;
    }
}

if ($maior !== null) {
    echo "Maior valor: $maior\n";
    echo "Menor valor: $menor\n";
} else {
    echo "Nenhum valor foi informado.\n";
}
