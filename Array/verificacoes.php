<?php

$notas2 = [
    'Ana' => 10,
    'Roberto' => 8,
    'Maria' => 9,
    'Lucas' => 7,
    'Vinicius' => null,
];

$encontrado = false;

foreach ($notas2 as $aluno => $nota) {
    if ($aluno === 'Vinicius') {
        $encontrado = true;
    }
}

// É a mesma coisa que:

var_dump (array_key_exists ('Vinicius', $notas2)); // Verifica se a chave está presente no array, recebe dois parâmetros, a chave que quero localizar e onde quero localizar

echo 'Vinicius fez a prova: '. PHP_EOL;
var_dump (isset($notas2['Vinicius'])); // Verifica se tem a chave e o valor dela é diferente de nulo

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump (in_array (10, $notas2, $stric = true)); // Dentro desse array, existe o valor 10, passando por parâmetro o valor e o array. O strict confirma se o meu valor é do mesmo tipo do que estou buscando, nesse caso um int

echo 'Quem tirou 10?' . PHP_EOL;
var_dump (array_search (10, $notas2, $stric = true)); // Retorna quem tirou o 10


// array_key_exists = Verifica se a chave existe
// in_array = Verifica se o valor existe
// Isset = Verifica se a chave existe e não é nula
// array_search = Verifica qual a chave do valor que estou inserindo 