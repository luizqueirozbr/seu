<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SEU</title>
<link href="/seu/site/css/bootstrap.css" rel="stylesheet">

<?php 

include ("site/bancodedados.php"); 
session_start(); # inicio da sessão

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$usuario = mysqli_real_escape_string($banco, $_POST['email']);
	$senha = mysqli_real_escape_string($banco, $_POST['password']);
	
	$sql = "select usuario_codigo from usuario where usuario_email= '$usuario' and usuario_senha = '$senha'";
	$result = mysqli_query($banco, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$active = $row['usuario_codigo'];
	
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['login_user'] = $usuario;
		header("location: site/index.php");
		
		}else{
		 # se os dados não forem certos exibir isso
		header("location: site/erro.php?tipo=1");
		}
	
	}


?>

<link href="site/css/bootstrap.css" rel="stylesheet" type="text/css">

<style>
body{
	background-color:#141822;
	}
#login{
	position:absolute;
	align-content:center;
	border:groove;
	margin-left:25%;
	margin-top:25%;
	}
	#login:hover{
		
	transition-duration: 2s;
	transition-delay: 10;
	border-color:#202445 transparent;
	background-color:#141822;
	color:#618B30;

	}


</style>
</head>

<body>

<div id="login" class="alert-info">



  <form id="Login" name="login" method="post" action="">
    <table width="433" border="0" style="align-content:center">
      <tbody>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="67" rowspan="3"><center><img src="media/queiroz.png" class="img-rounded" height="60px" width="70px"></center></td>
          <td width="173"><label for="email">Email:&nbsp;	&nbsp; &nbsp;   &nbsp;</label>
          <input type="email" name="email" id="email"></td>
        </tr>
        <tr>
          <td><label for="password">Password:</label>
          <input type="password" name="password" id="password"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" id="submit" value="Enviar"></td>
        </tr>
        
        
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</body>
</html>