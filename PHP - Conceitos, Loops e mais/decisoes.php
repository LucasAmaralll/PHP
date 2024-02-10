<?php

$idade = 17;
$numerodePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) { 
    echo "Você tem $idade anos. Pode entrar sozinho(a)";
} else if ($idade >= 16 and $numerodePessoas > 1) {
    echo "Você $idade anos, está acompanhado (a), então pode entrar.";
} else {
    echo "Você tem $idade anos. Não pode entrar";
}

// Também poderiamos retirar as chaves, porque em cada verificação só tem uma instrução     

