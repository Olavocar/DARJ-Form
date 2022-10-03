<?php
$para = "daarearj@gmail.com";//para onde vamos enviar
$assunto = "Site - DARJ";//assunto ou subject
$corpo = "Testando mensagem via site por PHP";//corpo do email
$headers = "From: Site";//cabeçalho da mensagem

if (mail($para, $assunto, $corpo, $headers)){
    echo "Cadastro realizado com sucesso";
} else{
    echo "Falha no envio do cadastro.";
}
?>