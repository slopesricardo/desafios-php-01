<?php

#Exiba, na tela do usuário, todos os números ímpares de 0 à 100
#Não exibir numeros entre 40 e 60

for ($numero = 0; $numero <= 100; $numero++) {
    if ($numero > 40 && $numero < 60)
        continue;
        
    if ($numero % 2 != 0) {
        echo $numero . PHP_EOL;
    }
}