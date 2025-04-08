<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        
        try {
            require_once("./_conexao/conexao.php");

            $comandoSQL = $conexao->prepare("

                DELETE FROM jogos WHERE id_jogo = :id
            ");

            $comandoSQL->execute(array(
                ":id"       => $id
            ));

            if($comandoSQL->rowCount() > 0){
                header("location:./visualizacao.php");
                exit();
            }
            else{
                echo "Erro na exclusão.";
            }

        } catch (PDOException $erro) {
            echo("Entre em contato com o suporte! SQL");
            
            // echo "<pre>";

            //     echo $comandoSQL->debugDumpParams();

            // echo "</pre>";
        }

    }else{
        echo("Entre em contato com o suporte!");
    }
    