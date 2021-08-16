<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return  $this -> modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor(){
        return  $this -> motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getAno():int{  //aqui o retorno será um inteiro. se não tivesse esse casting, retornaria uma string
        return  $this -> ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "Modelo" => $this->getModelo(),
            "Motor"  => $this->getMotor(),
            "Ano"    => $this->getAno()
        );
    }
}

$gol = new Carro();
$gol->setModelo("xv");
$gol->setMotor("sow");
$gol->setAno(2019);

echo "Modelo: " . $gol->getModelo();
echo "<br>";

var_dump($gol->exibir()); echo "<br>";

print_r($gol->exibir());

