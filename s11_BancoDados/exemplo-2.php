<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM Clientes");
//executando um comando direto no bd sem o prepered

$data = array(); //array para guardar o retorno

while ($row = $result->fetch_assoc()) {
    //o metodo fetch_assoc ou fetch_array vai retornar os valores se tiver no bd. vai retornar linha por linha, então enquanto tiver linha vai executar o comadno abaixo
    //o retorno vai ser do tipo array
    //o fetch_array vai retornar com os indices

   array_push($data, $row); //adicionando as linhas lidas no array data
   

}

echo json_encode($data);//gerando json com o resultado

?>