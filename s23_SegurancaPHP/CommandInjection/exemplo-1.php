<?php

/**
 * Command Injection
 * 
 * é um tipo de ataque em que o hacker injeta (injeção) comandos dentro de um comunicacao entre o client e o server
 * 
 * exemplo 01
 * quando temos um php que usa a funcao system () que é usado para execubtar comandos de sistemas operacionais
 * pode estar sujeito a ataque de injeção de comando
 * 
 * tbm esta sob ameaça a fucao exec
 * 
 * a injeção de comando pode ser feita por ferramentas de injeção de comando e pega tudo que estra sendo trafegado 
 * na rede 
 * 
 */
echo "<pre>";

$comando = system("dir C:", $retorno);
//(comando que executa no sistema o peracional, retorno)


echo "</pre>";



if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    //se o submit foi Post

    //USANDO O SYSTEM SEM PROTECAO
/*    $cmd = $_POST["cmd"];
    //recupera o que veio via POST  $_POST["nome_do_imput"]

    echo "<pre>";
    $comando = system($cmd, $retorno);
    echo "</pre>";*/


    //USANDO O SYSTEM COM PROTECAO
    $cmd = escapeshellcmd($_POST["cmd"]);
    //escapeshellcmd - vai tratar os dados dinamicos, ou seja, toda vez que vier um comando via post diferente do que vc ja tinha no sistema, ele vai escapar 
    //vira uma stirng
    var_dump($cmd);

    echo "<pre>";
    $comando = system("dir C:", $retorno);
    echo "</pre>";

}

?>

<form method="post">
    <!-- method post é mais seguro-->

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
    <!--comando apra parar o xampp

dir C:\ && C:/xampp/xampp_stop.exe-->

</form>