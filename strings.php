<?php

$idade = 21;
echo 'Olá mundo! Minha idade é '. $idade . ' anos'; // Para concatenar eu uso o ponto

echo "\n"; // Quando o php precisa interpretar um caracter especial, coloca ele em aspas duplas, as pas simples lê somente como string

echo "Olá mundo!" . PHP_EOL; // Também é possível quebrar a linha

echo "\t Olá mundo! Minha idade é $idade"; // Também poderia fazer assim, mas teremos que usar aspas duplas

// \t é um tab para minha string

// Para exibir o caractete das aspas podemos fazer da seguinte forma:

echo "\n Eu tenho \"$idade\" anos";
