<?php


if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];


    //cabeçalho do e-mail
    $headers = "From: $nome <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";


    $corpo_email = "Assunto: $assunto <br> Mensagem: $mensagem";


    $destinatario = "josemarioto@gmail.com";


    if (mail($destinatario, $assunto, $corpo_email, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
