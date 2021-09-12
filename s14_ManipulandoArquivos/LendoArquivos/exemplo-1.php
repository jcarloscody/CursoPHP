<?php

/**
 * fget -> vai ler linha por linha de um arquivo
 * 
 * fread -> precisa passar quantos bytes precisa ler daquele arquivo
 */

$filename = "usuarios.csv";// nome do arquivo

if (file_exists("C:/xampp/htdocs/CursoPHP/PHP/s14_ManipulandoArquivos/LendoArquivos/usuarios.csv")) {
    //se o arquivo existe

    $file = fopen($filename, "r");//vai abrir para ler   

    /*$headers2 =  fgets($file); //vai pegar a primeira linha e retorna em string
    print_r($headers2);
    echo "</br>";echo "</br>";
    $headers2 =  fgets($file); //vai pegar a segunda  linha e retorna em string, pq a primeira já pegou
    print_r($headers2);
    echo "</br>";echo "</br>";*/

    $headers = explode(",", fgets($file));//explode vai ser o contradio de inplode, ou seja, vai pegar ums string e vai explodir e transformar num array
    //toda vez que encontrar uma ,
      // print($headers[0])  ;
    //print_r($headers);echo "</br>";echo "</br>";
    $data = array();

    while ($row = fgets($file)) {
        //enquanto houver linha

        $rowData = explode(",", $row);
        $linha = array();

        for ($i = 0; $i < count($headers); $i++) {

            $linha[$headers[$i]] = $rowData[$i];

        }
        
        array_push($data, $linha);


    }

   /* echo "<pre>";
    var_dump($data);
    echo "</pre>";*/
    fclose($file);

   echo json_encode($data);

}

?>