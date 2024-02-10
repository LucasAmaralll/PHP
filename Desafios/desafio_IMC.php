<?php

// A partir de altura e peso que você definir, quero que calcule o IMC (Pesquisar a formula na internet) e exibir ao usuário se o IMC está abaixo, dentro ou acima do ideal.

$altura = 1.73;
$peso = 65.5;
$IMC = $peso / ($altura * $altura);

if ($IMC <18.5){
    echo "Seu IMC é de $IMC, está abaixo do ideal";
} elseif ($IMC >18.4 and $IMC <25){
    echo "Seu IMC é de $IMC e está dentro do ideal";
} else {
    echo "Seu IMC é de $IMC e está acima do ideal";
};