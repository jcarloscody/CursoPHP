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
echo "ultimo do array ". end($carros[1]); //ver o ultimo elemento da linha mencionada, ou seja, 1
echo "<br>";
echo "ultimo do array ". end($carros[0]);

//ARRAYS COM INDICES CUSTOMIZADOS - tbm matrizes

echo "<br>";
$frutasVetorX = array();
array_push($frutasVetorX, array(    //adiciona elementos ao array
    "A" => "abacaxi", 
    "M" => "maça",
    "L" => "laranja",
    "indice"
));
print_r( $frutasVetorX[0]['L']); echo "<br>";

array_push($frutasVetorX, "f");
print_r( $frutasVetorX[1]);  echo "<br>";

array_push($frutasVetorX, array("tomate", "cebola", "favoritas"=>"coentro", "oface"));

print_r( $frutasVetorX[2]);  echo "<br>";
print_r( $frutasVetorX[2][1]);  echo "<br>";
print_r( $frutasVetorX[2]['favoritas']);  echo "<br>";
print_r( $frutasVetorX[2][2]);  echo "<br>";

echo "<pre>";
print_r($frutasVetorX);
echo "</pre>";


echo "<br>";
$frutasVetorY = array( "A" => "abacaxi", 
"M" => "maça",
"L" => "laranja");

print_r( $frutasVetorY['A']);