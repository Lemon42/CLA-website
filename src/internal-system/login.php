<?php
session_start();
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
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
						<div class="card-body">
							<h5 class="card-title text-center">Sistema Interno</h5>
							
							<!-- Mensagem de Erro -->
							<?php
							if(isset($_SESSION['nao_autenticado'])):
							?>
							<div class="alert alert-danger">
								<h5><i class="fas fa-lock"></i> Usuário ou senha inválidos.</h5>
							</div>
							<?php
							endif;
							unset($_SESSION['nao_autenticado']);
							?>
							<!-- Fim Mensagem de Erro -->

							<form class="form-signin" action="../server-functions/login-exec.php" method="POST">
								<div class="form-label-group" style="margin-bottom: 8px;">
									<input name="usuario" name="text" class="form-control" placeholder="Digite seu login" autocomplete="off" required autofocus>
									<label for="inputEmail">Login</label>
								</div>
								<div class="form-label-group" style="margin-bottom: 8px;">
									<input name="senha" type="password" class="form-control" placeholder="Digite sua senha" required>
									<label for="inputPassword">Senha</label>
								</div>
								<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
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