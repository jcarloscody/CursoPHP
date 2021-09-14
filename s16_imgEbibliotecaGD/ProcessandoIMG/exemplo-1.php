<?php

/**BIBLIOTECA GD - GRAFICAL DESIGN
 * 
 * essa nao é uma biblioteca so do php, mas pode ser usada em outras linguagens de programacao.
 * a ideia é gerar img dinamicamente, como tbm gerar img a partir de outra reduzindo as dimensoes e o tamanho do armazenamento
 * 
 * delocamento x,y
 * 50 por 20: é 50px a partir da esquerda e 20px a partir da altura
 */

header("Content-Type: image/png");//essa funcao determina que o tipo de tal conteudo é uma img

$image = imagecreate(256, 256);//uma variavel que vai armazenar a tela (largura, altura) em px

//palheta de cores
$black = imagecolorallocate($image, 0, 0, 0);//(parametro da imagem, red, green, blue)
$red = imagecolorallocate($image, 255, 0, 0);


//escrever na tela 
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);
//(parametro da imagem, font de 1 a 5, delocamento x, deslocamento y, string de escrita, cor )

imagepng($image);//dizer o formato que iremos jogar na tela. e o que vc colocar no hearder 
//nessa hora que o php faz o page 

imagedestroy($image);//destroi a variavel pq senao fica pendurado no php

?>