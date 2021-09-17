<?php

/**
 * ASSUNTO IMPORTANTE PARA QUEM TRABALHA COM HOSPEDAGEM
 * 
 * 
 */

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);//mkdir CRIA PASTA se nao existir  (nome da pasta,  permissao)
/**
 * 0 nao existe permissao
 * 1 permissao de execucao
 * 2 gravacao
 * 3 - executar  e gravar
 * 4 - leitura
 * 5 - leitura e execucao
 * 6 - leitura e gravacao
 * 7 - tudo
 * 
 * conjunto de numeracao no unix -
 * 0775 - primeiro nº é o dono 7, segundo numero é o grupo 7, terceiro sao os convidados 5 
 * 
 */

echo "Diretório criado com sucesso!";

?>