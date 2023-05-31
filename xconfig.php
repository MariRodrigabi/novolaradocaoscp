//criando conexão com banco de dados//
<?php

    $dbHost='Localhost';
    $dbUsername='root';
    $dbPassword='';
    $dbName='bd_pi';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
?>