<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
include("connect.php");

$id = $_GET["id"];
$idImagem = $id;

// Deletando Veiculo
$query = "
    DELETE FROM veiculos WHERE id = '$id'  
";
mysql_query($query,$con);

// Deletando Imagem do Veiculo
$query = "
    DELETE FROM imagens WHERE  id = '$idImagem'
";
mysql_query($query,$con);

?>
</body>
</html>