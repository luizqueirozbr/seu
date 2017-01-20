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
$(document).ready(function() {
    $("#btn_ca_ver a").click(function(e){
		e.preventDefault();
		var href = $( this ).attr('href');
		$("#frm_exiber_ca").load(href);
			$("#frm_exiber_ca").show();
				$("#btn_ca_novo").hide();
			$("#btn_ca_busca").hide();
			$("#btn_ca_ver").hide();
		});// fim load pag cadastrados

	$("#btn_ca_novo").click(function(){
		$("#frm_ca").show('slow');
		$("#btn_ca_novo").hide();
		$("#btn_ca_busca").hide();
		$("#btn_ca_ver").hide();
		$("#env_cadastro").show();
		});

		$("#btn_ca_busca").click(function(){
			$("#btn_ca_busca").hide();
			$("#btn_ca_novo").hide();
			$("#btn_ca_ver").hide();
			$("#frm_busca").show("slow");
			});

	});


</script>

</head>
<div id="frm_exiber_ca" style="display:none;"></div>
<div id="frm_busca" style="display:none;">
<form action="" method="get">

Busca : <input type="text" name="bucasus">

<input type="button" value=" buscar ">

</form>



</div>

<body>
<div id="menu_usuarios">

<div id="btn_ca_ver" type="button"  class="btn btn-default"> <span class="glyphicon glyphicon-book"> <a href="cadastro/cadastrados.php">VER USUÁRIOS JÁ CADASTRADOS </a></div>
<div id="btn_ca_novo" type="button" class="btn btn-default" ><span class="glyphicon glyphicon-user"> ADICIONAR NOVO USUÁRIO</div>
<div id="btn_ca_busca" type="button" class="btn btn-default" > <span class="glyphicon glyphicon-search"> BUSCAR USUÁRIO</div>

</div>


<div id="frm_ca" style="display: none;">
<form>
    <div class="form-group">
        <label for="nomeinput">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Meu nome ">
    </div>
    <div class="form-group">
        <label for="emailimput">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="passowrdinput">Password</label>
        <input type="password" class="form-control" id="senha" placeholder="Password">
    </div>
  	<div	class="form-group">
			<label for="imginput">Imagem de perfil:  </label>
			<input type="file" name="arquivo" />
			<input type="submit" name="carregarfoto" value="enviar">
		</div>
    <button type="submit" id="env_cadastro" class="btn btn-default"><span class="glyphicon glyphicon-check"> Cadastrar </button>
</form>
</div>
</body>
</html>
