<?php

function ola(){ //funcao subrotina, ou seja, uma funcao sem retorno, apenas executa
    echo "ola" . "<br>";
}

ola();

function ola2($texto = "mundo"){ //funcao propriamente dita, ou seja, uma funcao com retorno
    return "ola $texto" . "<br>";
}

echo ola2("josue");


function hi(){
    $argumentos = func_get_args(); //pega os argumentos da funcao

    return $argumentos;
}

var_dump(  hi("argumento 1", "argumento 2"));





echo " <br>";
//PASSAGEM DE PARAMETRO POR VALOR
echo "PASSAGEM DE PARAMETRO POR VALOR <br>";
$a = 10;

function soma($b){
    $b += 10;
    
    return $b;
}

echo soma($a);  //imprime 20
echo " <br>";
echo $a; // imprime 10







echo " <br>";
//PASSAGEM DE PARAMETRO POR REFERENCIA
echo "PASSAGEM DE PARAMETRO POR REFERENCIA <br>";

function som(&$b){
    $b += 10;
    return $b;
}

echo som($a);  //imprime 20
echo " <br>";
echo $a; // imprime 20


echo " <br>";echo " <br>";


$pessoa = array(
    "nome" => "josue",
    "age" => 10
);

foreach($pessoa as &$v){
    if(gettype($v)==="integer"){
        $v+=10;
    }

    echo $v;echo " <br>";
}
echo " <br>";
print_r($pessoa);