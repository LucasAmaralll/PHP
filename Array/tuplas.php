<?php 

$dados = ['Vinicius', 10, 24];

list ($nome, $nota, $idade) = $dados; // Utiliza indices númericos para atribuir as váriaveis
// ou
[$nome, $nota, $idade] = $dados;

extract($dados); // Percorre o arrey e transforma cada uma dos valores em uma váriavel

var_dump($nome, $nota, $idade);

var_dump(compact ('nome', 'nota', 'idade')); // Pega vários valores e transforma em um array