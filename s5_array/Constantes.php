<?php

define("CONSTANTEPC", "criado a chave da variavel contente");

echo CONSTANTEPC;

echo "<br>";

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
], true);//o true faz ser case insensitive, boa pratica é deixar false pois gramatica sensitive

print_r(BANCO_DE_DADOS); 


echo "<br>";
echo PHP_VERSION; //constante definida na linguage php
