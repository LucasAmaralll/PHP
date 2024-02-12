<?php

// Desafio 2: Exibir a tabuada de determinado número de 1 a 9, com o resultado da multiplicação desse número

$numero_tabuada = 9;

for ($i = 1; $i <= 9; $i++){
    $resultado = $numero_tabuada * $i;
    echo "$numero_tabuada * $i = $resultado" . PHP_EOL;
};

