<?php
    //Lendo o arquivo afd e colocando ele na variável arquivo
    $arquivo = file_get_contents('afd.json');

    // Não precisa editar o arquivo, ele ja le o json direto

    //Decodifica o formato json e retorna um objeto
    $informacao = json_decode($arquivo);

    echo 'Tipo: ' . $informacao->type . '<br>';    
    echo 'Alfabeto: ';
        foreach($informacao->alphabet as $valor){
            echo $valor;
            echo ' ';
        }
        echo '<br>';
    echo 'Status: ';
        foreach($informacao->states as $valor){
            echo $valor;
            echo ' ';
        }
        echo '<br>'; 

    // As trasições são listas de listas, então precisamos de 2 foreach
    echo 'Transicoes: <br>';
    // Itera sobre cada estado de origem, as trasições que saem dele
    foreach($informacao->transitions as $estado_origem => $transicoes){
        // Itera sobre cada trasicao, sendo a chave o simbolo e o valor o estado de destino
        foreach($transicoes as $simbolo => $estado_destino ){
            echo $estado_origem;
            echo ':';
            echo $simbolo;
            echo '->';
            echo $estado_destino;
            echo '<br>';
        }
    }
    echo 'Final: ';
    foreach($informacao->final as $valor){
        echo $valor;
        echo ' ';
    }


    function automato ($afd, $palavra){
        $estadoAtual = afd[initial];

        return $testeParaNaoDarErro;
    }





?>