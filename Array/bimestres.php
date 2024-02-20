<?php

$notasBimestre1 = [
    'Ana' => 10,
    'Roberto' => 8,
    'Maria' => 9,
    'Lucas' => 7,
    'Vinicius' => 6,
];

$notasBimestre2 = [
    'Ana' => 10,
    'Roberto' => 8,
    'Maria' => 9,
    'Lucas' => 7,
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); 

// array_diff = Retorna um novo array com os elementos que tem no primeiro array e não tem no segundo array, levando em consideração somente os valores.

// array_diff_key = Faz a mesma coisa, mas considerando as chaves. 

// array_diff_assoc = Faz a mesma coisa mas comparando os valores das chaves e retornando os valores que estão diferentes

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

$nomesAlunos = array_keys($alunosFaltantes);

// array_keys, cria um novo array com as minhas chaves

$notasAlunos = array_values($alunosFaltantes);

// array_values, cria um novo array com os meus valores

var_dump(array_combine($notasAlunos, $nomesAlunos));
// array_combine, crio uma nova array combinando as chaves e os valores de dois arrays, esses arrays tem que ter o mesmo tamanho

var_dump(array_flip($alunosFaltantes)); // Inverte, o que é valor vira chave e o que é chave vira valor
