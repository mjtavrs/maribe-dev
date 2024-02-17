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

    if (empty($_POST["de-onde-veio"])) {
        $erros[] = "Por favor, selecione de onde você veio.";
    } else {
        $de_onde_veio = $_POST["de-onde-veio"];
    }

    if (empty($_POST["o-que-projetar"])) {
        $erros[] = "Por favor, selecione o que será projetado.";
    } else {
        $o_que_projetar = $_POST["o-que-projetar"];
    }

    if (empty($_POST["quando-comecar-projeto"])) {
        $erros[] = "Por favor, indique quando pretende iniciar o projeto.";
    } else {
        $quando_comecar_projeto = $_POST["quando-comecar-projeto"];
    }

    if (empty($_POST["objetivo"])) {
        $erros[] = "Por favor, descreva o objetivo do projeto.";
    } else {
        $objetivo = $_POST["objetivo"];
    }

    $to = "mjtdes.md@gmail.com";
    $assunto = "Novo pedido de orçamento";
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "De onde veio: $de_onde_veio\n";
    $mensagem_email .= "O que será projetado: $o_que_projetar\n";
    $mensagem_email .= "Quando começar projeto: $quando_comecar_projeto\n";
    $mensagem_email .= "Objetivo com o projeto: $objetivo\n";

    $headers = "De: $email\r\nReply-To: $email\r\n";

    if (mail($to, $assunto, $mensagem_email, $headers)) {
        header("Location: http://maribe.arq.br/sucesso");
        exit;
    } else {
        $erros[] = 'Erro ao enviar a mensagem.';
    }
}