<?php

echo "Geando números aleatórios em PHP \n";

//Variáveis $n1 e $n2 com número aleatório gerado pelo método "rand"
$n1 = rand(1,9);
$n2 = rand(1,9);

//Variável $key fazendo a soma das variáveis 
$key = ($n1 + $n2);

//output
echo "\n";
echo "$n1 + $n2 = ";

echo $key;
