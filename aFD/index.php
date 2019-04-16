<?php
    //Lendo o arquivo afd e colocando ele na variável arquivo
    $arquivo = file_get_contents('afd.json');

    //Decodifica o formato json e retorna um objeto
    $json = json_decode($arquivo);

    var_dump($json);

    //Loop percorrendo o objeto e carregando as variáveis
    foreach($json->afd as $informacao){
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
        echo 'Inicio: ' . $informacao->initial . '<br>';
        echo 'Transicoes: ' . $informacao->transitions . '<br>';// 3 arrey, 1 pegando o primeiro nome, 2 pegando o estado e 3 pegando a produção
        echo 'Final: ';
            foreach($informacao->final as $valor){
                echo $valor;
                echo ' ';
            }
    }
    //endforeach;



    function automato ($afd, $palavra){
        $estadoAtual = afd[initial];

        return $testeParaNaoDarErro;
    }





?>