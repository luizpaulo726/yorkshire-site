<?php

declare(strict_types=1);

/*
 * Gera o site estático em dist/:
 *   1. copia assets/ (CSS, JS e imagens) para dist/
 *   2. renderiza templates/index.html.twig com os dados de dados/conteudo.php
 *
 * Uso: composer build   (ou: php build.php)
 */

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

require __DIR__ . '/vendor/autoload.php';

$raiz = __DIR__;
$assets = $raiz . '/assets';
$saida = $raiz . '/dist';

// 1) dist/ limpo, com uma cópia dos assets
apagarPasta($saida);
copiarPasta($assets, $saida);

// 2) Twig
$twig = new Environment(new FilesystemLoader($raiz . '/templates'), [
    'strict_variables' => true, // variável inexistente vira erro no build, não um buraco silencioso na página
    'autoescape' => 'html',
]);

// Largura e altura reais de uma imagem, lidas do arquivo (evita width/height errados no HTML)
$twig->addFunction(new TwigFunction('dimensoes', function (string $caminho) use ($assets): array {
    $info = @getimagesize($assets . '/' . $caminho);
    if ($info === false) {
        throw new RuntimeException("Imagem não encontrada ou inválida: assets/$caminho");
    }

    return ['largura' => $info[0], 'altura' => $info[1]];
}));

// Caminho de um asset com um código do conteúdo (?v=...): quando o arquivo muda, o navegador baixa a versão nova
$twig->addFunction(new TwigFunction('asset', function (string $caminho) use ($assets): string {
    $arquivo = $assets . '/' . $caminho;
    if (!is_file($arquivo)) {
        throw new RuntimeException("Asset não encontrado: assets/$caminho");
    }

    return $caminho . '?v=' . substr(md5_file($arquivo), 0, 8);
}));

$twig->addGlobal('ano', date('Y'));

$dados = require $raiz . '/dados/conteudo.php';
file_put_contents($saida . '/index.html', $twig->render('index.html.twig', $dados));

printf("Site gerado em dist/ (%d arquivos)\n", contarArquivos($saida));

// ---------------------------------------------------------------------------

function apagarPasta(string $pasta): void
{
    if (!is_dir($pasta)) {
        return;
    }
    $itens = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($pasta, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($itens as $item) {
        $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
    }
    rmdir($pasta);
}

function copiarPasta(string $origem, string $destino): void
{
    mkdir($destino, 0777, true);
    $itens = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($origem, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($itens as $item) {
        $alvo = $destino . '/' . substr($item->getPathname(), strlen($origem) + 1);
        $item->isDir() ? @mkdir($alvo, 0777, true) : copy($item->getPathname(), $alvo);
    }
}

function contarArquivos(string $pasta): int
{
    return iterator_count(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pasta, FilesystemIterator::SKIP_DOTS)));
}
