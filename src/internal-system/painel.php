<?php
require('../server-functions/autentica-login.php');
header('Content-Type: text/html; charset=utf-8');
include("../server-functions/connect.php");

$carro = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM veiculos WHERE tipo = 'Carro'"));
$moto = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM veiculos WHERE tipo = 'Moto'"));
$caminhao = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM veiculos WHERE tipo = 'Caminhao'"));

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS -->
		<link href="../../vendor/bootstrap-4/bootstrap.min.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

		<!-- Menu -->
		<link rel="stylesheet" href="../../vendor/menu/css/demo.css">
    	<link rel="stylesheet" href="../../vendor/menu/css/pushy.css">

		<title>Painel dos Funcionários</title>
		<link rel="shortcut icon" href="../../img/engrenagem.png" type="image/x-icon" />

		<style>
			body{font-family: 'Roboto', sans-serif;}

			#chartdiv {
				width: 100%;
				height: 500px;
			}

			.invisivel{
  				display: none;
			}
		</style>
	</head>
	<body>
		<?php include("../modules/system-menu.php"); ?>

		<div id="chartdiv"></div>
		
		<div id="carros" class="invisivel"><?=$carro[0]?></div>
		<div id="motos" class="invisivel"><?=$moto[0]?></div>
		<div id="caminhoes" class="invisivel"><?=$caminhao[0]?></div>

		<!-- Scripts Obrigatórios -->
		<!-- Jquery JS -->
		<script src="../../vendor/jquery/3.4.1.min.js"></script>
		<!-- Bootstrap JS -->
        <script src="../../vendor/bootstrap-4/bootstrap.min.js"></script>
		<!-- JS do MENU -->
        <script src="../../vendor/menu/js/pushy.min.js"></script>
        <!-- FontAwesome JS -->
        <script src="https://kit.fontawesome.com/04be2c50c3.js" crossorigin="anonymous"></script>

		<!-- Gráfico (amcharts) -->
		<script src="https://www.amcharts.com/lib/4/core.js"></script>
		<script src="https://www.amcharts.com/lib/4/charts.js"></script>
		<script src="https://www.amcharts.com/lib/4/themes/dataviz.js"></script>
		<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

		<script>
			am4core.ready(function () {

				// Pegando informações
				let carros = document.querySelector("#carros").innerHTML;
				let motos = document.querySelector("#motos").innerHTML;
				let caminhoes = document.querySelector("#caminhoes").innerHTML;

				// iniciando Themes
				am4core.useTheme(am4themes_dataviz);
				am4core.useTheme(am4themes_animated);

				// Criando instancia do chart
				var chart = am4core.create("chartdiv", am4charts.PieChart);

				// Add informações
				chart.data = [{
					"country": "Carros",
					"litres": carros
				}, {
					"country": "Motos",
					"litres": motos
				}, {
					"country": "Caminhões",
					"litres": caminhoes
				}];

				// Set inner radius
				chart.innerRadius = am4core.percent(50);

				// Add e Configurando Series
				var pieSeries = chart.series.push(new am4charts.PieSeries());
				pieSeries.dataFields.value = "litres";
				pieSeries.dataFields.category = "country";
				pieSeries.slices.template.stroke = am4core.color("#fff");
				pieSeries.slices.template.strokeWidth = 2;
				pieSeries.slices.template.strokeOpacity = 1;

				// Animação Inicial
				pieSeries.hiddenState.properties.opacity = 1;
				pieSeries.hiddenState.properties.endAngle = -90;
				pieSeries.hiddenState.properties.startAngle = -90;

			});
		</script>
	</body>
</html>