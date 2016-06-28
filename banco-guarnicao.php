<?php


include "teste.php";
include "logica-usuario.php";
verificaUsuario();
//criaçao de tabela mysql
$id    = $_POST["id"];


$gu    = $_POST["gu"] ;
$Mat   = $_POST["Mat"];
$pel   = $_POST["pel"];
$turno = $_POST["turno"];

$sql = "INSERT INTO `GU_SERV`(`id_Serv`, `MAT_CMT`, `GU`, `PEL`,`turno`) VALUES ('$id', '$Mat', '$gu','$pel', '$turno')";
 mysqli_query($con, $sql) or die (mysql_error($con));




header("Location: Efet_Gu_Serv.php?id=$id");
die();
?>