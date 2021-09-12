<?php

$images = scandir("images");//vai escaniar o conteudo do diretorio

$data = array();

foreach ($images as $img) {

    if (!in_array($img, array(".", ".."))) {
        //em um diretorio temos o . (diretorio local) ..(diretorio acima) e os conteudos
        //para tirar estes itens a mais iremos usar o in_array, ou seja, faz uma busca dentro de um array
        //in_array(array de procura, o array com a posicao)
        //se não existir no array o . e o .. 
        
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        //o nome completo no arquivo é nome_da_pasta\nome_arquivo
        //o DIRECTORY_SEPARATOR é pq varia entre os sistemas operacionasis wind, lin... isso já previne erros

        $info = pathinfo($filename);//pega informaçoes do arquivo

       // var_dump($info);

        $info["size"] = filesize($filename); //adicionando uma chave ao array e colocando o tamanho
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));//data de modificacao
        $info["url"] = "http://localhost/DIR/".str_replace("\\", "/", $filename);//path
        //str_replace("oque vc quer trocar", "pelo q vc quer trocar", string)

        array_push($data, $info);//inserindo no array

    }else {
        echo "existe";
    }

}

echo json_encode($data);

?>