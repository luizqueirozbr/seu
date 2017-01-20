<?php 

/*

	$servidor = "localhost";
	$user = "root";
	$senha = "";
	$banco = "seu";
	$con = mysqli_connect($servidor, $user, $senha, $banco);
	if(mysqli_connect_errno()){
	
	echo "<div class='alert-danger'>ops, ouve um erro na conecção com o <h1>banco de dados.</h1></div> " . mysqli_connect_error();
	
	
	}
	
	*/
	define('DB_SERVER','localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'seu');
	
	$banco = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	
	/*if(!mysqli_connect_errno){
		header('location: /seu/site/erro.php?tipo=2');
		
		}else{
			
			}
			*/ 