<?php
//funcao sem noma, basta a sua execucao dentro de uma variavel, essas funcoes nao recebe retorno

function teste($x){
    //processo lento
    $x();//aqui esta executando o argumento, visto que o parametro passado é um funcao anonima
    
}

//Aqui estou passando uma funcao como paramentro. isso tbm é funcao anonima
teste(function (){  
    echo 'deu callback';
    
});

echo '<br>';


//atribuição funcao a uma variavel
$ola = function($a){
    echo $a;
};

echo $ola('vamos lá');