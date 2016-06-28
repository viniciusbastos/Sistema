<?php

     require '/PHPMailer-master/class.phpmailer.php';
     $mail = new PHPMailer();
     $mail -> setLanguage('pt');

$assunto = 'O ASSUNTO DO EMAIL';
$mensagem = 'A MENSAGEM DO EMAIL. PODE SER HTML.';
$seu_email = 'cipm65.spo@gmail.com';
$seu_nome = 'DIGITE SEU NOME';
$sua_senha = 'policial';

/* Se for do Gmail o servidor é: smtp.gmail.com */
$host_do_email = 'smtp.gmail.com';

/* Configura os destinatários (pra quem vai o email) */
$mail->AddAddress('cipm65.spo@gmail.com', 'Nome');


/* Define que é uma conexão SMTP */
$mail->IsSMTP();
/* Define o endereço do servidor de envio */
$mail->Host = $host_do_email;
/* Utilizar autenticação SMTP */
$mail->SMTPAuth = true;
/* Protocolo da conexão */
$mail->SMTPSecure = "ssl";
/* Porta da conexão */
$mail->Port = "465";
/* Email ou usuário para autenticação */
$mail->Username = $seu_email;
/* Senha do usuário */
$mail->Password = $sua_senha;

/* Configura os dados do remetente do email */
$mail->From = $seu_email; // Seu e-mail
$mail->FromName = $seu_nome; // Seu nome

/* Configura a mensagem */
$mail->IsHTML(true); // Configura um e-mail em HTML

/*
 * Se tiver problemas com acentos, modifique o charset
 * para ISO-8859-1
 */
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

/* Configura o texto e assunto */
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $mensagem; // A mensagem em HTML
$mail->AltBody = trim(strip_tags($mensagem)); // A mesma mensagem em texto puro

/* Configura o anexo a ser enviado (se tiver um) */
//$mail->AddAttachment("foto.jpg", "foto.jpg");  // Insere um anexo

/* Envia o email */
$email_enviado = $mail->Send();

/* Limpa tudo */
$mail->ClearAllRecipients();
$mail->ClearAttachments();

/* Mostra se o email foi enviado ou não */
if ($email_enviado) {
    echo "Email enviado!";
} else {
    echo "Não foi possível enviar o e-mail.<br /><br />";
    echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}
?>