<?php
//vamos usar uma classe do php para tratar das datas

$dataTime = new DateTime();    //instanciacao de um objeto datatime

echo $dataTime -> format("d/m/Y H:i:s"); //a forma de chamar um metodo é por meio de ->

echo "<br>";
//SOMA DE DATAS

$periodo = new DateInterval("P15D");//instancia um objeto com um valor de periodo, aqui de 15 dias

$dataTime -> add($periodo); //adiciona o objeto de periodo ao valor da data

echo $dataTime -> format("d/m/Y H:i:s");