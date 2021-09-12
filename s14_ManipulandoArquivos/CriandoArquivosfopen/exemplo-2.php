<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM clientes ORDER BY nome");

echo "<pre>";
print_r($usuarios); 
echo "</pre>";

echo "</br>";


$headers = array();//cabeçalhos, servirá como cabeçalhos para o excel

foreach ($usuarios[0] as $key => $value) {//pegando apenas a primeira linha do select

    array_push($headers, ucfirst($key));

}
echo "</br>";

echo "<pre>";
print_r($headers); 
echo "</pre>";

echo "</br>";
echo implode(",", $headers);//implde serve para criar um string de um array colocando separador 
echo "</br>";
echo "</br>";

$file = fopen("usuarios.csv", "w+"); //criar um arquivo x.csv 


fwrite($file, implode(",", $headers) . "\r\n");//escrevendo no arquivo. colocando o cabeçalho criado

foreach ($usuarios as $row) {//alimentando o arquivo com os dados
//desintregando o array geral

    $data = array();//

    foreach ($row as $key => $value) {
        //desintegrando o array interno

        array_push($data, $value);//anexando os valores dos arrays internos

    }//End Foreach de coluna

    echo "</br>";
    echo "<pre>";
    print_r($data); 
    echo "</pre>";
    
    fwrite($file, implode(",", $data) . "\r\n");

}//End Foreach de linha

fclose($file); //fecbhado o arquivo

?>