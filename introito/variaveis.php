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




/**VARIAVEIS PRE DEFINIDAS OU ARRAYS SUPER GLOBAIS
 * sao variaveis internas do PHP que ja vem com alguns recursos  que  carrega desde informaçoes externas
 * ou seja, por exemplo recupera info do formulario, ate informacoes do ambiente tbm conhecida como
 * super global, pois nao importa onde esteja no PHP é possivel acessar as informacoes dentro das 
 * variaveis pre definidas, ou seja é acessivel em qq area.
 * 
 * 
 */

$nomeget =  $_GET["a"];
//tudo é retorna como string
//pega as variaveis da url  url?a=valor       a ? é chamada de querystring
//se quiser enviar mais de uma variavel   url?a=valor&b=valor   

$nomeget =  (int) $_GET["a"]; //casting para int
$nomegetb=  (int) $_GET["b"];
var_dump($nomeget);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;





//ESCOPO DE VARIÁVEL
$escopo = "global";

function escopo(){
    $escopo = "escopo local";
    echo $escopo; //imprime escopo local

}

escopo(); //imprime escopo local

function escopodois(){
    global $escopo; //possibilita acessar o escopo global
    echo $escopo; //imprime global
    $escopo = "global aqui";
}

escopodois(); //imprime global

echo $escopo; //imprime global aqui