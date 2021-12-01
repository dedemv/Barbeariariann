<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$email - new PHPMailer(true);

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$mensagem = $_POST ['mensagem'];

$status = null;

try {
    $mail->isSMTP();
    $mail->Host     = 'smtp.gmail.com';
    $mail->SMTPAuth     = true;
    $mail->Username    = 'macacodede3@gmail.com';
    $mail->Passaword   = 'thmwqawrprkdilkf';
    $mail->SMTPSecure   = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port     = 587;

    $mail->setFrom($email, $nome);
    $mail->addAddress('macacodede3@gmail.com','Barbearia');

    $mail->isHTML(true);
    $mail->Subject = 'Formulário de contato -' . $email;
    $mail->Body     = $mensagem;

    $mail->send();
    echo 'Mensagem Enviada';
} catch (Exception $e) {
    echo "Mensagem não pode ser enviada. Miler Error: {$mail->ErrorInfo}";
}