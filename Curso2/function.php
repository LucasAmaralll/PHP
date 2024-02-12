<?php

// Function nomedaFunction ($parametro) {o que vai acontecer quando chamar a function}

// Lembrando a function não precisa de passagem de parametro

// Caso eu queria salvar o retorno da minha function em uma váriavel, basta acresenctar o return da function

function adiciona2 ($x) {
   return $x + 2;
}

$sete = adiciona2 (5); // Dessa maneira ela retornará 7 e salvara na variável declarada

echo $sete;