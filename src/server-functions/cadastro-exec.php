<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
include("connect.php");

// Pegando os dados (basicos)
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$km = $_POST["km"];
$ano = $_POST["ano"];
$tipo = $_POST["tipo"];
$valor = $_POST["valor"];

//Gravando os dados
$query = "
    INSERT INTO `veiculos` ( `nome` , `descricao` , `km` , `ano` , `tipo` , `valor`)
    VALUES ('$nome', '$descricao', '$km', '$ano', '$tipo', '$valor')
";
mysql_query($query,$con);

// Pegando o ID que o veiculo vai ter
$ultimoId = mysql_insert_id();

// Imagem
$filename = $_FILES['img']['name'];
$file_tmp = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];
$filesize = $_FILES['img']['size'];
for($i=0; $i<=count($file_tmp); $i++){
	if(!empty($file_tmp[$i]))
	{
		$name = addslashes($filename[$i]);
		$temp = addslashes(file_get_contents($file_tmp[$i]));
		if(mysql_query("Insert into imagens(nome, image, id) values('$name','$temp', '$ultimoId')")){echo "imagem okay";echo "<br />";}
		else
		{
			echo "failed";
			echo "<br />";
		}
	}
}

// Adicionando informações extras
$combustivel = $_POST["combustivel"];
$cor = $_POST["cor"];
$ocupantes = $_POST["ocupantes"];
$licenciado = $_POST["licenciado"];

$query = "
    INSERT INTO `veiculos-info` ( `combustivel` , `cor` , `ocupantes` , `licenciado` , `id`)
    VALUES ('$combustivel', '$cor', '$ocupantes', '$licenciado', '$ultimoId ')
";
mysql_query($query,$con);


// Voltando para a Página de Cadastro
header('Location: ../internal-system/cadastro-veiculos.php');
exit();

?>
</body>
</html>