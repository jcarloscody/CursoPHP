<?php

function incluirClasses($nomeClasse){
	

	if (file_exists($nomeClasse.".php") === true) {
		//se já existe neste diretorio um arquivo com este nome
		require_once($nomeClasse.".php");
	}

}

//estudar funções spl


spl_autoload_register("incluirClasses");//é uma funcao da spl(standerd  php library - conjuntos de funcoes nativas do php que sao usadas para facilitar lacunas), entao 
//vai suprir lacunas do autoload, pois o autoload só ver dentro do próprio diretório e não fora
//leva como argumento uma funcao ou um nome de funcao para chama-la. aqui estamos passando uma string com o nome da funcao

//passando uma funcao anonima
spl_autoload_register(function($nomeClasse){
	//se no diretorio abstrata (é sensive case o linux, cuidado) concatenado com a barra do diretorio (DIRECTORY_SEPARATOR) concatenado com o nome de arquivo 
	if (file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
		require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
	}


});

$carro = new DelRey();

$carro->acelerar(80);

?>