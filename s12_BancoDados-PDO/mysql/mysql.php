<?php
/** */
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
/** ("tipo_banco:dbname=nome_banco;host=localhost","login","senha") */

$stmt = $conn->prepare("SELECT * FROM clientes ORDER BY nome");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
/**fetchAll: vai fatiar todas as linhas, já retorna todos os resultados, não é necessário fazer o while como no sqli 
 * 
 * 
*/
echo "<pre>";
var_dump($results);
echo "</pre>";

foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key."</strong>".$value."<br/>";

	}

	echo "========================================<br>";

}

?>