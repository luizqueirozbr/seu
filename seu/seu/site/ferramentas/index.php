<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">


<?php 

require 'Facebook/Facebook.php';

use Facebook\FacebookSession;
use Facebook\FacebookJavaScriptLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\GraphObject;

FacebookSession::serDefaultApplication('','');

?>

</head>

<body>
<br>
<br>
<br>
<br>
<p id="btn"><a href="http://seu.com">Conecte-se ao facebook</a>


</body>
</html>