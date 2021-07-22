<?php
//php - case sensitive


$fullName = "josue carlos da silva   "; //camelcase

$firstName = "josue carlos";
$lastName = "da silva";

$full = $firstName . " " . $lastName; //concatenação

echo $fullName;

var_dump($fullName); //tipo, tamanho, valor

unset($fullName); //apaga variável

if(isset($fullName)){ //se existe tal variável
    echo("existe variável");
}

echo $full;

/*TIPOS
numerico
string
boleano

TIPOS COMPOSTOS
array
objeto

TIPOS ESPECIAIS
resource
null
*/

