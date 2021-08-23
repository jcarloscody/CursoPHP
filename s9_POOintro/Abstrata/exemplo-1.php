<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
    
}

abstract class Automovel implements Veiculo {

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

class DelRey extends Automovel {

    public function empurrar(){



    }

}
/**diferenças
 * class: só vai herdar uma so class abstrata
 * class: pode implementar varias interfaces
 * interface: só declara metodos que vc precisa colocar na sua class
 */

$carro = new Automovel(); //vc nao pode instanciar uma class abstratic

$carro = new DelRey();

$carro->acelerar(200);

?>