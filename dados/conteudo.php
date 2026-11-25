<?php

/*
 * Conteúdo do site. Os templates em templates/ só cuidam do HTML;
 * para mudar um texto, uma etapa da linha do tempo ou uma foto da galeria, edite aqui.
 */

return [
    'site' => [
        'titulo' => 'Yorkshire Terrier: a história do pequeno terrier inglês',
        'descricao' => 'De caçador de ratos nas tecelagens de Yorkshire a cão de companhia: a origem, a aparência, o temperamento e os cuidados com o Yorkshire Terrier.',
        'desenvolvedor' => 'Luiz Paulo',
        'desenvolvedor_url' => 'https://github.com/luizpaulo726',
    ],

    'menu' => [
        ['ancora' => 'origem', 'rotulo' => 'Origem'],
        ['ancora' => 'aparencia', 'rotulo' => 'Aparência'],
        ['ancora' => 'temperamento', 'rotulo' => 'Temperamento'],
        ['ancora' => 'cuidados', 'rotulo' => 'Cuidados'],
        ['ancora' => 'galeria', 'rotulo' => 'Galeria'],
    ],

    'ficha' => [
        ['rotulo' => 'Origem', 'valor' => 'Yorkshire, Inglaterra'],
        ['rotulo' => 'Peso', 'valor' => 'até 3,2 kg'],
        ['rotulo' => 'Expectativa de vida', 'valor' => '13 a 16 anos'],
        ['rotulo' => 'Pelagem', 'valor' => 'azul-aço e castanho'],
        ['rotulo' => 'Grupo FCI', 'valor' => '3 · Terriers (padrão nº 86)'],
    ],

    'linha_tempo' => [
        [
            'quando' => 'Meados do séc. XIX',
            'titulo' => 'Os tecelões escoceses',
            'texto' => 'Em busca de trabalho nas fábricas de lã, famílias escocesas migraram para os condados de Yorkshire e Lancashire. Com elas vieram pequenos terriers, como o Clydesdale, o Paisley e o Skye Terrier.',
        ],
        [
            'quando' => 'Os primeiros cruzamentos',
            'titulo' => 'Um caçador de ratos',
            'texto' => 'Nas tecelagens e nas minas, os ratos destruíam mercadorias. Os operários cruzaram esses terriers com cães locais, como o Waterside Terrier, buscando um cão pequeno, valente e rápido o bastante para entrar em qualquer canto.',
        ],
        [
            'quando' => '1865',
            'titulo' => 'Huddersfield Ben, o "pai da raça"',
            'texto' => 'Nasce em Huddersfield o cão que definiria o tipo da raça. Vencedor de dezenas de exposições, Ben foi muito usado na reprodução, e boa parte dos Yorkshires de hoje descende dele. Viveu só até 1871.',
        ],
        [
            'quando' => '1870',
            'titulo' => 'Ganha o nome',
            'texto' => 'Até então chamados de "Broken-haired Scotch Terriers", os cães passaram a ser conhecidos pelo condado onde a raça tinha sido aprimorada: Yorkshire.',
        ],
        [
            'quando' => '1886',
            'titulo' => 'Reconhecimento oficial',
            'texto' => 'O Kennel Club britânico reconhece a raça. Na era vitoriana, o Yorkie já tinha deixado as fábricas para virar o cão de colo das famílias ricas, com a pelagem longa como marca registrada.',
        ],
        [
            'quando' => '1944',
            'titulo' => 'Smoky, a heroína de guerra',
            'texto' => 'Encontrada por soldados americanos na Nova Guiné, a Yorkshire Smoky ajudou a passar cabos de telégrafo por um tubo estreito numa pista aérea nas Filipinas, poupando dias de trabalho perigoso. Depois da guerra, visitava hospitais e é lembrada como uma das primeiras cadelas de terapia.',
        ],
    ],

    'temperamento' => [
        ['titulo' => 'Corajoso', 'texto' => 'Enfrenta cães muito maiores sem hesitar. Vale cuidado nos passeios para ele não comprar briga que não pode vencer.'],
        ['titulo' => 'Alerta', 'texto' => 'Late para avisar de qualquer novidade. É um ótimo "alarme", e com treino desde cedo o latido fica sob controle.'],
        ['titulo' => 'Apegado', 'texto' => 'Gosta de estar perto do tutor e sofre se fica sozinho por muito tempo. Combina com quem passa boa parte do dia em casa.'],
        ['titulo' => 'Esperto e teimoso', 'texto' => 'Aprende rápido, mas tem opinião própria. Responde melhor a treinos curtos, com petiscos e elogios, do que a broncas.'],
    ],

    'cuidados' => [
        ['titulo' => 'Pelagem', 'texto' => 'Escovação diária se o pelo for longo, para não formar nós. Banho a cada uma ou duas semanas.'],
        ['titulo' => 'Dentes', 'texto' => 'A boca pequena acumula tártaro com facilidade. Escove os dentes várias vezes por semana e leve ao veterinário com regularidade.'],
        ['titulo' => 'Passeios', 'texto' => 'Use peitoral: a raça tem tendência a colapso de traqueia, e a coleira aperta justamente essa região.'],
        ['titulo' => 'Articulações', 'texto' => 'A luxação de patela (o joelho "sai do lugar") é comum em raças pequenas. Evite que ele pule de lugares altos, como sofás e camas.'],
        ['titulo' => 'Alimentação', 'texto' => 'Filhotes muito pequenos podem ter queda de açúcar no sangue (hipoglicemia). Ofereça várias refeições ao longo do dia.'],
        ['titulo' => 'Frio', 'texto' => 'Com pouco peso e sem subpelo, sente frio com facilidade. Em dias frios, uma roupinha ajuda de verdade.'],
    ],

    'curiosidades' => [
        ['numero' => '6,3 cm', 'texto' => 'era a altura do menor cão já registrado: um Yorkshire Terrier que viveu em Blackpool, na Inglaterra, nos anos 1940. Ele pesava pouco mais de 100 gramas.'],
        ['numero' => '21 m', 'texto' => 'era o comprimento do cano, com só 20 cm de diâmetro, que Smoky atravessou puxando um cabo de telégrafo. Sem ela, os soldados levariam dias cavando sob risco de ataque.'],
        ['numero' => '3 anos', 'texto' => 'é o tempo que a pelagem pode levar para atingir a cor definitiva de adulto, do preto do filhote ao azul-aço.'],
    ],

    // "imagem" é o nome base do arquivo em assets/img/ (existem as versões -800 e -1600)
    'galeria' => [
        ['imagem' => 'exposicao-westminster', 'legenda' => 'Pelagem de exposição no Westminster Kennel Club Dog Show, 2014', 'alt' => 'Yorkshire com pelagem longa de exposição e laço vermelho'],
        ['imagem' => 'pintura-maud-earl', 'legenda' => 'A Yorkshire Terrier, pintura de Maud Earl (início do século XX)', 'alt' => 'Pintura a óleo de um Yorkshire Terrier de pelagem clara sobre almofada vermelha'],
        ['imagem' => 'adulto-azul-e-castanho', 'legenda' => 'Adulto azul e castanho com a pelagem aparada', 'alt' => 'Yorkshire adulto azul-aço e castanho em pé sobre calçamento'],
        ['imagem' => 'filhote', 'legenda' => 'Filhote ainda preto e castanho', 'alt' => 'Filhote de Yorkshire deitado olhando para o lado'],
        ['imagem' => 'adulto-no-gramado', 'legenda' => 'Cadela Yorkshire descansando no gramado', 'alt' => 'Yorkshire deitado sobre uma jaqueta na grama'],
        ['imagem' => 'capa-pelagem-longa', 'legenda' => 'Pelagem longa e o tradicional laço no topete', 'alt' => 'Yorkshire de pelagem longa com laço vermelho'],
        ['imagem' => 'filhote-passeio', 'legenda' => 'Filhote no passeio, de peitoral', 'alt' => 'Filhote de Yorkshire de peitoral e guia'],
        ['imagem' => 'huddersfield-ben', 'legenda' => 'Huddersfield Ben e Katie, gravura de 1878', 'alt' => 'Gravura antiga de dois Yorkshire Terriers'],
    ],

    // Créditos exigidos pelas licenças das imagens (Wikimedia Commons)
    'creditos' => [
        ['obras' => [['Pelagem longa com laço', 'https://commons.wikimedia.org/wiki/File:Adult_Yorkie.jpg']], 'autor' => 'Dmitry Kalinin', 'licenca' => 'CC BY 2.0', 'licenca_url' => 'https://creativecommons.org/licenses/by/2.0'],
        ['obras' => [['Exposição no Westminster', 'https://commons.wikimedia.org/wiki/File:2014_Westminster_Kennel_Club_Dog_Show_(12452143744).jpg']], 'autor' => 'Pets Adviser', 'autor_url' => 'https://www.petsadviser.com', 'licenca' => 'CC BY 2.0', 'licenca_url' => 'https://creativecommons.org/licenses/by/2.0'],
        ['obras' => [['Filhote', 'https://commons.wikimedia.org/wiki/File:A_puppy_Yorkie.jpg'], ['filhote no passeio', 'https://commons.wikimedia.org/wiki/File:Winston,_a_Yorkshire_Terrier_puppy.jpg']], 'autor' => 'Eric Chan', 'licenca' => 'CC BY 2.0', 'licenca_url' => 'https://creativecommons.org/licenses/by/2.0'],
        ['obras' => [['Adulto azul e castanho', 'https://commons.wikimedia.org/wiki/File:Blue_and_Tan_Yorkshire_Terrier.jpg']], 'autor' => 'Sciencia58', 'licenca' => 'CC0', 'licenca_url' => 'https://creativecommons.org/publicdomain/zero/1.0/'],
        ['obras' => [['Adulto no gramado', 'https://commons.wikimedia.org/wiki/File:A_Yorkshire_Terrier_DSC_5954.jpg']], 'autor' => 'Goldmull', 'licenca' => 'CC BY-SA 4.0', 'licenca_url' => 'https://creativecommons.org/licenses/by-sa/4.0'],
        ['obras' => [['Huddersfield Ben', 'https://commons.wikimedia.org/wiki/File:Huddersfield_Ben.png']], 'autor' => 'John Henry Walsh, 1878', 'licenca' => 'domínio público'],
        ['obras' => [['A Yorkshire Terrier', 'https://commons.wikimedia.org/wiki/File:A_Yorkshire_Terrier.jpg']], 'autor' => 'Maud Earl', 'licenca' => 'domínio público'],
    ],
];
