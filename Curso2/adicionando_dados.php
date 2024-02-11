<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Lucas',
        'saldo' => 10000
    ],
    12345678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

// Consultado
// echo $contasCorrentes [12345678911] ['titular'];

// Adicionando dados em um caso de array associativo com índices númericos:
$contasCorrentes [] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

// Se o meu array associativo tivesse os índices em formato de string, exemplo: 123.456.789-11, eu precisaria adicionar uma string nos meus colchetes

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta ['titular'] . PHP_EOL;
}