    <!-- MENU -->
	<nav class="pushy pushy-left" data-focus="#first-link">
		<div class="pushy-content">
			<h1>Olá, <?php echo $_SESSION['usuario'];?></h1>
			<ul>
                <li class="pushy-link"><a href="painel.php"><i class="fas fa-home"></i> Painel</a></li>
				<li class="pushy-link"><a href="cadastro-veiculos.php"><i class="fas fa-wrench"></i> Cadastro de Veículos</a></li>
                <li class="pushy-link"><a href="exclusao-veiculos.php"><i class="fas fa-wrench"></i> Exclusão de Veículos</a></li>
                <li class="pushy-link"><a href="../index.php"><i class="fas fa-globe"></i> Site</a></li>
				<li class="pushy-link sair"><a href="../server-functions/logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
			</ul>
		</div>
	</nav>
	<!-- Voltar com um click -->
	<div class="site-overlay"></div>
	<button class="menu-btn fixed-bottom"><i class="fas fa-bars"></i></button>
	<!-- MENU FIM -->