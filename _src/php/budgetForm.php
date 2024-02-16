<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $de_onde_veio = $_POST["de-onde-veio"];
    $o_que_projetar = $_POST["o-que-projetar"];
    $quando_comecar_projeto = $_POST["quando-comecar-projeto"];
    $objetivo = $_POST["objetivo"];

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
        echo 'Mensagem enviada com sucesso!';
    } else {
        echo 'Erro ao enviar a mensagem.';
    }
}