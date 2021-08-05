<?php

echo date('d/m/Y H:i:s');

echo '<br>';echo '<br>';

echo time(); //pega o timestap que é a quantidade de segundos desde 01/01/1970, pq é apartir desta data do padrao UTC do calendario grecoriano que o marco 0 do sistema de calendario usado pelo sistema unix, tbm conhecido como posix.
//o php é baseado na linguagem c e por extencao unix

echo '<br>';echo '<br>';
echo date('d/m/Y H:i:s', 1628124804);

echo '<br>';echo '<br>';

echo strtotime("2018-09-31"); //converte o string para o timestamp


echo '<br>';
//$timestanp = strtotime("2018-09-31");
$timestanp = strtotime("now");
$timestanp = strtotime("+1 day");
echo date("l, d/m/Y" , $timestanp);