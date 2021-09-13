<?php

    /**
     * funcao baseada na biblioteca cURL
     * 
     * vai permitir que o sitema php converse com outros sistemas remotos.
     * 
     * cURL solucionou problemas para apis, antes tinhamos bibbliotecas escritas em todas as linguagens,
     * entao se houvesse mudança teria que dar suporte para cada uma dessas bibliotecas.
     * 
     * Com isso, mudou e diponibilizou uma rota API (restAPI), então bastando solicitar a um endereco
     * passando tais parametros  via get ou post ou delete... entao as comunidades passaram a criar as bibliotecas
     * e apenas consumir  essas rotas.
     * 
     * e a cURL resolveu isso pq não importa qual comunicacao vc faça, pode fazer via ftp, http, https... 
     * e os metodos continua os mesmos
     */
$cep = "55870000";//cep qq

//vamos consumir a url do viacep.com fornecido pelo ibbge free
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);//vamos passar para a biblioteca cURL

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//(variavel que colocamos a bbiblioteca, a constante que queremos nesse caso é envio e retorno, o nº indicativo aqui dizendo que vai e volta-false ou true)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//a aqui a constante vai indicar a verificacao, e tendo o 0 como false, indicando que nao precisa verificar

$response = curl_exec($ch);//vai executar, vai disparar o acesso

curl_close($ch);//fechando a conexao

$data = json_decode($response, true);//convertendo o json em array
/**o true indica que quero array
 * 
 * se false indica um objeto
 */

print_r($data);

?>