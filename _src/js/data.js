const projetos = [
    {
        id: 1,
        url: "_assets/image/projetos/projeto-marias/projeto-marias-cover.jpg",
        titulo: "projeto marias",
        descricao: "O projeto Marias é um restaurante com comidas típicas do Nordeste, onde tivemos toda liberdade de criar um espaço temático com referências regionais que dialogam com a apresentação dos pratos.Abusamos de cores e texturas trazendo elementos típicos danossa região, como a corda sisal com nó de carrasco, chitas, panelas de barro, e bastante quadros em xilogravuras.Com tons terrosos, e estampas coloridas, transformamos uma garagem em um aconchegante restaurante.",
        ano: "2022",
        cidade: "Recife",
        outrasFotos: [
            "_assets/image/projetos/projeto-marias/images/1.jpg",
            "_assets/image/projetos/projeto-marias/images/2.jpg",
            "_assets/image/projetos/projeto-marias/images/3.jpg",
            "_assets/image/projetos/projeto-marias/images/4.jpg",
            "_assets/image/projetos/projeto-marias/images/5.jpg",
            "_assets/image/projetos/projeto-marias/images/6.jpg",
            "_assets/image/projetos/projeto-marias/images/7.jpg",
            "_assets/image/projetos/projeto-marias/images/8.jpg",
            "_assets/image/projetos/projeto-marias/images/9.jpg",
            "_assets/image/projetos/projeto-marias/images/10.jpg",
            "_assets/image/projetos/projeto-marias/images/11.jpg"
        ]
    },
    {
        id: 2,
        url: "_assets/image/projetos/quarto-selva/quarto-selva-cover.png",
        titulo: "quarto selva",
        descricao: "Esse quarto de criança foi pensado para dois irmãos cheios de personalidade e que amam a natureza! Idealizamos uma arte para o projeto que foi pintada pelos próprios clientes, permitindo criar memórias afetivas desse novo quarto. A família tem planos de mudar para um apê maior, pensando nisso, fizemos uma marcenaria solta, podendo gerar vários layouts que se adequem ao novo espaço.",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 3,
        url: "_assets/image/projetos/ape-eron/ape-eron-cover.png",
        titulo: "apê eron",
        descricao: "Os clientes do apê Eron são um casal jovem bastante extrovertido, que gosta de reunir amigos e confraternizar, mantendo sempre uma energia alta astral. Inspiradas nessa personalidade, o projeto surgiu cheio de cores, vida e originalidade dentro de uma área de 50 m². Trouxemos ladrilho hidráulico, plantas e bastante marcenaria para otimizar todo espaço do apartamento.",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 4,
        url: "_assets/image/projetos/ape-varandas/ape-varandas-cover.png",
        titulo: "apê varandas",
        descricao: "O apê varandas é habitado por dois moradores, pai e filho, com gostos semelhantes, ambos curtem o contraste entre cores claras e escuras com estilo mais industrial, adoram receber amigos, fazer churrascos e ouvir músicas enquanto jogam cartas. Criamos um projeto com tons mais escuros, através da madeira e bastante cinza, o resultado foi um ambiente aconchegante para horas de descanso e simultaneamente funcional para receber amigos.",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 5,
        url: "_assets/image/projetos/agencia-166/agencia-166-cover.jpg",
        titulo: "agência 166",
        descricao: "O projeto consiste na transformação de um escritório em uma sala coorporativa. O espaço é localizado em um terreno de área residencial, mas possui acesso independente da área íntima dos moradores. O pedido dos clientes era que o espaço contasse com 6 estações de trabalho, uma mini copa e área de armazenamento. Tudo isso com inspirações em áreas de coworks contemporâneos.",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 6,
        url: "_assets/image/projetos/ape-nina/ape-nina-cover.jpg",
        titulo: "apê nina",
        descricao: "No apê nina nós integramos todos os ambientes das áreas sociais: sala de estar, jantar, varanda e cozinha de forma que houvesse equilíbrio, leveza e harmonia. Tudo isso sem quebrar nenhuma parede porque são estruturais e não podem ser alteradas, então toda intervenção foi feita por marcenaria, revestimentos e pintura. Com pouco espaço projetamos bastante marcenaria criativa e otimizada para aproveitar os espaços.",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 7,
        url: "_assets/image/projetos/ape-pilar/ape-pilar-cover.png",
        titulo: "apê pilar",
        descricao: "O apê pilar é um apartamento localizado no centro de Recife, habitado por 5 pessoas, sendo 2 adultos, 2 crianças e 1 adolescente. É uma família alegre e espontânea, que tem a leitura como algo fundamental para eles, inclusive para as crianças. Apreciam cinema alternativo, aprender sobre diferentes culturas e amam uma boa arte e um bom design. Por conta disso, trouxemos bastante móveis com design diferenciado, cor e texturas!",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 8,
        url: "_assets/image/projetos/ape-girassol/ape-girassol-cover.jpg",
        titulo: "apê girassol",
        descricao: "Esse apê é de um casal jovem bem bairristas, minimalistas e gente boa! Para eles o significado do lar vem junto com palavras como conforto, refúgio, alegria e relaxamento. O projeto precisou trazer essa tranquilidade com bastante personalidade em um espaço de 50m², por isso trabalhamos com cores suaves, obras de arte coloridas e locais e marcenaria criativa para aproveitar todo espaço!",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 9,
        url: "_assets/image/projetos/quarto-tete/quarto-tete-cover.png",
        titulo: "quarto tête",
        descricao: "Esse é um quartinho de bebê desenvolvido com base na filosofia Montessoriana. Buscamos trazer a sensação de refúgio para a bebê, com um projeto que acompanhasse seu crescimento e aumento de autonomia. Apostamos em tons suaves, mobiliário baixo e bastante revestimento natural. A arte na parede foi desenvolvida pela maribe e pintada pela cliente trazendo bastante memória afetiva para o espaço!",
        ano: "",
        cidade: "Recife"
    },
    {
        id: 10,
        url: "_assets/image/projetos/ape-amazonita/ape-amazonita-cover.png",
        titulo: "apê amazonita",
        descricao: "Os clientes do apê amazonita são bastante autênticos e criativos! Com bastante obras de arte e uma coleção de vinis, criamos um projeto com a personalidade deles. A parede neutra evidenciou a beleza de suas coleções artísticas, os metais pretos contrastam com as paredes e marcenarias e a pedra amazonita, como a protagonista, trazendo elegância e suavidade pro ambiente.",
        ano: "",
        cidade: "Recife"
    }
]

export default projetos;