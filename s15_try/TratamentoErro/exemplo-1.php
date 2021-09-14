<?php

/**
 * erro:
 * exceção:
 * warning:
 * noticies:
 * 
 */

function error_cabecalho($code, $message, $file, $line){
    //estamos personanlizando um erro
    //vc pode criar essa funcao com o nome que quiser, porem vc precisa esperar os parametros que ele vai mandar

    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "fine"=>$file,
        "lile"=>$line
    ));

}

set_error_handler("error_cabecalho");//aqui ensinamos para o php que o erro é essa funcao x com o set_error_handler

$total = 100 / 0;

?>