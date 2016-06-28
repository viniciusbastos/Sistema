<?php 

function buscaUsuario($con, $email, $senha){
	$senhaMd5  = md5($senha);
	$email 	   = mysqli_real_escape_string($con, $email); 
	$query     = "SELECT * FROM usuarios WHERE email = '{$email}' and senha = '{$senhaMd5}'";
	$resultado = mysqli_query($con, $query);
	$usuario   = mysqli_fetch_assoc($resultado);
	return $usuario;
}


