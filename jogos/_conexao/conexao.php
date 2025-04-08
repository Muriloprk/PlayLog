<?php
    $dns = "mysql:host=localhost;dbname=cadastro_jogos;charset=utf8";
    $user = "root";
    $pass = "";

    try {
        $conexao = new PDO($dns, $user, $pass);        
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }