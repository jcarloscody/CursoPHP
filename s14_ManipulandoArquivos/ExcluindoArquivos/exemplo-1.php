<?php

$file = fopen("teste.txt", "w+");

fwrite($file, "ola");
echo "Arquivo criado  com sucesso!";
echo "</br>";

fclose($file);



unlink("teste.txt");//remove o arquivo


unlink("C:/xampp/htdocs/CursoPHP/PHP/s14_ManipulandoArquivos/ExcluindoArquivos/images/teste.txt");

echo "Arquivo removido com sucesso!";

?>