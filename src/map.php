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
			<?php include("modules/nav-bar.php"); ?>
			
			<!-- Container -->
			<div class="container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.0681230338246!2d-47.86419988501653!3d-15.800361577311397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b477a541a03%3A0x737372f4cb2367fa!2sPra%C3%A7a%20dos%20Tr%C3%AAs%20Poderes%20-%20Bras%C3%ADlia%2C%20DF%2C%2070297-400!5e0!3m2!1spt-BR!2sbr!4v1579616638833!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
			</div>
			<!-- /Container -->
		</div>
		<!-- Fim Conteúdo -->

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