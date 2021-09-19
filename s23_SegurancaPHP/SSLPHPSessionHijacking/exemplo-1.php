<?php

session_start();
echo session_id();

//Depois de verificar login e senha reinicie o ID da sessão

session_destroy();


session_start();

session_regenerate_id();//toda vez com f5 vai gerar um novo id

echo session_id();




/**
 * Toda vez que acessa um site, lá no servidor cria se um cookie, aaquivo de txt com o id da sua sessao,
 * e na sua maquina tbm cria um cookie com o mesmo id de sessao e o site compara essas informacoes . 
 * o problema é se o cara descobre essas informacoes e conseguir acessar o server informando o id de sessao
 * da vitima vai conseguir compartilhar as informacoes daquela sessao com ele. 
 * 
 * 
 * Modo de Tratar:
 * SSL - security solid ...
 * todo server que troca informacoes entre ele e o cliente, é importante proteger essa camada, e para isso temos
 * o ssl que é uma camada de seguranca que encripta  essas informacoes. funciona da seguinbte forma: tem um dcumento
 * que é gerado por uma autoridade certificadora onde nesse documento vc diz o que e sua empresa o que ela faz
 * qual o numero dela (...) essa autoridade vai verificar se isso é verdade, vai pagar por esse certificado
 * depois que gera esse certificado, ela gera uma chave de texto criptografado, esse arquivo vai ser importado 
 * para o server web (iis, apacha...) é o pessoal de infraestrutura que faz. muitas empresas de hospedagem já
 * incluem isso dentro do pacote.           
 * 
 * GERANDO UM NOVO ID DE SESSAO
 * 
 * 
 */
?>