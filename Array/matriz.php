<?php

$alunos2023 = [
    'Ana',
    'Roberto',
    'Maria',
    'Lucas',
    'Vinicius',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2024 = array_merge ($alunos2023, $novosAlunos); // Junta os arrays e não preserva as chaves, a chave 0 da minha segunda matriz vira a próxima da sequência, no caso acima a Patricia vira 5

var_dump ($alunos2024);

// Outra maneira de unir arrrays é utilizando o operador +, mas para isso preciso ter as chames renomeadas, para não sobrescrever quando forem iguais

$alunos2024 = $alunos2023 + $novosAlunos;

/** Desempacotamento de arrays (Array Umpacking) */

// Tira o colchete dos arrays, bom para adicionar informações no meio

$alunoss = [...$alunos2023, 'Lucas Silva', ...$novosAlunos];
array_push ($alunoss, 'Alice', 'Bob', 'Charlie'); // Adiciono elementos ao final da array
$alunoss [] = 'Luiz'; // Adiciono um elemento ao final do array

array_unshift ($alunoss, 'Stephany', 'Rafaela'); // Adiciono no inicio do array

echo array_shift ($alunoss) . PHP_EOL; // Pega o primeiro elemento do array e retorna somente ele

echo array_pop ($alunoss) . PHP_EOL; //Remove o último elemento do array e apresenta ele

var_dump ($alunoss);

/** Spread Operator */

// Realizo a união de diversos argumentos em uma só array

function funcao(int $a, int $b, string $c) 
{
    // Faça algo com os parâmetros $a, $b e $c
    echo "a: $a, b: $b, c: $c";
}

$args = [1, 39, 'Lucas'];

// Usando o operador spread para passar os elementos do array como argumentos
funcao(...$args);

