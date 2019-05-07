<?php
    include('afn.php');
    include('afd.php');

    if ( $argv[1] == '2'){
        le_arquivo_afn($argv[2], $argv[3]);
    }
    if ($argv[1] == '1'){
        le_arquivo_afd($argv[2], $argv[3]);
    }

    //C:\wamp64\www\claudio>\wamp64\bin\php\php7.3.1\php index.php 2 afn.json palavras.txt

?>