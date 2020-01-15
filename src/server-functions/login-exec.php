<?php
session_start();
include("../server-functions/connect.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../internal-system/login.php');
	exit();
}

$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select usuario from funcionario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../internal-system/painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../internal-system/login.php');
	exit();
}