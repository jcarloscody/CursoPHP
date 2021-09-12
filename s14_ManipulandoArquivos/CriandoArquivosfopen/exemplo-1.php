<?php

$file = fopen("log.txt", "a+");/**vamos criar aqui uma referencia para o arquivo externo que queremos criar
fopen("path/nome_arquivo", "como vc vai usar este arquivo")
w+, a+ tem muitos outros
    
*/

//funcao que add informacoes dentro do arquivo
fwrite($file, date("Y-m-d H:i:s") . "\r\n");//(o resource - o arquivo da manipulacao, "o que vc quer colocar dentro do arquivo")

fclose($file);//indica que terminou 

echo "Arquivo criado com sucesso!";

?>