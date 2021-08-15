<?php 

class Pessoa{
    public $nome; //atriuto

    public function falar(){ //metodo
        return "O meu nome é " . $this->nome; // $this : variavel interna do php, serve para referenciar atribubtos e metodos dentro de outros metodos
    }
}

$josue = new Pessoa(); //() quando nao tem construtor a classe, os () são opcionais. é boa pratica colocar mesmo assim
$josue->nome = "josue carlos";

echo $josue->falar();