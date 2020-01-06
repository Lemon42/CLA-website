<?php
header('Content-Type: text/html; charset=utf-8');
include("../server-functions/connect.php");
include("../server-functions/get-dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="../../vendor/bootstrap-4/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/exclusao.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Exclusão de Veículos</title>
    <link rel="shortcut icon" href="../../img/engrenagem.png" type="image/x-icon" />
</head>
<body> 
    <table id="tabala-exclusao" class="table table-image">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Imagem</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($total > 0) {
                    do{
            ?>
            <tr>
                <th scope="row"><?=$linha['id']?></th>
                <td>
                <!-- Imagem -->
                <?php
                        $id = $linha['id'];
                        $res = mysql_query("SELECT * FROM imagens WHERE id = '$id' LIMIT 1");
                        while($row = mysql_fetch_array($res)){

                            echo '<img class="img-fluid img-thumbnail" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" />';
                        }
                ?>
                <!-- Fim Imagem -->
                </td>
                <td><?=$linha['nome']?></td>
                <td><?=$linha['descricao']?></td>
                <td>
                    <a href="../server-functions/exclusao-exec.php?id=<?php echo $linha['id'] ?>"
                     onclick="return confirm('Você realmente deseja deletar esse veículo?\n(Essa ação é permanente)')" >
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </a>
                </td>
            </tr>
            <?php
                    }while($linha = mysql_fetch_assoc($dados));
                }
            ?>
        </tbody>
    </table>

    <!-- Scripts Obrigatórios -->
    <script src="../../js/tela-confirmacao.js"></script>
    <!-- Jquery JS -->
    <script src="../../vendor/jquery/3.4.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../vendor/bootstrap-4/bootstrap.min.js"></script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/04be2c50c3.js" crossorigin="anonymous"></script>
</body>
</html>