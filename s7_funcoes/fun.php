<?php

function ola(){ //funcao subrotina, ou seja, uma funcao sem retorno, apenas executa
    echo "ola" . "<br>";
}

ola();

function ola2($texto = "mundo"){ //funcao propriamente dita, ou seja, uma funcao com retorno
    return "ola $texto" . "<br>";
}

echo ola2("josue");


function hi(){
    $argumentos = func_get_args(); //pega os argumentos da funcao

    return $argumentos;
}

var_dump(  hi("argumento 1", "argumento 2"));





echo " <br>";
//PASSAGEM DE PARAMETRO POR VALOR
echo "PASSAGEM DE PARAMETRO POR VALOR <br>";
$a = 10;

function soma($b){
    $b += 10;
    
    return $b;
}

echo soma($a);  //imprime 20
echo " <br>";
echo $a; // imprime 10







echo " <br>";
//PASSAGEM DE PARAMETRO POR REFERENCIA
echo "PASSAGEM DE PARAMETRO POR REFERENCIA <br>";

function som(&$b){
    $b += 10;
    return $b;
}

echo som($a);  //imprime 20
echo " <br>";
echo $a; // imprime 20


echo " <br>";echo " <br>";


$pessoa = array(
    "nome" => "josue",
    "age" => 10
);

foreach($pessoa as &$v){
    if(gettype($v)==="integer"){
        $v+=10;
    }

    echo $v;echo " <br>";
}
echo " <br>";
print_r($pessoa);

function somaArray(int ...$numeros){ //o nome desse recurso é declaracao de tipos escalares
    return array_sum($numeros);
}

echo "<br> ";
echo "<br> ";

echo somaArray(2,3,4); 
echo "<br>";
echo somaArray(3.3,4.5); //vai ignorar os decimais pq só recebe inteiros

echo "<br> ";echo "<br> ";

//RETORNO   -----******
function somaArray2(int ...$numeros): string{ //fazendo uma funcao com tipo de retorno string
    return array_sum($numeros);
}

echo var_dump(somaArray2(2,3.4));


echo "<br> ";echo "<br> ";

//FUNÇÃO RECURSIVA -  uma funcao x chama ela mesma, cuidado com o loop
$hierarquia = array(
    array(
        'nomeCargo' => 'CEO',
        'subordinados' => array(
            //inicio: diretor comercial
            array(
                'nomeCargo' => 'gerente comercial',
                'subordinados' => array(
                    //inicio: gerente de vendas
                    array(
                        'nomeCargo' => 'gerente de vendas'
                    )
                    //termino: gerente de vendas
                )
            ),//termino: diretor comercial
            //inicio: diretor financeiro
            array(
                'nomeCargo' => 'diretor financeiro',
                'subordinados' => array(
                    //inicio: gerente de contas a pagar
                    array(
                        'nomeCargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            //inicio: supervisor de pagamentos
                            array(
                                'nomeCargo' => 'supervisor de pagamentos'
                            )
                            //termino: supervisor de pagamento
                        )
                    ),//termino: gerente de contas a pagar
                        //inicio: gerente de compras
                    array (
                        'nomeCargo' => 'gerente de compras',
                        'subordinados' => array(
                            //inicio: supervisor de suprimentos
                            array(
                                'nomeCargo' => 'supervisor de suprimentos'
                            )
                            //termino: supervisor de suprimentos
                        )
                    )   
                )//termino: gerente de compras
            )//termino: diretor financeiro
        )           
    ),
    array(
        'nomeCargo' => 'CEO',
        'subordinados' => array(
            //inicio: diretor comercial
            array(
                'nomeCargo' => 'gerente comercial',
                'subordinados' => array(
                    //inicio: gerente de vendas
                    array(
                        'nomeCargo' => 'gerente de vendas'
                    )
                    //termino: gerente de vendas
                )
            ),//termino: diretor comercial
            //inicio: diretor financeiro
            array(
                'nomeCargo' => 'diretor financeiro',
                'subordinados' => array(
                    //inicio: gerente de contas a pagar
                    array(
                        'nomeCargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            //inicio: supervisor de pagamentos
                            array(
                                'nomeCargo' => 'supervisor de pagamentos'
                            )
                            //termino: supervisor de pagamento
                        )
                    ),//termino: gerente de contas a pagar
                        //inicio: gerente de compras
                    array (
                        'nomeCargo' => 'gerente de compras',
                        'subordinados' => array(
                            //inicio: supervisor de suprimentos
                            array(
                                'nomeCargo' => 'supervisor de suprimentos'
                            )
                            //termino: supervisor de suprimentos
                        )
                    )   
                )//termino: gerente de compras
            )//termino: diretor financeiro
        )           
    )
);
$i = 1;
function exibe($ex){
    $html = '<ul>';

    foreach ($ex as $value) {
        $html .= '<li>';
        $html .= $value['nomeCargo'];
        $html .= '</li>';

        if(isset($value['subordinados']) && count($value['subordinados'])>0){
            $html .= exibe($value['subordinados']);
        }
    }


    $html .= '</ul>';


    return $html;
}

echo exibe($hierarquia);