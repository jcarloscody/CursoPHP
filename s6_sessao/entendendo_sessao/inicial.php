<?php

session_start(); //a sessão precisa ser inicializada, por padrão, o php não inicializa. se quiser vc pode mudar isso
//toda pagina que for usar a sessao entao tem usar o session_start(), no servidor isso pode ser mudado no arquivo php.ini, mas isso não é padrão
//para ser produtivo podemos criar um arquivo de configuração e chamar esse arquivo 

$_SESSION["nome"] = "josué";








/**
 * Variavel de Local: só funcionam nas paginas que sao criadas ou se esse arquivo vier como inclusao dentro de outro arquivo
 * 
 * Variavel de sessao -  se assemelha a superglobal, é enxerga em todo o codigo enquanto o usuario está online. 
 * 
 * inicio: a partir do momento que o usuario acessa o site da internet então é criado uma sessao entre o usuario
 * e o servidor, essa sessao dura normalmente 20 minutos. esse tempo pode ser reduzido e podemos matar essa sessao
 * a qq momento via programaao.
 */