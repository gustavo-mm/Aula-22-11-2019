<?php

$nome=$_GET["nome"];

$email=$_GET["email"];

$telefone=$_GET["telefone"];

$conexao=mysqli_connect("fdb20.awardspace.net","3138530_guriba","159753guriba","3138530_guriba");
if (!$conexao)
	die ("Ocorreu o seguinte erro -> ".msqli_error());

$query="INSERT INTO `3138530_guriba`.`formulario` (`nome`,`email`, `telefone`, `id`) VALUES ('".$nome."','".$email."', '".$telefone."', default)";

mysqli_query($conexao,$query);

?>