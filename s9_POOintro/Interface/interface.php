<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
    
}

class Civic implements Veiculo {
    /**uma classe pode implementar várias interface */

    public function acelerar($velocidade){//o nome da variavel $velocidade não precisa ser exatamente o mesmo

        echo "O veículo acelerou até " . $velocidade . "km/h";

    }

    public function freiar($velocidade){

        echo "O veículo freiou até " . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha;

    }

}

$carro = new Civic();

$carro->trocarMarcha(1);

?>