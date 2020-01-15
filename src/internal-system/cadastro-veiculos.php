<?php
require('../server-functions/autentica-login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="../../vendor/bootstrap-4/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Cadastro de Veículos</title>
    <link rel="shortcut icon" href="../../img/engrenagem.png" type="image/x-icon" />

    <style>
		body{font-family: 'Roboto', sans-serif;}
	</style>
</head>
<body>
    <form id="cadastro" name="cadastro" method="post" action="../server-functions/cadastro-exec.php"
        onsubmit="return validaCampo(); return false;" enctype="multipart/form-data">

        <div class="form-control">
            <div class="form-group">
                <label for="label"><i class="far fa-bookmark"></i><strong style="margin-left: 8px;">Cadastro de Veículos</strong></label>
            </div>
            <div class="form-group">
                <label for="label">Nome:</label>
                <input name="nome" placeholder="Marca e nome do veículo" class="campo-formulario form-control" type="text" id="nome" autocomplete="off" />
            </div>
            <div class="form-group">
                <label for="label">Descrição:</label>
                <input name="descricao" placeholder="Características importantes do veículo" class="campo-formulario form-control" type="text" id="descricao" autocomplete="off" />
            </div>
            <div class="form-group">
                <label for="label">Quilometragem:</label>
                <input name="km" placeholder="Quanto que o veiculo andou ao todo" class="campo-formulario form-control quilometro" id="km" autocomplete="off" />
            </div>
            <div class="form-group">
                <label for="label">Ano:</label>
                <td width="546"><input name="ano" placeholder="Ano de fabricação" class="campo-formulario form-control" type="number" id="ano" autocomplete="off" />
            </div>
            <div class="form-group">
                <label for="label">Tipo de Veiculo:</label>
                <select name="tipo" class="campo-formulario form-control" type="text" id="tipo">
                    <option>Carro</option>
                    <option>Caminhão</option>
                    <option>Moto</option>
                </select>
            </div>
            <div class="form-group">
                <label for="label">Valor:</label>
                <input name="valor" placeholder="R$" class="campo-formulario form-control dinheiro" type="text" id="valor" autocomplete="off" />
            </div>
            <div class="form-group">
                <label for="label">Imagens:</label>
                <input name="img[]" class="inputFile" type="file" alt="Submit" multiple="" required accept="image/*">
            </div>
            <div class="form-group">
                <input class="btn btn-outline-primary" name="cadastrar" type="submit" id="cadastrar" value="Cadastrar!" />
            </div>
        </div>
    </form>
    <!-- Scripts Obrigatórios -->
    <!-- Jquery JS -->
    <script src="../../vendor/jquery/3.4.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../vendor/bootstrap-4/bootstrap.min.js"></script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/04be2c50c3.js" crossorigin="anonymous"></script>
    <!-- Validação -->
    <script src="../../js/form-validacao.js"></script>
    <!-- Mascara para Input -->
    <script src="../../js/mask-number-min.js"></script>
    <script>
        $('.dinheiro').mask('#.##0,00', { reverse: true });
        $('.quilometro').mask('#.##0', { reverse: true });
    </script>
</body>
</html>