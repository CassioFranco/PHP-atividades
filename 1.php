<?php
$dividendo = readline("Digite o dividendo: ");
$divisor = readline("Digite o divisor: ");

$quociente = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;

echo "Quociente: $quociente\n";
echo "Resto: $resto\n";

