<?php

require_once('config.php');

//session_unset($_SESSION["nome"]); //apaga determinado indice ou a sessao completa
//limpa a variavel de sessao

echo $_SESSION['nome'];


session_destroy();
//limpa variavel e remove o usuario
//se der um f5 é como se tivesse um novo usuario no servidor

//nos browsers mais antigos se tivesse o nivel de segurança muito elevado, por exmpl IE10 ou IE8
//se colocasse o nivel de seguranca muito elevado, o browser nao iria permitir criar um arquivo temporario na sua maquina
// e ai as variaveis de sessoes nao funcionam 

?>