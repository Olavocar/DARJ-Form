<?php

if(isset($_POST['email'])) && !empty ($_POST['email'])

$nome = addslashes($_POST['nome'])
$email = addslashes($_POST['email'])
$telefone = addslashes($_POST['tel'])
$estado = addslashes($_POST['estado'])
$mensagem = addslashes($_POST['mensagem'])

$to = "daarearj@gmail.com";
$subject = "Site - DARJ";
$body = "Nome: ".$nome. "\r\n"
        "Email: ".$email. "\r\n"
        "Tel.: ".$tel. "\r\n"
        "Estado: ".$estado. "\r\n"
        "Mensagem: ".$mensagem;
$header = "From:daarearj@gmail.com"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();
     
if(mail($to,$subject,$body,$header)){

    echo("Cadasro realizado com sucesso");

}else{
    echo("Mensagem não foi enviada. Tente de novo.")";"
}

?>