<?php

include('bancodedados.php');

session_start();

$user_check = $_SESSION['login_user'];

$sess_sql = mysqli_query($banco, "select usuario_email from usuario where usuario_email = '$user_check'");
$Sedados = mysqli_query($banco, "select * from usuario where usuario_email = '$user_check'");

$row = mysqli_fetch_array($sess_sql, MYSQLI_ASSOC);
$rowD = mysqli_fetch_array($Sedados, MYSQLI_ASSOC);

$login_ssesion = $row['usuario_email'];
//////////////////////////////////////////////////

$usuarioNome = $rowD['usuario_nome'];
$usuarioEmail = $rowD['usuario_email'];
//////////////////////////////////////


if(!isset($_SESSION['login_user'])){
	header('location: /seu/site/erro.php?tipo=');
	
	//echo '<div id="403"><h1>Ops<h1>, Acesso negado</div>';
	
	
	}


