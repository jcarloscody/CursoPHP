<?php

//https://github.com/feulf/raintpl3

/**
 * RainTPL: recurso para template, tem um modelo de layout e quando precisa chama ele e troca apenas algumas valores
 * 
 */


require_once("vendor/autoload.php");

use Rain\Tpl; //para saber onde esta a classe

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Hcode" );//variavel (var, value)
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$tpl->draw( "index" );


?>