<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {
	//é importante o nome do arquivo ter o mesmo nome da classe pq iremos usar isso na funcao autoload, quando passar o nome da classe
	//irá procurar o arquivo com este nome

	public function acelerar($velocidade){

		echo "O veículo acelerou até " . $velocidade . "km/h";

	}
	public function freiar($velocidade){

		echo "O veículo freiou até " . $velocidade . "km/h";

	}
	public function trocarMarcha($marcha){

		echo "O veículo engatou a marcha " . $marcha;

	}

}

?>