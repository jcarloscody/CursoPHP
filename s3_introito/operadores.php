<?php

$nome = "josue carlos<br>";

echo $nome . " diga olá<br>";

$nome .= " da silva<br>";

echo $nome;

$valor = 10;

$valor *= 10; //100

$valor *= .9; //90 percentagem

$valor2 = 90.0;

var_dump($valor == $valor2); //true   valor
echo "<br>";

var_dump($valor === $valor2); //false valor  e tipo
echo "<br>";

var_dump($valor != $valor2);//valor
echo "<br>";

var_dump($valor !== $valor2);//valor e tipo
echo "<br>";

var_dump($valor <=> $valor2); //esse sinal é o spaceship e quer dizer...
//se $valor é maior tras 1
//se for igual tras 0
//se $valor for menor tras -1
echo "<br>";

$a = null;
$b = 6;
$c = 10;
echo "<br>";
echo $a ?? $b ?? $c; //mostra o a, se nulo, mostra o b, se nulo, mostra o c

