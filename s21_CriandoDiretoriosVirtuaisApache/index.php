<?php

phpinfo();


/**
 * Recurso para servidor web
 * 
 * criaremos um virtual host, ou seja, criacao de diretorios virtuais para pastas dentro do servidor web
 * de maneira que vc pode chamar o endereço na url e esse endereco chama a pasta local, imagine tem um dominio
 * .com.br na sua maquina que em vez de ele ir para internet ele vai procurar no seu pc.
 * 
 * voce pode com sua hospedagem na nuvem vc pode criar seus virtuais hosts para hospedar mais de um site num mesmo servidor.
 
 */

/**como fazer
 * 
 * -> vai no arquivo httpd-vhosts.config  : xamp>apache>config>extra
 * coloca os parametros abaixo conforme desejar
 * 
 * 
 * ::: esse arquivo pega o endereco escrito e em vez de ir na internet procurar, ele vai vir no proprio computador. ele vai sobrescrever esse endereco caso ele exista na internet.
 * cuidado com virus tbm, muitas vezes o virus muda a configuracao desse arquivo para entrar em sites maliciosos, isso acontecer inspeciona esse arquivo para ver se ele foi alterado
 * -> vai no arquivo hosts: windows>system32>drivers>etc 
 * >
 * 
 */


/*

//Adicionar no https-vhosts.conf
<VirtualHost *:80>
    ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:/xampp/htdocs/website"
    ServerName local.cursophp7.com.br
    ErrorLog "logs/dummy-host2.example.com-error.log"
    CustomLog "logs/dummy-host2.example.com-access.log" common
    <Directory "C:/xampp/htdocs/website">
        Order allow,deny
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>

//Adicionar no hosts
127.0.0.1   local.cursophp7.com.br

*/

?>