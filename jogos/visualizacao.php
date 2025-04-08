<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualização</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <?php require_once("./_barra.php"); ?>
    <div class="container-visu">
        <?php
            require_once("./visualizacaobd.php");
            if($totalRegistros > 0){
                foreach($dados as $linha){
        ?>
            <div class="elemento-visu">
                <div class="info">
                    <img 
                                        src="./imagem/<?=$linha['foto_jogo'];?>" 
                                        alt="Imagem de Perfil" 
                                        width="100%"
                                        height="300px"
                                        class="img_visu"><br>
                    <h2><?=$linha["nome_jogo"];?></h2><br>
                    <p><?=$linha['genero_jogo'];?></p>
                    <p><?=$linha['data_jogo'];?></p>
                </div>
                <div class="btnAcoes">
                    <a class="btnEditar" href="./editar.php?id=<?=$linha["id_jogo"];?>">
                    ‎ Editar ‎ 
                    </a>
                    <a class="btnExcluir" href="./excluir.php?id=<?=$linha["id_jogo"];?>">
                    ‎ Excluir‎ ‎ 
                    </a>
                    
                </div>
            </div>
        <?php
                }
            }
            ?>
    </div>
</body>
</html>