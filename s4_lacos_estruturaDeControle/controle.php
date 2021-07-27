<?php

if(false){

}else if(true){

}else {

}
echo "<br>";echo "<br>";

$mes=1;

switch($mes){
    case 1:  
        echo "janeiro"; 
        break;
    case 2:
    case 3: 
        echo "sem mes";
        break;
    default: 
        echo "tudo errado";
        break;
}

echo "<br>";
echo "<br>";
for($i = 0; $i<10; $i++){
    echo "número " . $i . "<br>";
}


//foreach é usado para pecorrer array e coleções
echo "<br>";
echo "<br>";
$meses = array (
    "jan", "fev", "marc", "abr",
);

foreach($meses as $index => $mes ){
    echo "mes de ". $mes . " index ". $index . "<br>" ;
}

$a=0;
while(true){
    
    echo $a . "<br>";
    if($a==10){
        break;
    }
    $a++;

}


echo "<br>";
echo "<br>";
if(isset($_GET)){ //como na primeira vez o get é vazio, para nao dar erro de indefino, pergunta se a variavel existe
    foreach($_GET as $key => $valor ){
        echo "nome ". $key . " valor ". $valor . "<br>" ;
    }
}else{
    echo "ainda nao";
}



?>

<form>
    <input type="text" name="nome">
    <input type="submit" value="ok">
</form>