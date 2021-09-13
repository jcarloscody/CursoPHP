<?php

    $dir1 = "folder_01";//diretorios
    $dir2 = "folder_02";

    if (!is_dir($dir1)) mkdir($dir1);//se nao existe os diretorio, entao cria
    if (!is_dir($dir2)) mkdir($dir2);

    $filename = "README.txt";//nome do arquivo

    if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {//se nao existe o $filename no dir1, entao cria

        $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");//cria no $dir1

        fwrite($file, date("Y-m-d H:i:s"));////escreve o conteudo no arquivo

        fclose($file);

    }


    //FUNCAO  PARA MOVER
    rename(
        $dir1 . DIRECTORY_SEPARATOR . $filename, //Origem
        $dir2 . DIRECTORY_SEPARATOR . $filename //Destino
    );

    echo "Arquivo movido com sucesso!";

?>