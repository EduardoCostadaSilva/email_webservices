<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

try {
$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 587;
$phpmailer->Username = '39b26a912c4c28';
$phpmailer->Password = '5ef038ccc5cfb4';

$phpmailer->setFrom("remetente@asdrubal.corp", 'Mailer');

$phpmailer->addAddress("eduardo.silva29@alunos.sc.senac.br");

$phpmailer->isHTML(true);
$phpmailer->Subject = "Integração com mail trap";
$phpmailer->Body = "Email enviado pelo servidor <b> PHP </b>";
$phpmailer->AltBody = "Email enviado poelo servidor PHP";

$phpmailer->send();
echo 'A mensagem foi enviada';
} catch (Exception $e){
 echo "A mensagem não pode ser enviada. Mailer Error: {$mail->ErrorInfo}";
}
