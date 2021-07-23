<?php

//include "paraInclude.php";
/**include
 * mesmo que o arquivo esteja com problema vai tentar funcionar.
 * 
 * o include tem mais recurso, exemplo: tem o include path que permite que o include traga arquivos
 * direto de lá. este diretorio por padrao é configurado no php "php.in". 
 * 
 * tbm temos o include remoto/dinamico: permite trazer um arquivo de um site. tem o perigo que pode ter script malicioso
 * 
*/

//require "paraInclude.php";
/**require
  * obriga que o arquivo exista e que o arquivo esteja funcionando perfeitamente.
  
  se não estiver funcionando perfeitamente ou se não existir o require gera um erro fatal e para a execucao 
  do codigo.

  com o PHP7 o erro fatal gera uma exceção que pode ser tratada e com isso evitando a quebra da pagina
*/

require_once "paraInclude.php";  //irá incluir apenas uma vez, se tentar incluir mais uma vez não irá funcionar
//ou include_once

$res = soma(2,2);
echo $res;

//echo "jos";