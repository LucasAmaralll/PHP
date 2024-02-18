<?php

$notas = [
    10,
    8,
    9,
    7,
    6    
];

rsort ($notas); // Ordenação simples em forma descrescente
var_dump ($notas);

$notas2 = [
    'Ana' => 10,
    'Roberto' => 8,
    'Maria' => 9,
    'Lucas' => 7,
];

asort ($notas2); // Ordena crescente mantendo as chaves nos lugares
arsort ($notas2); // Ordena descrescente mantendo as chaves nos lugares
ksort ($notas2); // Ordena crescente utilizando as 
krsort ($notas2); // Ordena descrecente utilizando as chaves
var_dump ($notas2);