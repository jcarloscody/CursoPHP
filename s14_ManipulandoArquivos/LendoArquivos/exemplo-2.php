<?php

$filename = "logo.png";


//file_get_contents  vai ler o conteudo de um arquivo inteiro, e vai retornar binario e para converter
//usa-se o base64_encode
$base64 = base64_encode(file_get_contents($filename));//ler e retorna em binario um arquivo img e converte um binario em string

echo "data:image/png;base64," . $base64;

$fileinfo = new finfo(FILEINFO_MIME_TYPE);//classe para pegar informacoes do tipo do arquivo
//FILEINFO_MIME_TYPE   é uma constante que indica que vai pedir o tipo do arquivo

$mimetype = $fileinfo->file($filename); //retorna o type
echo "</br>";
echo $mimetype;
echo "</br>";

$base64encode = "data:" . $mimetype . ";base64," . $base64;
echo "</br>";
echo $base64encode;
?>

<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a>

<img src="<?=$base64encode?>">