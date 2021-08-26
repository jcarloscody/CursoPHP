<?php

require_once("config.php");

use Cliente\Cadastro;//namespace/classe_nome
use Cliente\CadastroDOIS;//namespace/classe_nome
use ClienteT\CadastroTRES;//namespace/classe_nome

$cad = new CadastroTRES();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>