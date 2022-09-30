<?php
error_reporting (0);
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'C:\xampp\projetos\daarearj\phpmailer\vendor\autoload.php';

if (isset($_POST['enviar'])){
	//code..
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'daarearj@gmail.com';                     //SMTP username
    $mail->Password   = 'wwhgikmvkdptwkku';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('daarearj@gmail.com', 'Da Área RJ');
    $mail->addAddress('daarearj@gmail.com', 'Da Área RJ');     //Add a recipient
    $mail->addReplyTo('daarearj@gmail.com', 'Information');    
	//Content
    $mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'DARJ - Site';
	$body = DARJ - Mensagem Cadastro através Site:<br>Nome: $_POST['nome']<br>Email: $_POST['email']<br>Telefone: 
	$_POST['tel']<br>Estado:
	$_POST['estado']<br>
	Mensagem: $_POST['mensagem']  
	$mail->Body    = $body;
    $mail->send();
    echo 'Cadastro realizado com sucesso';
} catch (Exception $e) {
    echo "Falha ao enviar mensagem. Tente de novo. Mailer Error: {$mail->ErrorInfo}";
}
}