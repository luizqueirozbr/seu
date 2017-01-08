<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<style>
div {
    width: 100px;
    height: 100px;
    background-color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 40s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 40s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    from {background-color: red;}
    to {background-color: yellow;}
}

/* Standard syntax */
@keyframes example {
    from {background-color: red;}
    to {background-color: yellow;}
}
#erro_a {
	padding-left: 5%;
	padding-right: 10%;
	padding-bottom: 15%;
	margin-left: 5%;
	margin-right: 5%;
	position:absolute;
	
	
	}
#tipo_erro{
	padding-left: 15%;
	padding-right: 10%;
	padding-bottom: 0%;
	margin-left: -24%;
	margin-right: 0%;
	margin-top:20%;
	position:absolute;
	font-size:120px;
	
	}
	#tipo_erro:hover{
		transition-duration: 10s;
		transition-delay:200;
		color:#FF0004;
}
	
		
	#tipo_erro_des{
	padding-left: 15%;
	padding-right: 10%;
	padding-bottom: 0%;
	margin-left: -45%;
	margin-right: 0%;
	margin-top:13%;
	position:absolute;
	font-size:24px;
	
	
	}	
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">


</script>
<body>
<?php
$erro_tipo = $_GET['tipo']; 



?>
<center>
<div id="erro_a" class="alert-danger"><p class="alert">
<h1>Ops</h1>
Acesso negado</p>

</div> 
<img src="../media/queiroz.png" height="90">
<span id="tipo_erro" class="glyphicon glyphicon-remove"> </span> <span id="tipo_erro_des" class="active">
<?php switch($erro_tipo){
	case 1:
	echo 'usuario ou senha errados.';
	break;
	case 2:
	echo 'Não foi possivel se conectar ao banco de dados. avise o suporte.';
	break;
	default:
	echo 'sua sessão expirou, ou você não esta pronto para ver isso ainda.';
	} 
	?> </span>
</center>



</body>
</html>