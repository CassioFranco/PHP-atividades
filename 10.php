<?php
$quantidade = readline("Digite a quantidade de maçãs compradas: ");

if ($quantidade >= 12) {
    $preco = 1.00;
} else {
    $preco = 1.30;
}

$total = $quantidade * $preco;

echo "Custo total da compra: R$" . number_format($total, 2, ',', '.') . "\n";
