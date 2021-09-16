<?php

/**
 * Slim Framework
 * tem o objetivo de criar APIs, é tbm chamado de microframework, e aqui vc trabalha principalmente com rotas.
 * em suma é um microframework para rotas 
 * 
 * 
 * é importante saber trabalhar com rest e com restfullapi
 * 
 * 
 * > trazer o arquivo .htaccess que esta no vendor>Slim> para a pasta do projeto, esse arquivo é de configuracao do apache,
 * esse arquivo cria regras para como a url é escrita
 */

require_once("vendor/autoload.php");

$app = new \Slim\Slim(); //ou use. 

//por meio da variavel que chama o Slim, instancia - objeto, iremos configurar as rotas



//configurando a pagina principal - index
$app->get('/', function(){

    echo "Home Page";

    echo "</br>";

    echo json_encode(array(
        'date'=>date("Y-m-d H:i:s")
    ));

});

//usara o metodo get
$app->get('/hello/:name', function ($name) {

    echo "Hello, " . $name;

});

$app->run();

?>