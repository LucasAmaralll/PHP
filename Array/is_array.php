<?php

$notas2 = [
    'Ana' => 10,
    'Roberto' => 8,
    'Maria' => 9,
    'Lucas' => 7,
];

if (gettype($notas2) === 'Array'){
    echo 'Sim, é um array';
}

// É a mesma coisa que:

if (is_array ($notas2)){
    echo 'Sim, é um array' . PHP_EOL;
}

// is_array é igual o gettype para os arrays

var_dump(array_is_list ($notas2)); // Recebe um array por parâmetro, retorna se as chaves desse array é númerico, crescente e maior que zero;

