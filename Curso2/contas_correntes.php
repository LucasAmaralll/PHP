<?php

// Array associtativo = Defino o nome dos índices e adiciono valores de outros tipos

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];


//echo $conta1['titular']; // Acessando o indice do meu array, no qual eu defini um nome para ele

$conta2 = [
    'titular' => 'Lucas',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
} // Acessa os titulares das minhas listas