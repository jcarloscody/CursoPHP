<?php

require_once("../entendendo_sessao/config.php");

session_regenerate_id(); //gera novamente um novo id, uma nova sessao.
echo session_id();



/**aqui iremos forçar ele criar uma nova sessao */


//session_id('coloca aqui o id'); //aqui vc pode inserir um id de alguma maquina e acessar por esse id. muito cuidade