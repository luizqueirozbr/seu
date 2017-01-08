<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>[queiroz]</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<?php include("../session.php"); ?>

<style>

#btn_ca_ver{
	padding-top: 20px;
	padding-bottom: 20px;
padding-left: 50px;
	padding-right: 50px;
	position: fixed;
	left: 10%;
	top: 40%;	
	border-radius: 10px;
	font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
	text-align:left;
	}
	
	#btn_ca_novo{
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 50px;
	padding-right: 50px;
	position: fixed;
	left: 10%;
	top: 50%;
	border-radius: 10px;	
	font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
	text-align:left;
	}
	#btn_ca_busca{
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 50px;
	padding-right: 50px;
	position: fixed;
	left: 10%;
	top: 60%;
	border-radius: 10px;
	font-family:Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", sans-serif;
	text-align:left;
	}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$("#btn_ca_novo").click(function(){
		$("#frm_ca").show('slow');
		$("button").hide();
		$("#env_cadastro").show();
		});
	
	});


</script>

</head>

<body>
<div id="menu_usuarios">

<button id="btn_ca_ver" type="button"  class="btn btn-default"> <span class="glyphicon glyphicon-book"> VER USUÁRIOS JÁ CADASTRADOS </button>
<button id="btn_ca_novo" type="button" class="btn btn-default" ><span class="glyphicon glyphicon-user"> ADICIONAR NOVO USUÁRIO</button>
<button id="btn_ca_busca" type="button" class="btn btn-default" > <span class="glyphicon glyphicon-search"> BUSCAR USUÁRIO</button>

</div>


<div id="frm_ca" style="display: none;">
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Meu nome ">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="senha" placeholder="Password">
    </div>
  
    <button type="submit" id="env_cadastro" class="btn btn-default"><span class="glyphicon glyphicon-check"> Cadastrar </button>
</form>
</div>
</body>
</html>