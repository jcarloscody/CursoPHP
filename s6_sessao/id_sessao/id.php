<?php

require_once('../entendendo_sessao/config.php');

echo session_id(); //mostra o id

var_dump($_SESSION);



/**ID de sessão
 * 
 * é uma identificacao da sua sessao unica do servidor. o servidor gera isso. se abrir em outro browser
 * vai gerar outro id. isso é muito usado em carrinho de compra, as vezes gera um cookie na maquina
 * , e melhor que cookie temos o localstorge e o session que é recursos do HTML5 que vc guarda no navegador e com
 * as informações que tinha consegue jogar no offline, para que quando o usuario sair e depois voltar poder
 * recuperar as informacoes
 * 
 *  
 */