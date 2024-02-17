<?php

$erros = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $erros[] = "Por favor, digite seu nome.";
    } else {
        $nome = $_POST["name"];
    }

    if (empty($_POST["email"])) {
        $erros[] = "Por favor, digite seu e-mail.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Formato de e-mail inválido.";
    } else {
        $email = $_POST["email"];
    }

    $telefone = $_POST["phone"];
    if (!empty($telefone)) {
        $telefone = preg_replace('/\D/', '', $telefone);

        if (!preg_match('/^\d{10,11}$/', $telefone)) {
            $erros[] = "Formato de telefone inválido. Por favor, insira um número de telefone válido.";
        }
    }

    if (empty($_POST["subject"])) {
        $erros[] = "Por favor, escreva o assunto.";
    } else {
        $assunto = $_POST["subject"];
    }

    if (empty($_POST["message"])) {
        $erros[] = "Por favor, escreva a mensagem do projeto.";
    } else {
        $mensagem = $_POST["message"];
    }

    $to = "mjtdes.md@gmail.com";
    $assunto = "Novo contato";
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "Assunto: $assunto\n";
    $mensagem_email .= "Mensagem: \n$mensagem\n";

    $headers = "De: $email\r\nReply-To: $email\r\n";

    if (mail($to, $assunto, $mensagem_email, $headers)) {
        header("Location: sucesso.html");
        exit;
    } else {
        $erros[] = 'Erro ao enviar a mensagem.';
    }
}