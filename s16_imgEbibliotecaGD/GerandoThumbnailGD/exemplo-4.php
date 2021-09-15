<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;//DEFININDO AS novas larguras e alturas
$new_height = 256;


//getimagesize - funcao do php que pega o tamanho da img.  (caminho)
var_dump(getimagesize($file));

//list - desestrutura um array(index 1, index 2, index 3...)
list($old_width, $old_height) = getimagesize($file);

//imagecreatetruecolor -> funcao que carrega a palheta de 16 milhoes de cores
//cria uma imagem com estas dimensoes
$new_image = imagecreatetruecolor($new_width, $new_height);


//criar a imagem, mas esta é a antiga
$old_image = imagecreatefromjpeg($file);

//(img destino, img origem, recorte dest x, recorte  dest y, recorte  orig x, recorte  orig y, largura img destino, altura img destino, largura img origem, altura img origem)
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);//gerar img

imagedestroy($old_image);//destruindo as variaveis da memoria
imagedestroy($new_image);

?>