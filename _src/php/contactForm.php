<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $assunto = $_POST["subject"];
    $mensagem = $_POST["message"];

    $to = "mjtdes.md@gmail.com";
    $assunto = "Teste de contato";
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "Assunto: $assunto\n";
    $mensagem_email .= "Mensagem: \n$mensagem\n";

    $headers = "De: $email\r\nReply-To: $email\r\n";

    if (mail($to, $assunto, $mensagem_email, $headers)) {
        echo 'Mensagem enviada com sucesso!';
    } else {
        echo 'Erro ao enviar a mensagem.';
    }
}