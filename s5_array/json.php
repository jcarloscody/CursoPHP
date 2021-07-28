<?php

/*JSON - javascript object notation:: é um formato de arquivo de comunicacao, toda linguagem de programacao
gera este arquivo, e esse tipo de comunicacao facilita a integracao de sistemas, a interoperabilidade de sistemas
OU SEJA, eu tenho um sistema em PHP e vc tem em Java, eu posso gerar um json com meus dados e vc com
o Java pode consumir essa informacao.
Criado por: dorvald trav
É usado em praticamente em todas as linguages. 
*/

$frutasVetorX = array();
array_push($frutasVetorX, array(    //adiciona elementos ao array -
    "A" => "abacaxi", 
    "M" => "maça",
    "L" => "laranja"
));
echo "<pre>" . json_encode($frutasVetorX) . "</pre>" ; //transforma array em json


$json = '[{ "A": "abacaxi", "M": "maça", "L": "laranja"}]';

$jsonParaArray = json_decode($json, true);//converte json para array
print_r($jsonParaArray);