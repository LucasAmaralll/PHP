<?php

$array = [
    0 => 'zero',
    1 => 'um',
    2 => 'dois'
];

var_dump ($array); // Dar informações detalhadas sobre o array

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em portugês é: $nomeNumero" . PHP_EOL;
};

echo "Total: " . count($array).PHP_EOL; // Pega o tamanho do array