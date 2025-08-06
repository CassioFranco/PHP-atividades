<?php
$nota1 = readline("Digite a 1ª nota: ");
$nota2 = readline("Digite a 2ª nota: ");

$media = ($nota1 + $nota2) / 2;

echo "Média: $media\n";

if ($media >= 6) {
    echo "Aluno aprovado!\n";
} else {
    echo "Aluno reprovado.\n";
}
