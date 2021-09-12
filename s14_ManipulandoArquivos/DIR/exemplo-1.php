<?php

$name = "imagem"; //uma variavel com o nome do diretorio     

if (!is_dir($name)) { //is_dir verifica se é um diretorio
    //se nao for um diretorio 

    mkdir($name);//vai criar um diretorio com tal nome
    echo "Diretório $name criado com sucesso!";

} else {

    rmdir($name);//remove o diretorio
    echo "Já existe o diretório: $name foi removido";

}

?>