<?php
include("server-functions/connect.php");

if(!isset($_GET["id"])) {
	header('Location: index.php');
	exit();
} else {
	$id = $_GET["id"];

	if($id == "") {
		header('Location: index.php');
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Google -->
		<meta name="description" content="Site com catálogo para compra de veículos">
		<meta name="author" content="">

		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS -->
		<link href="../vendor/bootstrap-4/bootstrap.min.css" rel="stylesheet">
		<link href="../css/default.css" rel="stylesheet">
		<link href="../css/car-details.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<title>CLA - Caminhões e Veículos</title>
		<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
	</head>
	<body>

		<?php include("modules/nav-bar.php"); ?>
		
		<!-- Consulta -->
		<?php
		$query = sprintf("SELECT * FROM veiculos WHERE id = '$id'");
		$dados = mysql_query($query, $con) or die(mysql_error());
		$linha = mysql_fetch_assoc($dados);
		?>
		<!-- Fim Consulta -->

		<!-- Conteúdo -->
		<div class="content">
			<!-- Container -->
			<div class="container">
				<!--Informações topo-->
				<div class="row">
					<div class="col-sm">
						<a class="title-car"><?=$linha['nome']?></a><br>
						<a class="subt-car"><?=$linha['descricao']?></a>
					</div>
					<div class="col-sm">
						<a class="valor-car">R$ <?=$linha['valor']?></a>
					</div>
				</div>

				<!-- Imagem -->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="border: solid 2px;">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<?php
						$primeiraImg = True;
						$busc = "SELECT * FROM imagens WHERE id = '$id'";
						$res = mysql_query($busc);
						$result = mysqli_query($mysqli, $busc);
						$qttImg = mysqli_num_rows($result);
						
						for($i = 1; $i <= ($qttImg - 1); $i++){
						?>
						<li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>"></li>
						<?php
						}
						?>
					</ol>
					<div class="carousel-inner">
					<?php
					while($row = mysql_fetch_array($res)){
					
						if($primeiraImg == True)
						{
							echo '
								<div class="carousel-item active">
									<img class="d-block w-100" src="data:image/jpeg;base64,'.base64_encode($row['image']).'">
								</div>
							';
							$primeiraImg = False;
						} else {
							echo '
								<div class="carousel-item">
									<img class="d-block w-100" src="data:image/jpeg;base64,'.base64_encode($row['image']).'">
								</div>
							';
						}
					}
					?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<i class="fas fa-arrow-left"></i>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<i class="fas fa-arrow-right"></i>
					</a>
				</div>
				<br>
				<!-- Fim Imagem -->

				<!-- Description -->
				<a class="desc-title">Informações</a>
				<hr class="hr-maior">
				<div class="row">
					<div class="col">
						<a class="desc-item">Ano:</a>
						<a class="desc-item-2"><?=$linha['ano']?></a>
					</div>
					<div class="col">
						<a class="desc-item">Quilometragem:</a>
						<a class="desc-item-2"><?=$linha['km']?></a>
					</div>
					<div class="col">
						<a class="desc-item">Configuração</a>
						<a class="desc-item-2">Hatch</a>
					</div>
				</div>
				<hr class="hr-menor">
				<div class="row">
					<div class="col">
						<a class="desc-item">Porte:</a>
						<a class="desc-item-2">Médio</a>
					</div>
					<div class="col">
						<a class="desc-item">Ocupantes:</a>
						<a class="desc-item-2">5 </a>
					</div>
					<div class="col">
						<a class="desc-item">Portas:</a>
						<a class="desc-item_2">4</a>
					</div>
				</div>
				<br>
			</div>
		</div>
		<!-- Fim conteúdo -->

		<?php include("modules/footer.php") ?>

		<!-- Scripts Obrigatórios -->
		<!-- Jquery JS -->
		<script src="../vendor/jquery/3.4.1.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="../vendor/bootstrap-4/bootstrap.min.js"></script>
		<!-- FontAwesome JS -->
		<script src="https://kit.fontawesome.com/04be2c50c3.js" crossorigin="anonymous"></script>
		
	</body>
</html>
