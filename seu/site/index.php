<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap - Prebuilt Layout</title>
<?php include("session.php");

//echo  "olá " . $login_ssesion;

?>
<!-- Bootstrap -->
<link href="/seu/site/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#menu a").click(function(e){
		e.preventDefault();
		var href = $( this ).attr('href');
		$("#conteudo_center").load(href);
		});// fim menu

		// inicio olá email@ola.com
		$("#usertobar").click(function(){
			$("#usertobarmais").show("slow");
			});
			$("#usertobarmaisClose").click(function(){
				$("#usertobarmais").hide("slow");
				});

});



</script>
<style>
body{
	background-color:#EFE9E9;
	}
	#conteudo_center{

	background-color:#EFE9E9;
	padding: 10%;


	}
	#usertobar{
		cursor:alias;
		}
	#usertobarmais{
			background-color:#EFE9E9;
			position:absolute;
			border:2px outset #EFE9E9;
			border-radius:5px;
					}
#usertobarmaisClose{
	margin-top:2%;
	right:0px;
	left:160px;
	position:relative;
	animation:ease-out;
	animation-direction:normal;
	}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Queiroz</a>
    </div>
    <ul class="nav navbar-nav">
      <li id="menu" class="active"><a href="#box_home">Inicio</a></li>
      <li id="menu"><a href="../site/cadastro/index.php#frm_ca"> <span class="glyphicon glyphicon-user"> Usuarios</a></li>
      <li id="menu"><a href="../site/ferramentas/"><span class="glyphicon glyphicon-console"> Ferramentas</a></li>
      <li><a href="#"></a></li>
      <li></li>
    </ul>

    <div class="navbar-text"><div id="usertobar"> <span class=" glyphicon glyphicon-plus"></span><?php echo "Olá, " . $usuarioNome . " " ; ?>  </div>

    <div id="usertobarmais" style="display:none;"> <p id="usertobarmaisClose"> <span class="glyphicon glyphicon-eject"></span> </p>
    <center><img src="../media/Hacker-128.png"  class="img-circle img-responsive"></img></center>
    <strong> Nome: </strong><?php echo $usuarioNome; ?> </br>
    <strong> Nivel de acesso: </strong> 0 </br>
     <strong> Exp: </strong> 0 pts </br>
    <strong> E-mail: </strong> <?php echo $usuarioEmail; ?> </br>
    <a href="">Editar Informações do perfil </a> </br>
	<center><a href="../logout.php">&nbsp; <span class="glyphicon  glyphicon-log-out" />Sair</a> </div></center>
    </div>



  </div>
</nav>

<!--div com conteudos --!-->
<div id="conteudo_center">
<div id="box_home"></div>
<!--
aprender e aperfeiçoar expressoes regolares;
 $url = file_get_contents('https://www.bcb.gov.br');
$conteudo = array();
$pattern = '/[0,000-9,999]{1,}/i';
preg_match_all($pattern, $url, $conteudo);
print_r($conteudo);
$exibi = $conteudo[0][1];
echo "================= </br>" . var_dump($exibi);
?>
-->
</div>


</body>
</html>
