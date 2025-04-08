<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <?php require_once("./_barra.php"); ?>
    <div class="container">
        <h1><b>CADASTRO</b></h1><br>

        <form action="cadastrobd.php" method="post" enctype="multipart/form-data">
            <div class="cad">
                <div class="elemento">
                    <label for="foto">Imagem:</label>
                    <div class="preview-container">
                        <input type="file" name="foto" id="foto" accept="image/*" onchange="previewImage(event)">
                        <img id="preview" class="preview-img" alt="Pré-visualização da Imagem" width="150px">
                    </div>
                </div>
                <div class="elemento">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="elemento">
                    <label for="genero">Gênero:</label>
                    <input type="text" name="genero" id="genero">
                </div>
                <div class="elemento">
                    <label for="data">Data de Lançamento:</label>
                    <input type="date" id="data" name="data" min="1958-10-18" />
                </div>
                <div class="elemento">
                    <div class="botoesCad">
                        <button type="reset" id="resetar"><b>Apagar</b></button>
                        <button type="submit"><b>Cadastrar</b></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('preview');
                output.src = dataURL;
                output.style.display = 'block';
           };
           reader.readAsDataURL(input.files[0]);
        }

        document.getElementById('resetar').addEventListener('click', function() {
        // Limpa a pré-visualização da imagem
        document.getElementById('preview').src = '';
        document.getElementById('preview').style.display = 'none';
    });
    </script>
</body>
</html>
