<?php

$email = $_POST["inputEmail"]; //pega o que veio no method post

echo "<pre>";
var_dump($email);
echo "</pre>";

echo "</br>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";

$ch = curl_init();//inicializar o cURL

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");//passa o site conforme a instrucao da google
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);//
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LfV2hgUAAAAAGA0iygfMNS9vUQ7liCTkyju1y3T", //chave secreta. a chave publica esta no outro arquivo, cuidado com  chave secreta
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));/**http_build_query - funcao que pega um array e envia como se fosse uma query so */

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//espera um retorno do google

$recaptcha = json_decode(curl_exec($ch), true);//pega a respsota que vem

curl_close($ch);//fecha a conexao

echo "</br>";
echo "<pre>";
var_dump($recaptcha);
echo "</pre>";

echo "</br>";
if ($recaptcha["success"] === true) {

    echo "OK: ".$_POST["inputEmail"];//mostra o que veio no post do input com name inputEmail

} else {

    header("Location: exemplo-4.php");

}

?>