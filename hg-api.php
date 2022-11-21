<?php

//classe que pega as informações da url 
class HG_API
{
    private $key = null; // atributo privado 

    // recebe a chave que ta no config e inicia a classe com esta 
    function __construct($key = null)
    {
        if (!empty($key))
            $this->key = $key;
    }

    // pega o conteudo da url e devolve em json
    function request($endpoint = "")
    { //parte da url 
        $uri = 'https://api.hgbrasil.com/' . $endpoint . '?format=json-cors&key=' . $this->key . '&format=debug;';
        $response = @file_get_contents($uri); // ler o conteúdo de um arquivo e retornar em uma string
        return json_decode($response, true);
    }

    function moeda_quotation($moeda)
    {

        $data = $this->request('finance/quotations');
        return $data['results']['currencies'][$moeda];
    }
}
?>