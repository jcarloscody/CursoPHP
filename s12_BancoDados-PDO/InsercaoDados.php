<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

//SQL
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPool=0", "sa", "root");

//statement significa comando
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
//:NOME   ->>  o pdo consegui detectar onde sao parametros. então essa é a forma de declarar um parametro


$login = "José";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);//bindParam: quer dizer ligar. ligar o parametro ao valor
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute(); //executa

echo "Inserido OK!";

?>