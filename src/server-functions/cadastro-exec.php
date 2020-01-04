<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
include("connect.php");

$res = mysql_query("SELECT * FROM multiple");

// Pegando os dados
$nome = $_POST ["nome"];
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

// Imagem
$ultimoId = mysql_insert_id();
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

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>
</body>
</html>