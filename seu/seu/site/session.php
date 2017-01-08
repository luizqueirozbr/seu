<?php

include('seu/class/bancodedados.php');

session_start();

$user_check = $_SESSION['login_user'];

$sess_sql = "select usuario_email from usuario where usuario_email = '$user_check'";

$row = mysqli_fetch_array($sess_sql, MYSQLI_ASSOC);

$login_ssesion = $row['usuario_email'];

if(!isset($_SESSION['login_user'])){
	header('location: erro.php');
	
	}


