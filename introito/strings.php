<?php

$firstName = "josue";
$lastName = " Carlos";

echo "$firstName $lastName<br>"; //interpolação de variaveis
echo '$firstName $lastName <br>'; //nao pega interpolacao com ' '

$firstName  = strtoupper($firstName); //retorna maiscula

$firstName = strtolower($firstName); //minuscula

$full = $firstName . $lastName;
echo $full;

$full = ucwords($full); //cada começo de palavra tera sua letra maiuscula
$full = ucfirst($full); //a primeira letra da primeira palavra da frase vai ficar maiuscula

$full = str_replace("a", "@", $full); //vai trocar (o que, pelo que, variavel)

$full .= " da silva";

$posicaoPalavra = strpos($full, "silva"); //retorna a posicao do indice da variavel

$recorteDeString = substr($full, 0, $posicaoPalavra); //vai recortar da posicao 0 até a posiçõa $posicaoPalavra

$quantidadeLetras =  strlen($full);//quantidade de letras

