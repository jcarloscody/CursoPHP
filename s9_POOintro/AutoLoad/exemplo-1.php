<?php

function __autoload($nomeClasse){
	//metodo magico que recebe um parametro que é o nome da classe que foi chamada
	//a funcao já chama a classe automaticamente, não é necessário chamar a funcao autoload para ai sim ela chamar a classe
	//o ruim desse metodo é que ele só enxerga  dentro do próprio diretorio
	
	var_dump($nomeClasse);

	require_once("$nomeClasse.php");
	//inclui o arquivo com a classe. vai chamar o DelRey e o Automovel

}

$carro = new DelRey();

$carro->acelerar(80);
//chamando o metodo acelerar

?>