<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
require_once("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "cipm65.spo@gmail.com";
$mail->Password = "policial";
$mail->setFrom("cipm65.spo@gmail.com", "Alura Curso PHP e MySQL");
$mail->addAddress("cipm65.spo@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>";
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";
if($mail->send()) {
$_SESSION["success"] = "Mensagem enviada com sucesso";
header("Location: index.php";
	} 
	else {
$_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
header("Location: envia.php");
}
die();

?>