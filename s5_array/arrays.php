<?php

$frutasVetor = array("abacaxi", "maça", "laranja");

print_r($frutasVetor); //print_r para array

$carros[0][0] = "gm";
$carros[0][1]="cobalt";
$carros[0][2]="onix";

$carros[1][0]="ford";
$carros[1][1]="fiesta";
$carros[1][2]="fusion";

echo "<br>";
echo $carros[0][0];

echo "<br>";
echo end($carros[1]); //ver o ultimo elemento da linha mencionada, ou seja, 1


//ARRAYS COM INDICES CUSTOMIZADOS - tbm matrizes

echo "<br>";
$frutasVetorX = array();
array_push($frutasVetorX, array(    //adiciona elementos ao array
    "A" => "abacaxi", 
    "M" => "maça",
    "L" => "laranja"
));
print_r( $frutasVetorX[0]['A']);


echo "<br>";
$frutasVetorY = array( "A" => "abacaxi", 
"M" => "maça",
"L" => "laranja");

print_r( $frutasVetorY['A']);