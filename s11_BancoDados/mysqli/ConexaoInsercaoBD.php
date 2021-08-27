<?php

$conn = new mysqli("127.0.0.1:3306", "root", "", "dbphp7"); //classe nativa do php mysqli
//(servidor, user, password, banco de dados)
//servidor: localhost ou 127.0.0.1 ou se na nuvem teria o ip ou endereco
//o objeto está armazenando o retorno do que foi executado

if ($conn->connect_error) {
    //-> operador para acessar atributos ou metodos pq é objeto
    //vai pegar o atributo connect_error
    //se deu erro ou nao

    echo "Error: " . $conn->connect_error . "deu bosta"; //mostra o erro

}

$stmt = $conn->prepare("INSERT INTO Clientes (idClientes, nome) VALUES(?, ?)");
//pegamos a variavel da conexao que esta aberta e acessa o metodo prepare que servira para preparar um comando
//que vc quer enviar lá para o banco de dados 

$stmt->bind_param("is", $id, $nome);
//chama o metodo bind, para este metodo vc vai passar os tipos de dados das interrogacoes do prepare, os tipo dos valores
//o idClientes é int e nome string, então is, i de inteiro e s de string, se fosse fload ou double seria d
//os outros parametros são os valores que queremos passar
//cuidado: os parametros passados devem ser passados por referencias

$id = 1;
$nome = "Josue";

$stmt->execute();
//executa o comando de inserção

$id = 2;
$nome = "carlos";

$stmt->execute();


?>