<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<?php
 include('../session.php');
# include('../bancodedados.php')


 ?>
<style type="text/css">
.title{
    cursor: alias;
    font-size: 12px;
    color:#4F393A;


}

.result{
font-size: 12px;
color: #424F72;

}
.result:hover{
  cursor: cell;
  font-size: 16px;
}

div {
        margin:2; /*Defina a separacao das colunas aqui*/
        padding:0;
    }
    .linha{
        padding:1;
        clear:both;
    }
    .coluna{
        height:25px;
        padding: 5px;
        border: 0px solid #D4D5ED;
        width:120;
        float:left;
    }
</style>


</head>

<body>

<div class=""><!-- div de box da tabela !-->
<!-- inicio linha de titulo-->
  <div class="linha"><!-- div de linha de titulo da tabela -->
<div class="coluna title"><!-- foto user -->
<span class="glyphicon glyphicon-picture"></span>
Foto
</div>
    <div class="coluna title"><!-- title do nome -->
<span class="glyphicon glyphicon-user"></span>
	Usuário

    </div>
    <div class="coluna title"><!-- email do usuario -->
	<span class="glyphicon glyphicon-send"></span>
E-mail
    </div>
    <div class="coluna title"><!-- Opcoes -->
 <span class="glyphicon glyphicon-edit"></span>
     </div>

     <!-- fim da linha de titulo-->
    <!-- crinado linhas de resultados -->
    <div class="linha"><!-- div de linha de titulo da tabela -->
  <div class="coluna result"><!-- foto user -->
  resultado
  </div>
      <div class="coluna result"><!-- title do nome -->
  resultado
      </div>
      <div class="coluna result"><!-- email do usuario -->
  resultado
      </div>
      <div class="coluna result"><!-- Opcoes -->
   resultado
      </div>


  </div>

</div>


</body>
</html>
