<?php

//Usada nas versões do PHP 7.1.1 para baixo

$data = [ //array
    "nome"=>"Hcode"
];

define('SECRET', pack('a16', 'senha'));//define uma constante SECRET
//pack -. vai converter uma string em 16 bits, pq a chave que vamos usar em baixo precisa de uma string de 16 bits

$mcrypt = mcrypt_encrypt(//funcao para criptografia
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);//(algoritmo que vai usar, constante, string que vai ser encriptada, modo de criptografia)

$final = base64_encode($mcrypt);//tranforma em string a encriptografia

var_dump($final);



//descriptografia
$string = mcrypt_decrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    base64_decode($final),//base64_decode - transforma para o valor original
    MCRYPT_MODE_ECB
);

var_dump(json_decode($string, true));


var_dump(PHP_VERSION);
?> 