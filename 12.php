<?php
$ano_nasc = readline("Digite o ano de nascimento: ");
$ano_atual = date("Y");

$idade = $ano_atual - $ano_nasc;

echo "Idade: $idade anos\n";

if ($idade >= 16) {
    echo "Pode votar.\n";
} else {
    echo "Não pode votar.\n";
}

if ($idade >= 18) {
    echo "Pode tirar CNH.\n";
} else {
    echo "Não pode tirar CNH.\n";
}