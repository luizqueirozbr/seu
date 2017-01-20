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
	#usertobarmais{
			background-color:#C2C6E7;
			position:absolute;
			border:4px outset #C2C6E7;
			border-radius:5px;
					}
#usertobarmaisClose{
	margin-top:2%;
			margin-right:15px;
			margin-left:55px;
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
    
    <div class="navbar-text"><div id="usertobar"><?php echo "Olá, " . $usuarioNome . " " ; ?>  </div>
    
    <div id="usertobarmais" style="display:none;"> <p id="usertobarmaisClose"> <span class="glyphicon glyphicon-eject"></span> </p>
    nome : <?php echo $usuarioNome; ?> </br>
    email: <?php echo $usuarioEmail; ?> </br>
    <a href="">editar</a>
	<a href="../logout.php">&nbsp; <span class="glyphicon  glyphicon-log-out" />Sair</a> </div>
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
