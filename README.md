# Yorkshire Terrier

Site de uma página sobre o Yorkshire Terrier: origem, aparência, temperamento, cuidados e uma galeria de fotos.
Feito do zero com **HTML, CSS e um pouco de JavaScript**, sem frameworks.

## O que tem no site

- **Capa** com a apresentação da raça
- **Ficha da raça** (origem, peso, expectativa de vida, pelagem, grupo FCI)
- **Linha do tempo da origem**: dos tecelões escoceses à Smoky, na Segunda Guerra
- **Aparência**: comparação entre a pelagem do filhote e a do adulto
- **Temperamento**, **cuidados** e **curiosidades**
- **Galeria** com visualizador (setas do teclado, Esc para fechar)

## Detalhes técnicos

- **Paleta tirada da pelagem:** azul-aço e castanho dourado, definidos como variáveis CSS (`css/estilo.css`)
- **Tema escuro automático**, seguindo a configuração do sistema
- **Responsivo**: no celular o menu vai para a parte de baixo da tela, ao alcance do polegar
- **Imagens otimizadas** em WebP, em dois tamanhos (`srcset`), carregadas só quando aparecem na tela (`loading="lazy"`)
- **Acessibilidade**: textos alternativos em todas as fotos, link "Pular para o conteúdo", foco visível
  e respeito à preferência de "reduzir movimento"
- **Galeria** com o elemento nativo `<dialog>` (`js/galeria.js`)

## Estrutura

```
index.html        conteúdo da página
css/estilo.css    todo o visual
js/galeria.js     visualizador de fotos
img/              fotos em WebP (versões de 800px e 1600px)
```

## Como ver no computador

Abra o `index.html` no navegador, ou rode um servidor local:

```bash
php -S 127.0.0.1:8000
```

e acesse `http://127.0.0.1:8000`.

## Publicar no GitHub Pages (grátis)

1. Crie um repositório público no GitHub (ex.: `yorkshire-site`) e envie os arquivos:
   ```bash
   git remote add origin https://github.com/SEU-USUARIO/yorkshire-site.git
   git push -u origin main
   ```
2. No repositório: **Settings → Pages → Branch: `main` / pasta `/ (root)` → Save**
3. Em um ou dois minutos o site fica em `https://SEU-USUARIO.github.io/yorkshire-site/`

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
