<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $de_onde_veio = $_POST["de_onde_veio"];
    $o_que_projetar = $_POST["o_que_projetar"];
    $quando_comecar_projeto = $_POST["quando_comecar_projeto"];
    $objetivo = $_POST["objetivo"];

    $to = "mjtdes.md@gmail.com";
    $assunto = "Novo orçamento";
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "De onde veio: $de_onde_veio\n";
    $mensagem_email .= "O que será projetado: $o_que_projetar\n";
    $mensagem_email .= "Quando começar projeto: $quando_comecar_projeto\n";
    $mensagem_email .= "Objetivo com o projeto: $objetivo\n";

    $arquivos_anexados = array();
    $numero_arquivos = count($_FILES['arquivos-projeto']['name']);
    for ($i = 0; $i < $numero_arquivos; $i++) {
        $arquivo_temporario = $_FILES['arquivos-projeto']['tmp-name'][$i];
        $nome_arquivo = $_FILES['arquivos-projeto']['name'][$i];
        $caminho_arquivo = "uploads/" . $nome_arquivo;

        move_uploaded_file($arquivo_temporario, $caminho_arquivo);

        $arquivos_anexados[] = $caminho_arquivo;

        $arquivo = chunk_split(base64_encode(file_get_contents($caminho_arquivo)));
        $mensagem_email .= "--$boundary\r\n";
        $mensagem_email .= "Content-Type: application/octet-stream; name=\"$nome_arquivo\"\r\n";
        $mensagem_email .= "Content-Transfer-Encoding: base64\r\n";
        $mensagem_email .= "Content-Disposition: attachment\r\n\r\n";
        $mensagem_email .= "$arquivo\r\n";
    }

    $mensagem_email .= "--$boundary--";

    $headers = "De: $email\r\nReply-To: $email\r\n";
    $headers .= "\r\nMIME-Version: 1.0";
    $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"$boundary\"";

    if (mail($to, $assunto, $mensagem_email, $headers)) {
        echo 'Mensagem enviada com sucesso!';
    } else {
        echo 'Erro ao enviar a mensagem.';
    }

    foreach ($arquivos_anexados as $arquivo) {
        unlink($arquivo);
    }
}