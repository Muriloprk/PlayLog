<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayLog</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <?php require_once("./_barra.php"); ?>
    <?php require_once("./bdview.php"); ?>
    <div class="container">
        <h1><b>Excluir</b></h1><br>

        <form action="excluirbd.php" method="post" enctype="multipart/form-data">
            <div class="cad">
                <input type="hidden" name="id" value="<?=$id;?>">
                <div class="elemento">
                    <label for="foto">Imagem:</label>
                    <input type="hidden" name="foto" id="foto" value="<?=$retorno['foto_jogo'];?>">
                    <div class="preview-container">
                        <input type="file" name="foto" id="foto" accept="image/*" onchange="previewImage(event)"  disabled>
                        <img src="./imagem/<?=$retorno['foto_jogo'];?>" id="preview" alt="Pré-visualização da Imagem" width="150px">
                    </div>
                </div>
                <div class="elemento">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?= $retorno['nome_jogo'];?>" disabled>
                </div>
                <div class="elemento">
                    <label for="genero">Gênero:</label>
                    <input type="text" name="genero" id="genero" value="<?= $retorno['genero_jogo'];?>" disabled>
                </div>
                <div class="elemento">
                    <label for="data">Data de Lançamento:</label>
                    <input type="date" id="data" name="data" min="1958-10-18" value="<?= $retorno['data_jogo'];?>" disabled/>
                </div>
                <div class="elemento">
                    <div class="botoesCad">
                        <a href="./visualizacao.php"><input type="button" value="Voltar"></a>
                        <button type="submit"><b>Excluir</b></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
