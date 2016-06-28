<?php

/* Inclui os dados de OPO no banco de dados */
include "teste.php";
include "logica-usuario.php";
verificaUsuario();
//criaçao de tabela mysql
//$id = $_GET["id"];
//$acao = $_GET["acao"];
$acao				= isset($_POST["acao"])?$_POST["acao"]:"Não foi possivel exibir";
$id 			    = isset($_POST["id"])?$_POST["id"]:"Não foi possivel exibir";
$nome               = isset($_POST["Nome"])?$_POST["Nome"]:"Não foi possivel exibir";
$local              = isset($_POST["Local"])?$_POST["Local"]:"Não foi possivel exibir";
$bairro             = isset($_POST["bairro"])?$_POST["bairro"]:"Não foi possivel exibir";
$Solicitante        = isset($_POST["Solicitante"])?$_POST["Solicitante"]:"Não foi possivel exibir";
$data               = isset($_POST["data"])?$_POST["data"]:"Não foi possivel exibir";
$data2              = isset($_POST["data2"])?$_POST["data2"]:"Não foi possivel exibir";
$hrini              = isset($_POST["hr_inicial"])?$_POST["hr_inicial"]:"Não foi possivel exibir";
$hrfim              = isset($_POST["hr_termino"])?$_POST["hr_termino"]:"Não foi possivel exibir";
$uni                = isset($_POST["uni"])?$_POST["uni"]:"Não foi possivel exibir";
$arm                = isset($_POST["arm"])?$_POST["arm"]:"Não foi possivel exibir";
$modalidade         = isset($_POST["modalidade"])?$_POST["modalidade"]:"Não foi possivel exibir";
$processo           = isset($_POST["processo"])?$_POST["processo"]:"Não foi possivel exibir";
$otresclarecimentos = isset($_POST["OtrEsclarecimentos"])?$_POST["OtrEsclarecimentos"]:"Não foi possivel exibir";
$vtr                = isset($_POST["vtr"])?$_POST["vtr"]:"Não foi possivel exibir";

$nome               = mysqli_real_escape_string($con, $nome);
$local              = mysqli_real_escape_string($con, $local);
$bairro             = mysqli_real_escape_string($con, $bairro);
$Solicitante        = mysqli_real_escape_string($con, $Solicitante);
$otresclarecimentos = mysqli_real_escape_string($con, $otresclarecimentos);  

if($acao == "Alterar"){
$sql = "UPDATE `opo` SET `Nome`='$nome',`Local`='$local',`Bairro`='$bairro',`Solicitante`='$Solicitante',`Data_Inicial`='$data',`Data_Final`='$data2',`Hr_Inicio`='$hrini',`Hr_Termino`='$hrfim',`Uniforme`='$uni',`Armamento`='$arm',`Modalidade`='$modalidade',`Processo`='$processo',`Outros_Esclarecimentos`='$otresclarecimentos',`Vtr`='$vtr' WHERE `Cod` = $id";

$query = mysqli_query($con, $sql);
$_SESSION["info"] = "Ordem alterada com sucesso";
	header("Location: Lista_Todas_Opo.php");
	die();
}

/*if($acao = "Excluir"){

	$sql = "DELETE FROM `opo` WHERE `Cod` = $id";
	$query = mysqli_query($con, $sql);
	$_SESSION["danger"] = "OPO excluída com sucesso";
	header("Location: Lista_Todas_Opo.php");


}*/
?>

