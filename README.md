# Yorkshire Terrier

Site de uma página sobre o Yorkshire Terrier: origem, aparência, temperamento, cuidados e uma galeria de fotos.

🔗 **No ar:** https://luizpaulo726.github.io/yorkshire-site/

Feito com **PHP + Twig como gerador de site estático**: os templates e os dados ficam separados, um script gera o HTML final
e o GitHub Actions publica no GitHub Pages a cada push. O visual é **CSS puro**, escrito do zero, sem frameworks.

## O que tem no site

- **Capa** com a apresentação da raça
- **Ficha da raça** (origem, peso, expectativa de vida, pelagem, grupo FCI)
- **Linha do tempo da origem**: dos tecelões escoceses à Smoky, na Segunda Guerra
- **Aparência**: comparação entre a pelagem do filhote e a do adulto
- **Temperamento**, **cuidados** e **curiosidades**
- **Galeria** com visualizador (setas do teclado, Esc para fechar)

## Como funciona

```
dados/conteudo.php      textos, linha do tempo, galeria e créditos (o "banco de dados" do site)
templates/
├── base.html.twig      layout: <head>, cabeçalho, rodapé
├── index.html.twig     monta a página incluindo as seções
├── _macros.html.twig   macro imagem(): gera <img> responsivo com srcset, width e height
├── partes/             topo, rodapé e visualizador de fotos
└── secoes/             uma seção por arquivo (capa, origem, aparência...)
assets/                 CSS, JavaScript e imagens (copiados para dist/)
build.php               gera o site em dist/
.github/workflows/      publica no GitHub Pages a cada push
```

O `build.php` registra duas funções Twig próprias:

- **`dimensoes(caminho)`**: lê largura e altura reais da imagem, para o HTML nunca ter `width`/`height` errados
- **`asset(caminho)`**: acrescenta um código do conteúdo (`estilo.css?v=72a2b748`), para o navegador baixar
  a versão nova sempre que o arquivo mudar

O Twig roda com `strict_variables`: um dado faltando quebra o build, em vez de gerar uma página com buraco.

## Detalhes do front-end

- **Paleta tirada da pelagem:** azul-aço e castanho dourado, como variáveis CSS (`assets/css/estilo.css`)
- **Tema escuro automático**, seguindo a configuração do sistema
- **Responsivo**: no celular o menu vai para a parte de baixo da tela, ao alcance do polegar
- **Imagens otimizadas** em WebP, em dois tamanhos (`srcset`), carregadas só quando aparecem na tela
- **Acessibilidade**: textos alternativos, link "Pular para o conteúdo", foco visível e respeito a "reduzir movimento"
- **Galeria** com o elemento nativo `<dialog>` (`assets/js/galeria.js`)

## Rodando no computador

Requisitos: PHP 8.2+ e Composer.

```bash
composer install
composer serve      # gera o site e abre em http://127.0.0.1:8000
```

Só gerar, sem servidor: `composer build` (o resultado fica em `dist/`).

## Publicação

O workflow `.github/workflows/publicar.yml` roda a cada push na `main`: instala o Twig, executa `composer build`
e publica a pasta `dist/` no GitHub Pages. No repositório, **Settings → Pages → Source** deve estar em **GitHub Actions**.

## Créditos das imagens

Todas as imagens vêm do [Wikimedia Commons](https://commons.wikimedia.org) e foram redimensionadas e convertidas para WebP.

| Imagem | Autor | Licença |
|---|---|---|
| [Pelagem longa com laço](https://commons.wikimedia.org/wiki/File:Adult_Yorkie.jpg) | Dmitry Kalinin | CC BY 2.0 |
| [Exposição no Westminster](https://commons.wikimedia.org/wiki/File:2014_Westminster_Kennel_Club_Dog_Show_(12452143744).jpg) | Pets Adviser ([petsadviser.com](https://www.petsadviser.com)) | CC BY 2.0 |
| [Filhote](https://commons.wikimedia.org/wiki/File:A_puppy_Yorkie.jpg) e [filhote no passeio](https://commons.wikimedia.org/wiki/File:Winston,_a_Yorkshire_Terrier_puppy.jpg) | Eric Chan | CC BY 2.0 |
| [Adulto azul e castanho](https://commons.wikimedia.org/wiki/File:Blue_and_Tan_Yorkshire_Terrier.jpg) | Sciencia58 | CC0 |
| [Adulto no gramado](https://commons.wikimedia.org/wiki/File:A_Yorkshire_Terrier_DSC_5954.jpg) | Goldmull | CC BY-SA 4.0 |
| [Huddersfield Ben](https://commons.wikimedia.org/wiki/File:Huddersfield_Ben.png) | John Henry Walsh (1878) | Domínio público |
| [A Yorkshire Terrier](https://commons.wikimedia.org/wiki/File:A_Yorkshire_Terrier.jpg) | Maud Earl | Domínio público |

O conteúdo do site é informativo e não substitui a orientação de um médico-veterinário.
