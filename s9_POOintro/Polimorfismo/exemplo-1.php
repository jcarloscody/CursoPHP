<?php

/**POLIMORFISO
 * 
 * é um recruso do POO, vem do grego e define muitas formas, são metodos com mesmo nome em classes diferentes herdadas
 * tem comportamento diferente. 
 */

abstract class Animal {

    public function falar(){

        return "Som";

    }

    public function mover(){

        return "Anda";

    }

}

class Cachorro extends Animal {

    public function falar(){

        return "Late";

    }

}

class Gato extends Animal {

    public function falar(){

        return "Mia";

    }

}

class Passaro extends Animal {

    public function falar(){

        return "Canta";

    }

    public function mover(){

        return "Voa e " . parent::mover();
        //this - se refere ao proprio objeto, a sua classe que está instanciada
        //parent - se refere a classe pai. vai acessar estaticamente o metodo

    }

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-------------------------<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";

?>