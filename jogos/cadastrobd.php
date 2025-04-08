<?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        
        $pasta = "./imagem/";
        if(!empty($_FILES["foto"]["name"])){
            
            
            $nomeOriginal = str_replace(" ","_",$_FILES["foto"]["name"]);

            $token = md5(uniqid(rand(), true));

            $foto = $token.$nomeOriginal;

            $fotoUpload = $pasta.$foto;

            if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoUpload)) {
                echo "Erro ao fazer upload da imagem.";
                exit();
            }

        }else{
            $foto = "";
        }

        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $genero = filter_input(INPUT_POST, "genero", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $data = filter_input(INPUT_POST, "data", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        

        try {
            require_once("./_conexao/conexao.php");

            $comandoSQL = $conexao->prepare("
            
            INSERT INTO jogos (
                foto_jogo,
                nome_jogo,
                genero_jogo,
                data_jogo)
            VALUES (
                :foto,
                :nome,
                :genero,
                :data
            )            
        ");

        $comandoSQL->execute(array(
            ":foto" => $foto,
            ":nome" => $nome,
            ":genero" => $genero,
            ":data" => $data
        ));
        if($comandoSQL->rowCount() > 0){
            header("location:./visualizacao.php");
            exit();
        }
        
        } catch (PDOException $erro) {
            echo("Erro ao inserir dados: " . $erro->getMessage());
        }

    }else{
        echo("Entre em contato com o suporte.");
    }