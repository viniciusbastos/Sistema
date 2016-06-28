<?php
include "logica-usuario.php";
logout();
$_SESSION["success"] = "Usuário desconectado com sucesso.";
header("Location: index.php");
die();
?>
