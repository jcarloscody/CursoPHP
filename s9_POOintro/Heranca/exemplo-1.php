<?php

class Documento {

    private $numero; //atributo

    public function getNumero() {

        return $this->numero;

    }

    public function setNumero($n) {

        $this->numero = $n;

    }

}

class CPF extends Documento {

    public function validar():bool {
        //return boleano.  :bool - retorno - do PHP7

        $numeroCPF = $this->getNumero();

        return true;

    }

}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>