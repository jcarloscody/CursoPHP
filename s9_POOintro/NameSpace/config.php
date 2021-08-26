<?php
//aqui determinaremos onde procuraremos os arquivos

//o argumento é uma funcao anonima
spl_autoload_register(function($nameClass){

    $dirClass = "class";//o nome do diretorio é class

    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";//filename é o path

    if (file_exists($filename)) {

        require_once($filename);

    }

});

?>