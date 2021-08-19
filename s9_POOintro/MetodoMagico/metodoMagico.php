<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logradouro, $numero, $cidade)
    //esse é o metodo construtor: metodo acionado automaticamente em primeiro lugar diante de uma instanciação.
    //aqui no PHP usamos um metodo magico para fazer um construtor. a indentificação principal de um metodo magico é o __
    //aqui temos um metodo magico construtor
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __destruct() //esse metodo é chamado automaticamente quando o objeto instanciado é destruido, quando é tirado da memoria
    // pode ser destruido se terminou a execução ou se vc tirou da memorio por meio do metodo unset() por exemplo
    {
        echo "<br>";echo "<br>";echo "<br>";
        echo "Objeto Destruid";
    }

    public function __toString()
    {
        return "eu moro na cidade de " . $this->logradouro . " sob numero " . $this->numero . " na cidade de " . $this->cidade;
    }
}


$newAddress = new Endereco("R. Presidente Josue", "23", "Timbaúba");



echo $newAddress;

unset($newAddress);