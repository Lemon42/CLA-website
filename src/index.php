<?php
header('Content-Type: text/html; charset=utf-8');
include("server-functions/connect.php");
include("server-functions/get-dados.php");
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
		<link href="../css/style.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<title>CLA - Caminhões e Veículos</title>
		<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
	</head>
	<body>
		<!-- Conteúdo -->
		<div class="content">
			<!-- NavBar -->
			<nav class="navbar navbar-expand-lg">
				<i style="font-size: 30px; color: #fff; margin-right: 10px;" class="fas fa-car"></i>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
					aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação"
					style="border: #fff;">
					<div id="menu"><i id="menu" class="fas fa-bars"></i></div>
				</button>
				<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Início<span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Sobre Nós<span class="sr-only"></span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Veículos
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Seila</a>
								<a class="dropdown-item" href="#">Seila</a>
								<a class="dropdown-item" href="#">Seila</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- /NavBar -->
			
			<!-- Container -->
			<div class="container">
				<!-- BarraPesquisa -->
				<center>
					<div id="divBarraPesquisa" class="form-group mb-4">
						<form>
							<input id="barraPesquisa" type="text" class="form-control form-control-underlined border-danger"
								placeholder="Procure por um veículo" autocomplete="off">
						</form>
					</div>
				</center>
				<!-- /BarraPesquisa -->

				<!-- CardsVeículos -->
				<div class="row">
				<?php
					if($total > 0) {
						do {
				?>
				<div class="col-md-6 col-xl-4 mb-3 mb-md-4">
					<div class="card">
						<a href="car-details.php?id=<?php echo $linha['id'] ?>">
							<div class="card-body">
								<h5 class="card-title"><?=$linha['nome']?></h5>
						</a>
						<!-- Imagem -->
						<div id="carousel-<?=$linha['id']?>" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="carousel-inner">
						<?php
						$id = $linha['id'];
						$primeiraImg = True;
						$res = mysql_query("SELECT * FROM imagens WHERE id = '$id'");
						while($row = mysql_fetch_array($res)){
						
							if($primeiraImg == True)
							{
								echo '
									<div class="carousel-item active">
										<img class="card-img" src="data:image/jpeg;base64,'.base64_encode($row['image']).'">
									</div>
								';
								$primeiraImg = False;
							} else {
								echo '
									<div class="carousel-item">
										<img class="card-img" src="data:image/jpeg;base64,'.base64_encode($row['image']).'">
									</div>
								';
							}
							
						}
						?>
					</div>
				</a>
					<a class="carousel-control-prev" href="#carousel-<?=$linha['id']?>" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#carousel-<?=$linha['id']?>" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
					</div>
					<!-- Fim Imagem -->
					<a href="car-details.php?id=<?php echo $linha['id'] ?>">
							<p class="card-text"><?=$linha['descricao']?></p>
							<p class="card-text-secondary">Ano: <?=$linha['ano']?> - <?=$linha['km']?> Km</p>
							<p class="card-text-type"><?=$linha['tipo']?></p>
							<p class="card-text-value">R$ <?=$linha['valor']?></p>
						</div>
					</div>
					</a>
				</div>
				<?php
						}while($linha = mysql_fetch_assoc($dados));
					}
				?>
				</div>
				<!-- /CardsVeículos -->

			</div>
			<!-- /Container -->
		</div>
		<!-- Fim Conteúdo -->

		<footer id="rodape">
			<div class="footer-copyright text-center py-3" >© 2019 Copyright</div>
		</footer>

		<!-- Scripts Obrigatórios -->
		<!-- Jquery JS -->
		<script src="../vendor/jquery/3.4.1.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="../vendor/bootstrap-4/bootstrap.min.js"></script>
		<!-- FontAwesome JS -->
		<script src="https://kit.fontawesome.com/04be2c50c3.js" crossorigin="anonymous"></script>

		<script>
			$('.carousel').carousel({
  				interval: 2500
			})
		</script>
	</body>
</html>