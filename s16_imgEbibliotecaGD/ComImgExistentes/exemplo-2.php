<?php

/**
 * fazendo uma img com outra img anterior
 */

$image = imagecreatefromjpeg("certificado.jpg");//funcao para criar a partir de uma img e passamos o path dela
//guardamo numa varia

//palheta de cores
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);



imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em.").date("d/m/Y"), $titleColor);
//utf8_decode() serve para converter para o padrao internacional


header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);
imagejpeg($image);
//vc pode passar outros parametros na geracao do arquivo
//(imagem para geracao, nome do arquivo que vc quer gerar no diretorio, qualidade 0-100)

imagedestroy($image);

?>