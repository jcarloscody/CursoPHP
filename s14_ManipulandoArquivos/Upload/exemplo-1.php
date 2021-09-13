<!--PARTE HTML-->

<form method="POST" enctype="multipart/form-data">
<!--enctype: permite que vc coloque o tipo de info que vc esta enviando, por padrao o formulario envia texto
mas agora iremos enviar dados por meio do formulario. entao com o multipart/form-data vai significar que
tudo que tiver dentro da tag form será enviado como dados binarios, então foge do padrao de string, nao é apenas
txt. isso é necessário para tratarmos de upload-->

    <input type="file" name="fileUpload">

    <button type="submit">Send</button>

</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //se for uma solicitacao post

        $file = $_FILES["fileUpload"];//recuperar o arquivo enviado. colocamos o name do meu imput
        /** para recuperar um formulario enviado via... 
         * get usamos... 
         *  $_GET -> 
         * 
         * post... para string
         *  $_POST
         * 
         * post... para arquivos
         *  $_FILES -> array superglobal, mas serve especificamente para tratar aquivos que foram enviados
         * do upload
         * 
         * 
         * explicacão: quando clicamos em enviar, nesse momebnto a linguagem do servidor(php, c#...) precisa ter uma pasta temporaria
         * no servidor, que servirá para nós transferir os pacotes do arquivo, pois o arquivo pode ser grande, e nao conseguiremos enviar
         * tudo de uma vez, entao será enviado de forma fracionaria e vai escrevendo no temporario, depois que enviou o arquivo estará a minha
         * disposicao para que possamos mover o arquivo do temporario para um local fisico final 
         * 
        */
        
        echo "<pre>";
        var_dump($file);
        echo "</pre>";
        
        if ($file["error"]) {//se der erro no upload
            //na chave erro

            throw new Exception("Error: ".$file["error"]);

        }

        $dirUploads = "uploads";//variavel que guarda o nome do diretorio que vai receber os arquivos

        if (!is_dir($dirUploads)) {//se nao existir este diretorio ele irá ser criado

            mkdir($dirUploads);

        }


        //FAZENDO O UPLOAD  move_uploaded_file(origem, destino)  -> o return dessa funao é boleana por isso o if
        if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {

            echo "Upload realizado com sucesso!";

        } else {

            throw new Exception("Não foi possível reaizar o upload.");

        }

    }

?>