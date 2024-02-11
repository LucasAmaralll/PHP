<?php

// O php só consegue trabalhar com chaves em arrays associativos do tipo númerico inteiro e strings
$array = [
    1 => 'a',
    '1' => 'b', // php vai tentar converter para inteiro
    1.5 => 'c', // php vai tentar converter para inteiro
    true => 'd' // valor booleano é convertido para 1 quando é true e 0 quando é false
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}