<?php

if (!is_dir("images")) mkdir("images"); //se nao tem o diretorio cria

foreach (scandir("images") as $item) {
    //escanea o diretorio

    if (!in_array($item, array(".", ".."))) {
        //se nao for o .(diretorio local) ou ..(diretorio acima) 

        unlink("images/" . $item);//remove o arquivo

    }

}

echo "OK";

?>