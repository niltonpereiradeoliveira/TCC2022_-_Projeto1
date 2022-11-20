<?php

    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "sorteio_natal_2022";

    $connect = new mysqli($dbhost, $dbusername, $dbpassword,$dbname);

    //TESTE DE CONEXÃO COM O BD.

     if($connect->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso!";
    }
?>