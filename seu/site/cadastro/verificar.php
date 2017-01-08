<?php
	$servidor = "localhost";
	$user = "root";
	$senha = "";
	$banco = "seu";
	$con = mysqli_connect($servidor, $user, $senha, $banco);
	if(mysqli_connect_errno()){
	
	echo "<div class='alert-danger'>ops, ouve um erro na conecção com o <h1>banco de dados.</h1></div> " . mysqli_connect_error();
	
	
	}
	
	$us = $_POST['email'];
	$pw = $_POST['password'];
	
	
	
	echo $row[3];
	if($us == "abc@abc.com" && $pw == "123"){
		
		
		echo "suss"; 
		
		}else{
			
			" not ";
			}
	
	
	
	
?>	