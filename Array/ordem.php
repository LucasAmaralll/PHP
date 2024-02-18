<?php

// Array multidimencional (Um array dentro de outro array)
// Dentro dele contém arrays associativos
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Lucas',
        'nota' => 7,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

$array = [10, 9, 8, 7];

function ordenaNotas (array $nota1, array $nota2): int {
    return $nota1 ['nota'] <=> $nota2 = ['nota']; // Ordena pela maneira crescente, descrescente era somente inverter a nota 1 e a nota 2

    // É a mesma coisa de:

    // if ($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }

    // if ($nota2['nota'] > $nota1['nota']) {
    //     return 1;
    // }
    // return 0;
}

usort ($notas, 'ordenaNotas'); // A função usort espera dois parâmetros, o primeiro é quem ela vai ordenar e o segundo é como ela vai ordenar, essa função tem que retornar um inteiro, ela retorna <0 se o primeiro parametro for maior, ela retorna >0 se o segundo parametro for maior e ela retorna 0 se forem iguais

var_dump ($notas);

sort ($array); // sort realiza a ordenação simples da lista
var_dump ($array);