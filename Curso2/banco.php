<?php

// E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
// E_ERROR, PHP dá erro e para a execução do programa

require 'funcoes_banco.php'; // Inclui o arquivo de funções nesse arquivo

// reuire_once 'funcoes_banco.php' garante que o arquivo será incluído apenas uma vez

// include 'funcoes_banco.php'; // Inclui o arquivo de funções nesse arquivo, mas ele foi feito para incluir arquivos que não são essenciais para o funcionamento do programa

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Lucas',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes ['123.456.789-10'] = sacar ($contasCorrentes ['123.456.789-10'], 500);
$contasCorrentes ['123.456.789-11'] = sacar ($contasCorrentes ['123.456.789-11'], 9500);
$contasCorrentes ['123.456.789-12'] = deposito ($contasCorrentes ['123.456.789-12'], 1000);

unset ($contasCorrentes ['123.456.789-10']); // Apaga um item da minha lista

titularComLetrasMaiusculas ($contasCorrentes ['123.456.789-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    list ('titular' => $titular, 'saldo' => $saldo) = $conta;

    // também poderiamos fazer a list da seguinte maneira:

    // ['titular' => $titular, 'saldo' => $saldo] = $conta;

    exibeMensagem ("$cpf $titular $saldo");

    // Também poderia fazer caso não existisse a minha list:

    // exibeMensagem ("$cpf {$conta ['titular']} {$conta ['saldo']}");

    // que também é a mesma coisa de:

    // exibeMensagem ($cpf . " " . $conta ['titular'] . ' ' . $conta ['saldo']);
}

echo "<ul>"; // Cria uma lista em tópicos em HTML
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";

// Encerra meu código em PHP
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LucasBank</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    
    <dl>
        <?php foreach ($contasCorrentes as $cpf =>  $conta){?> 
        <dt>
            <h3><?= $conta ['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta ['saldo']; ?>
        </dd>
        <?php } // Abro e encerro meu PHP e quando preciso exibir algo na tela ao invés de eu fazer <?php echo, posso fazer <?= ?>
    </dl>
</body>
</html>