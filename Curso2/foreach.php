<?php

// $conta1 = [
//     'titular' => 'Vinicius',
//     'saldo' => 1000
// ];

// $conta2 = [
//     'titular' => 'Lucas',
//     'saldo' => 10000
// ];

// $conta3 = [
//     'titular' => 'Alberto',
//     'saldo' => 300
// ];

// Também poderia simplificar assim, já que as váriaveis não estão sendo usadas fora da lista

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

// Para cada uma das contas correntes, chamando elas de conta, exiba o seu titular

foreach ($contasCorrentes as $conta) {
    echo $conta ['titular'] . PHP_EOL;
}

//É bom por conta que posso nomear meus indices da maneira que eu quero

// Para cada uma das contas correntes, chamando o índice delas de cpf e os valores de conta, exiba seus índices

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}

// $indice = [$valores, $valores, $valores];
