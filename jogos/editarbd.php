<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id       = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $nome     = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $genero = filter_input(INPUT_POST, "genero", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $data  = filter_input(INPUT_POST, "data", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $foto_atual = filter_input(INPUT_POST, "foto", FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
     

        $pasta = "./imagem/";
        
        if(!empty($_FILES["foto"]["name"])){

            $nomeOriginal = str_replace(" ","_",$_FILES["foto"]["name"]);

            $token = md5(uniqid(rand(), true));

            $foto = $token.$nomeOriginal;

            $fotoUpload = $pasta.$foto;

        }else{
            $foto = $foto_atual;
        }

        try {
            require_once("./_conexao/conexao.php");

                $comandoSQL = $conexao->prepare("

                    UPDATE jogos SET 
                        foto_jogo = :foto,
                        nome_jogo = :nome,
                        genero_jogo = :genero,
                        data_jogo = :data 
                    WHERE id_jogo = :id
                ");

                $comandoSQL->execute(array(
                    ":foto"          => $foto,
                    ":nome"          => $nome,
                    ":genero"        => $genero,
                    ":data"          => $data,
                    ":id"            => $id
                ));
            
            if($comandoSQL->rowCount() > 0){
                //echo "Alterado com sucesso!";
                if(!empty($_FILES["foto"]["name"])){
                    move_uploaded_file($_FILES["foto"]["tmp_name"],$fotoUpload);
                }
                header("location:./visualizacao.php");
                exit();
            }
            else{
                echo "Nada foi modificado.";
            }

            
        } catch (PDOException $erro) {
            echo("Entre em contato com o suporte! SQL");
        }

    }else{
        echo("Entre em contato com o suporte!");
    }
    