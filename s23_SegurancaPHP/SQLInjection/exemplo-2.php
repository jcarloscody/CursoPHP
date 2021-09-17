<?php

/**SQL Injection
 * 
 * a partir do php7 é recomendado o uso de o PDO ou class que vc utiliza baseado no PDO ou na classe  MYSQLi e fazendo o binding
 * dos parametros. evitar este tipo de ataque
 * 
 * SQL inj é quando um user mal intencionado descobe que vc esta mandando dados para dentro do bd e aproveita para no 
 * envio destes dados injetar comando para ir junto.
 * 
 * 
 */

 //?id=2 OR 1 = 1 --

$id = (isset($_GET["id"]))?$_GET["id"]:3; //operador ternario 
//se o user passou o algum id, se passou mantem o que ele passou id, senao tras o 4


if (!is_numeric($id) || strlen($id) > 5) { //para tratar os gets que sao feitos na url
    //strlen - quantidade string

    exit("Pegamos você!");

}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");  // variavel de conexao com o bd

$sql = "SELECT * FROM clientes WHERE idClientes = $id"; //comando de consulta sql

$exec = mysqli_query($conn, $sql);//executa

while ($resultado = mysqli_fetch_object($exec)) {

    /*echo "<pre>";
    var_dump( $resultado);
    echo "</pre>";*/

    echo $resultado->nome;

}

?>