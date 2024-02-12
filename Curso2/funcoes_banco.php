<?php 

// Function nomedaFunction ($parametro) {o que vai acontecer quando chamar a function}

// Lembrando a function não precisa de passagem de parametro

// Function: Retorna valor

// Minha conta vai receber um valor do tipo array, meu valorASacar vai receber um valor do tipo float e minha function vai devolver um array
function sacar (array $conta, float $valorASacar) : array{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem ($conta ['titular'] . ' ' . "você não pode sacar esse valor");

    }else {
        $conta ['saldo'] -= $valorASacar;
    }

    return $conta;
}

function deposito (array $conta, float $valorADepositar): array {
    if ($valorADepositar > 0){
        $conta ['saldo'] += $valorADepositar;
    } else {
        exibeMensagem ($conta ['titular'] . ' ' . "você não pode depositar esse valor");
    }

    return $conta;
}

// Subrotina: Executa e não devolve nenhum valor
function exibeMensagem (string $mensagem) {
    echo $mensagem . '<br>'; // <br> quebra de linha do html
}

// Passagem de parametro por referência, quando eu uso o & eu passo o valor original do meu parametro informado e não a cópia dele
function titularComLetrasMaiusculas (array &$conta){
    $conta ['titular'] = mb_strtoupper ($conta ['titular']);
} 

// mb_strtoupper transforma toda minha string em letras maiusculas, ela é uma biblioteca

// caso não queira usar uma biblioteca também pode usar a strtoupper, a função strtoupper não colocaria letras com acento em maiúsculo, enquanto a mb_strtoupper consegue fazer isso sem problemas.

function exibeConta (array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "<li>Titular: $titular . Saldo: $saldo </li>"; // <li> cria uma lista em HTML
}