<?php

$nome=$_GET["nome"];

$email=$_GET["email"];

$telefone=$_GET["telefone"];

$conexao=mysqli_connect("localhost","root","","formis");
if (!$conexao)
	die ("Ocorreu o seguinte erro -> ".msqli_error());

$query="INSERT INTO `formis`.`clientes` (`nome`,`email`, `telefone`, `id`) VALUES ('".$nome."','".$email."', '".$telefone."', default)";

mysqli_query($conexao,$query);

?>