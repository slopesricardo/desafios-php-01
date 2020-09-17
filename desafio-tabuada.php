<?php
#Com um número armazenado em uma variável qualquer queremos exibir o resultado da sua 
#multiplicação de 1 até 9 

$numero = 3;

for ($i = 1; $i <= 9; $i++) {
    $resultado = $numero * $i;
    echo "$i x $numero = $resultado " . PHP_EOL;
}