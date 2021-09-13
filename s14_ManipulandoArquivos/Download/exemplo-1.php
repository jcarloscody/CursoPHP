<?php

    $link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

    $content = file_get_contents($link);//pega o conteudo do arquivo tal. 

    //echo $content; //vem em conteudo binário

    $parse = parse_url($link);//vai interpretar o conteudo que veio. vai transformar aquele arquivo (qq q seja) em um arquivo real

    echo "<pre>";
    var_dump($parse);
    echo "</pre>";

    $basename = basename($parse["path"]);//pega nome.extensao
    
    echo "</br>";
    echo $basename;

    $file = fopen($basename, "w+");//criar um arquivo 
    $file = fopen("aisdn.png", "w+");//criar um arquivo 


    fwrite($file, $content);//vai escrever o o conteudo no arquivo criado

    fclose($file);

?>

<img src="<?=$basename?>">