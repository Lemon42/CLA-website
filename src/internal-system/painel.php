<?php
require('../server-functions/autentica-login.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS -->
		<link href="../../vendor/bootstrap-4/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/login-style.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<title>Login Funcionários</title>
		<link rel="shortcut icon" href="../../img/engrenagem.png" type="image/x-icon" />

		<style>
			body{font-family: 'Roboto', sans-serif;}
		</style>
	</head>
	<body>
		<div class="container">
            <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
            <h2><a href="../server-functions/logout.php">Sair</a></h2>
		</div>

		<!-- Scripts Obrigatórios -->
		<!-- Jquery JS -->
		<script src="../../vendor/jquery/3.4.1.min.js"></script>
		<!-- Bootstrap JS -->
        <script src="../../vendor/bootstrap-4/bootstrap.min.js"></script>
        <!-- FontAwesome JS -->
        <script src="https://kit.fontawesome.com/04be2c50c3.js" crossorigin="anonymous"></script>
	</body>
</html>