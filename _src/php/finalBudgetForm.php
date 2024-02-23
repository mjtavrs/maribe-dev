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
        $outras_duvidas = "Sem outras duvidas";
    } else {
        $outras_duvidas = $_POST["outras-duvidas"];
    }

    $to = "formulariomaribe@gmail.com";
    $assunto = "Formulario de proposta";
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "O que e mais importante para voce nesse processo de orçamento de projeto? $o_que_e_mais_importante_no_orcamento\n";
    $mensagem_email .= "Endereco do imovel: $endereco\n\n";
    $mensagem_email .= "No caso de projeto de interiores, o imóvel tem planta? $projeto_tem_planta\n";
    $mensagem_email .= "Apartamento completo? Se nao, quantos e quais ambientes? $apartamento_completo_ou_ambientes\n";
    $mensagem_email .= "Quantas pessoas residem no imovel e quais as idades? $quantas_pessoas_vivem_no_apartamento\n";
    $mensagem_email .= "Tamanho do projeto (m²): $tamanho_projeto\n";
    $mensagem_email .= "Vai ter demolicao/construcao de paredes? $demolicao_ou_construcao_paredes\n";
    $mensagem_email .= "Vai modificar eletrica? $modificar_eletrica\n";
    $mensagem_email .= "Vai modificar gesso? $modificar_gesso\n";
    $mensagem_email .= "Vai modificar revestimento ou bancadas? $modificar_revestimento_ou_bancada\n";
    $mensagem_email .= "Vai aproveitar e/ou modificar algum movel ja existente? $vai_aproveitar_e_ou_modificar_movel_existente\n";
    $mensagem_email .= "Pensa em fazer moveis com marcenaria ou planejados? $pensa_em_fazer_moveis_com_marcenaria_ou_planejados\n";
    $mensagem_email .= "Acompanha nosso trabalho nas redes sociais? $acompanha_nas_redes_sociais\n";
    $mensagem_email .= "Acredita que nossos trabalhos anteriores conseguem atingir a sua expectativa estética? $acredita_que_trabalhos_anteriores_antigiram_expectativa\n\n";
    $mensagem_email .= "Porque voce acredita que somos o escritorio ideal para ajuda-los? $porque_acredita_que_somos_o_ideal\n";
    $mensagem_email .= "Se houver alguma duvida ou informacao a acrescentar, comente: $outras_duvidas\n\n";

    $headers = "De: $email\r\nReply-To: $email\r\n";

    if (mail($to, $assunto, $mensagem_email, $headers)) {
        header("Location: http://maribe.arq.br/sucesso");
        exit;
    } else {
        $erros[] = 'Erro ao enviar a mensagem.';
    }
}