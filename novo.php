<?php
include "teste.php";
$data = date('y-m-d');
//$acao = $_GET["acao"];
$diaAnterior = gmdate("y-m-d",time()-(3600*27));
$sql = "SELECT * FROM `tbServ` WHERE `data` BETWEEN '$diaAnterior' AND '$data' ";
$qry = mysql_query($sql);
$resultado = mysql_fetch_array($qry);
print_r($resultado);

echo $mat;
$sql2 = "SELECT tbServ.Mat_cmt, tbefetivopm.NOME, tbcargo.POSTO_GRAD FROM (tbefetivopm INNER JOIN tbServ ON tbefetivopm.MAT = tbServ.Mat_cmt) INNER JOIN tbcargo ON tbefetivopm.CARGO = tbcargo.CARGOId WHERE (((tbServ.Mat_cmt)='$mat'))";
$qry2 = mysql_query($sql2) or die("nao foi possivel inserir os dados");
$res = mysql_fetch_array($qry2);
echo $res[0];
echo $res[1];
echo $res[2];


?>
