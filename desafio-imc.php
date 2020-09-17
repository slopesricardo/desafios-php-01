<?php
/*
A partir de uma altura e peso definidas, calcularmos o IMC.
A partir dessa fórmula e da tabela de IMCs, o código deverá exibir se o usuário está abaixo, 
dentro ou acima do nível recomendado.
*/

$peso = 100;
$altura = 1.68;

$imc = $peso / ($altura * $altura);

echo "Seu IMC = $imc." . PHP_EOL;

if ($imc < 18.5)
    echo "Abaixo do peso";
elseif ($imc >= 18.5 && $imc < 25)
    echo "Peso normal";
elseif ($imc >= 25 && $imc < 30)	
    echo "Sobrepeso";
elseif ($imc >= 30 && $imc < 35)	
    echo "Obesidade grau 1";
elseif ($imc >= 35 && imc >= 40)
    echo "Obesidade grau 2";
else
    echo "Obesidade grau 3";

echo PHP_EOL;