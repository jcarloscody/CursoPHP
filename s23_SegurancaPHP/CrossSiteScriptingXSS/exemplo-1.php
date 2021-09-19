<form method="post">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';

if (isset($_POST['busca'])) {

    //echo strip_tags($_POST['busca'], "<strong><a>"); //remove todas as tags exceto strong e a
    echo htmlentities($_POST['busca']);  //converte em   

}

/**
 * é similar a injecao de comando
 * basicamente o cara coloca comando nos codigo de entrada
 * 
 * Tipos de XSS: 
 * temporário - causa efeito momentaneo
 * permanente - 
 */



?>