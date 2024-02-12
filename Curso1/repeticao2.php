<?php

// Faça um contador de 1 até 15, exceto o número 13

for ($i = 1; $i <=15; $i++) {
    if ($i == 13) {
        continue; // Vai continuar para a próxima quando alcançar a condição
    };

    echo "#$i" . PHP_EOL;

}

// Caso eu queira quebrar o loop, coloco um break no lugar do continue, assim ele pararia no 12;