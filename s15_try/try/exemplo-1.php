<?php

try {

    throw new Exception("Houve um erro.", 400);
    //aqui esotu estorando uma excecao
    //("mensagem", codigo )

} catch (Exception $e) {
    /**catch é o que pega o erro, deve informar a classe que vc esta captrando  
     * 
     * a variavel armazena o erro
    */

    echo json_encode(array(
       "message"=>$e->getMessage(), 
       "line"=>$e->getLine(), //a linha do codigo
       "file"=>$e->getFile(), //
       "code"=>$e->getCode() //o codigo
    ));

}

?>