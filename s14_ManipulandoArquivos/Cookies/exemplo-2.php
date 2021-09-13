<?php
/**recuperar o cookie caso ele exista */
if (isset($_COOKIE["NOME_DO_COOKIE"])) {

    var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));//transforma de json para array
    
    echo "</br>";echo "</br>";
    echo  $_COOKIE["NOME_DO_COOKIE"]; //json

    echo "<br/>";//Coloquei esse br para quebrar a linha para visualizar melhor os dois exemplos

    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);//json para obj

    echo $obj->empresa;

}

?>