<?php

// Conjunto de dados exposto como uma lista = array, são normalmente do mesmo tipo

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$primeiraIdade = $idadeList [0];

echo $primeiraIdade;

// adicionando dados

$idadeList [7] = 20;

// Caso tenha muitos itens podemos adicionar assim:

// $idadeList [count($idadeList)] = 20;

// De uma maneira mais inteligente, não precisamos informar o índice, o PHP adiciona no último

// função list, pego os valores que estão nos indices 0, 1, 2 e atribuo as váriaveis abaixo da minha lista $idadeList
list ($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
unset ($idadeList [4]);

$idadeList [] = 21;

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}