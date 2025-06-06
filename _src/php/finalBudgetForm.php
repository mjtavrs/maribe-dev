<?php

$erros = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $erros[] = "Por favor, digite seu nome.";
    } else {
        $nome = $_POST["name"];
    }

    if (empty($_POST["o-que-e-mais-importante-no-orcamento"])) {
        $erros[] = "Por favor, digite o que é mais importante no orçamento.";
    } else {
        $o_que_e_mais_importante_no_orcamento = $_POST["o-que-e-mais-importante-no-orcamento"];
    }

    if (empty($_POST["address"])) {
        $erros[] = "Por favor, digite seu endereço.";
    } else {
        $endereco = $_POST["address"];
    }

    if (empty($_POST["projeto-de-interiores-tem-planta"])) {
        $erros[] = "Por favor, marque se o projeto possui planta.";
    } else {
        $projeto_tem_planta = $_POST["projeto-de-interiores-tem-planta"];
    }

    if (empty($_POST["apartamento-completo"])) {
        $erros[] = "Por favor, informe se é o apartamento completo ou alguns ambientes.";
    } else {
        $apartamento_completo_ou_ambientes = $_POST["apartamento-completo"];
    }

    
    if (empty($_POST["quantas-pessoas-residem-e-idades"])) {
        $erros[] = "Por favor, informe quantas pessoas vivem no apartamento e as idades.";
    } else {
        $quantas_pessoas_vivem_no_apartamento = $_POST["quantas-pessoas-residem-e-idades"];
    }
    
    if (empty($_POST["qual-tamanho-do-projeto"])) {
        $erros[] = "Por favor, informe qual o tamanho do espaço em m².";
    } else {
        $tamanho_projeto = $_POST["qual-tamanho-do-projeto"];
    }

    if (empty($_POST["vai-ter-demolicao-ou-construcao-de-paredes"])) {
        $erros[] = "Por favor, marque se haverá demolição ou construção de paredes.";
    } else {
        $demolicao_ou_construcao_paredes = $_POST["vai-ter-demolicao-ou-construcao-de-paredes"];
    }

    if (empty($_POST["vai-modificar-eletrica"])) {
        $erros[] = "Por favor, marque se haverá modificação de elétrica.";
    } else {
        $modificar_eletrica = $_POST["vai-modificar-eletrica"];
    }

    if (empty($_POST["vai-modificar-gesso"])) {
        $erros[] = "Por favor, marque se haverá modificação de gesso.";
    } else {
        $modificar_gesso = $_POST["vai-modificar-gesso"];
    }

    if (empty($_POST["vai-modificar-revestimento-ou-bancadas"])) {
        $erros[] = "Por favor, marque se haverá modificação de revestimento ou bancada.";
    } else {
        $modificar_revestimento_ou_bancada = $_POST["vai-modificar-revestimento-ou-bancadas"];
    }

    if (empty($_POST["vai-aproveitar-e-ou-modificar-algum-movel-existente"])) {
        $erros[] = "Por favor, marque se vai aproveitar ou modificar algum móvel existente.";
    } else {
        $vai_aproveitar_e_ou_modificar_movel_existente = $_POST["vai-aproveitar-e-ou-modificar-algum-movel-existente"];
    }

    if (empty($_POST["pensa-em-fazer-moveis-com-marcenaria-ou-planejados"])) {
        $erros[] = "Por favor, marque se pensa em fazer móveis com marcenaria ou planejados.";
    } else {
        $pensa_em_fazer_moveis_com_marcenaria_ou_planejados = $_POST["pensa-em-fazer-moveis-com-marcenaria-ou-planejados"];
    }

    if (empty($_POST["acompanha-nosso-trabalho-pelas-redes-sociais"])) {
        $erros[] = "Por favor, marque se acompanha nosso trabalho nas redes sociais.";
    } else {
        $acompanha_nas_redes_sociais = $_POST["acompanha-nosso-trabalho-pelas-redes-sociais"];
    }

    if (empty($_POST["acredita-que-nossos-trabalhos-anteriores-atingiram-sua-expectativa-estetica"])) {
        $erros[] = "Por favor, marque sua opção.";
    } else {
        $acredita_que_trabalhos_anteriores_antigiram_expectativa = $_POST["acredita-que-nossos-trabalhos-anteriores-atingiram-sua-expectativa-estetica"];
    }

    if (empty($_POST["porque-acredita-que-somos-o-escritorio-ideal-para-voce"])) {
        $erros[] = "Por favor, nos informe porque acredita que somos o escritório ideal para você.";
    } else {
        $porque_acredita_que_somos_o_ideal = $_POST["porque-acredita-que-somos-o-escritorio-ideal-para-voce"];
    }

    if (empty($_POST["outras-duvidas"])) {
        $outras_duvidas = "Sem outras dúvidas";
    } else {
        $outras_duvidas = $_POST["outras-duvidas"];
    }

    $hora_envio = date("d/m/Y \à\s H:i:s");

    $to = "formulariomaribe@gmail.com";
    $assunto = "Formulario de proposta preenchido";

    $mensagem_email = "
    <html>
    <head>
        <title>Formulário de proposta</title>
    </head>
    <body>
        <img src='https://i.ibb.co/yVPy89p/formulario-De-Proposta.png' alt='Formulário de Proposta'>
        <br />
        <p><strong>nome:</strong> $nome</p>        
        <p><strong>o que é o mais importante para você nesse processo de orçamento de projeto?</strong> $o_que_e_mais_importante_no_orcamento</p>
        <p><strong>endereço:</strong> $endereco</p>
        <p><strong>no caso de projeto de interiores, o imóvel tem planta?</strong> $projeto_tem_planta</p>
        <p><strong>apartamento completo? se não, quantos e quais ambientes?</strong> $apartamento_completo_ou_ambientes</p>
        <p><strong>quantas pessoas residem no imóvel e quais as idades?</strong> $quantas_pessoas_vivem_no_apartamento</p>
        <p><strong>tamanho do projeto (m²):</strong> $tamanho_projeto</p>
        <p><strong>vai ter demolição/construção de paredes?</strong> $demolicao_ou_construcao_paredes</p>
        <p><strong>vai modificar elétrica?</strong> $modificar_eletrica</p>
        <p><strong>vai modificar gesso?</strong> $modificar_gesso</p>
        <p><strong>vai modificar revestimento ou bancadas?</strong> $modificar_revestimento_ou_bancada</p>
        <p><strong>vai aproveitar e/ou modificar algum móvel já existente?</strong> $vai_aproveitar_e_ou_modificar_movel_existente</p>
        <p><strong>pensa em fazer móveis com marcenaria ou planejados?</strong> $pensa_em_fazer_moveis_com_marcenaria_ou_planejados</p>
        <p><strong>acompanha nossos trabalhos nas redes sociais?</strong> $acompanha_nas_redes_sociais</p>
        <p><strong>acredita que nossos trabalhos anteriores conseguem atingir a sua expectativa estética?</strong> $acredita_que_trabalhos_anteriores_antigiram_expectativa</p>
        <p><strong>porque você acredita que somos o escritório ideal para ajudá-los?</strong> $porque_acredita_que_somos_o_ideal</p>
        <p><strong>se houver alguma dúvida ou informação a acrescentar, comente:</strong> $outras_duvidas</p>
        <br />
        <small><p id='data_envio'>este formulário foi enviado no dia $hora_envio</p></small>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "De: $email\r\nReply-To: $email\r\n";

    if (mail($to, $assunto, $mensagem_email, $headers)) {
        header("Location: http://maribe.arq.br/sucesso");
        exit;
    } else {
        $erros[] = 'Erro ao enviar a mensagem.';
    }
}