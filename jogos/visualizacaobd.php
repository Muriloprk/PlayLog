<?php
    require_once("./_conexao/conexao.php");

    try{
        $comandoSQL = "SELECT * FROM jogos ORDER BY id_jogo DESC";
        $dadosSelecionados = $conexao->query($comandoSQL);
        $dados = $dadosSelecionados->fetchALL();
        $totalRegistros = $dadosSelecionados->rowCount();

    }catch(PDOException $erro){
        echo("Entre em contato com o suporte!");
    }