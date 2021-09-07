<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

//SQL
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPool=0", "sa", "root");

$conn->beginTransaction();
/**transacao  é um processo de confirmacao se tudo der certo ou se der errado tem o callback que é reverter o status quo*/

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback(); //cancela o que fez 
$conn->commit();

echo "Delete OK!";

?>