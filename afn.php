<?php

    function automatos ($info/*$informacao*/, $fita/*$palavra*/){
        $estadosAtuais = $info->initials;
        //Aqui
        //$simbol = get_object_vars($)


        //Ate aqui

        //echo $estadoAtual;
        $transitions = get_object_vars($info->transitions);
        //var_dump($transitions[$estadoAtual]);
        //var_dump($fita);
        foreach ($fita as $simbolo) {
            $novosEstadosAtuais = array();
            foreach ($estadosAtuais as $estadoAtual) {
                $transEstado = get_object_vars($transitions[$estadoAtual]);
                if (array_key_exists($simbolo, $transEstado)){
                    //echo $transEstado;
                    $novosEstadosAtuais = array_merge($novosEstadosAtuais, $transEstado[$simbolo]);
                    //echo $estadoAtual;
                }
            }
            //echo $simbolo;
            if (empty($novosEstadosAtuais)){
                return 'no';
            }
            //var_dump($estadosAtuais);
            $estadosAtuais = $novosEstadosAtuais;
        }
            //var_dump($info->final);
            

            if (empty(array_intersect($estadosAtuais, $info->final))){
                return "no";
            }
            else{
                return "yes";
            }
    }
    

    function le_arquivo_afn($afn_file, $words_file){
        //Lendo o arquivo afd e colocando ele na variável arquivo
        $arquivo = file_get_contents($afn_file);
        // Não precisa editar o arquivo, ele ja le o json direto
        //Decodifica o formato json e retorna um objeto
        $informacao = json_decode($arquivo);
        /*echo 'Tipo: ' . $informacao->type . '<br>';    
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
        // As trasições são listas de listas de listas, então precisamos de 3 foreach
        echo 'Transicoes: <br>';
        // Itera sobre cada estado de origem, as trasições que saem dele
        foreach($informacao->transitions as $estado_origem => $transicoes){
            // Itera sobre cada trasicao, sendo a chave o simbolo e o valor o estado de destino
            foreach($transicoes as $simbolo => $array_estados ){
                
                foreach ($array_estados as $estado_destino) {
                    echo $estado_origem;
                    echo ':';
                    echo $simbolo;
                    echo '->';
                    echo $estado_destino;
                    echo '<br>';
                }
            }
        }*/
        //echo 'Final: ';
        //foreach($informacao->final as $valor){
            //echo $valor;
            //echo ' ';
        //}
        //echo '<br><br>';
        //-----------------------------------------------------------------------------
        //Leondo o arquivo afnd-palavras
        //echo 'Palavras:<br>';
        $arquivoPalavras = fopen($words_file,'r');
        //Lendo o arquivo
        while(!feof($arquivoPalavras)){
            $linha = fgets($arquivoPalavras,1024);
            //echo $linha . '<br>';
            $linha = trim($linha);
            $palavra = str_split($linha);
            echo automatos($informacao, $palavra).PHP_EOL;
            
            //foreach ($palavra as $simbolo) {
              //  echo $simbolo;
                //echo ' ';
           // }
            //echo '<br>';

            //echo automato($informacao, $palavra); //Linha correta para invocar o autômato

        }
        fclose($arquivoPalavras);

    }
?>