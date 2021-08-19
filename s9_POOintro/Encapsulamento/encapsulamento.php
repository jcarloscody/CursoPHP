<?php

class  Pessoa {
    public $nome = "Rasmus Lerdorf";
    protected $idade = 34;
    /** permitido para as classes que herdan*/
    private $senha = "1234";
    /**private: só a classe corrente tem acesso */

    public function verDados(){

        echo  "class chamada: " . get_class($this) . "<br>";
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }
}

$novaPessoa = new Pessoa();
echo $novaPessoa->nome . "<br>"; //pega
//echo $novaPessoa->idade . "<br>"; //não pega protected

$novaPessoa->verDados();


class Programador extends Pessoa{
    
    public function verDadosProgramador(){
        echo  "class chamada: " . get_class($this) . "<br>";
        
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
    }
}

$programador = new Programador();
echo "<br>";echo "<br>";
echo $programador->nome . "<br>";
$programador->verDadosProgramador();

