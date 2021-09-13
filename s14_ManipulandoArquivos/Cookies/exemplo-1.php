<?php


/**
 * armazena valores no browser na maquina do usuario temporariamente,
 * 
 * é um arquivo de texto de pequeno tamanho que nós armazenamos informacoes, e como é temporario
 * vc é obrigado a dizer o tempo que esse arquivo sai da maquina do usuario.se vc nao colocar uma data de
 * expiracao na hora que o user fechar o browser o cookie sai da maquina
 * 
 * */


    $data = array(

        "empresa"=>"Hcode Treinamentos"

    );
    
    //cria o cookie
    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
    //o terceiro parametro é o tempo em unix time stamp. aqui vai expirar em 1h

    echo "OK";


    /**pesquisar cookie gerador por terceiro para marketing */
?>