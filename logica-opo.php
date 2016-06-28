<?php

/* Inclui os dados de OPO no banco de dados */
include "teste.php";
include "logica-usuario.php";
verificaUsuario();
//criaçao de tabela mysql
//$id = $_GET["id"];
//$acao = $_GET["acao"];


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
$otresclarecimentos = mysqli_real_escape_string($con, $otresclarecimentos);  






$sql = "INSERT INTO `opo`(`Nome`, `Local`, `Bairro`, `Solicitante`, `Data_Inicial`, `Data_Final`, `Hr_Inicio`, `Hr_Termino`, `Uniforme`, `Armamento`, `Modalidade`, `Processo`, `Outros_Esclarecimentos`, `Vtr`) VALUES ('$nome','$local','$bairro','$Solicitante','$data','$data2','$hrini','$hrfim','$uni', '$arm','$modalidade','$processo','$otresclarecimentos','$vtr')";

$query = mysqli_query($con, $sql);

require_once("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "cipm65.spo@gmail.com";
$mail->Password = "policial";
$mail->setFrom("alura.php.e.mysql@gmail.com", "Alura Curso PHP e MySQL");
$mail->addAddress("alura.php.e.mysql@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$local}<br/>mensagem: {$otresclarecimentos}</html>"
$mail->AltBody = "de: {$nome}\nemail:{$local}\nmensagem: {$otresclarecimentos}";
if($mail->send()) {
$_SESSION["success"] = "Mensagem enviada com sucesso";
header("Location: index.php";
	} else {
$_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
header("Location: Lista_Todas_Opo.php");
}
?>

