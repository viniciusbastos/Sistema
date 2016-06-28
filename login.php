<?php 
include "teste.php";
include "banco-usuario.php";
include "logica-usuario.php";

$usuario = buscaUsuario($con, $_POST['email'], $_POST['senha']);

if ($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha inválida.";
	header("Location:index.php");
	
}
else{
	$_SESSION["success"] = "Usuário conectado com sucesso.";
	logaUsuario($usuario["email"]);
	header("Location:index.php");
	
}
die()
?>
