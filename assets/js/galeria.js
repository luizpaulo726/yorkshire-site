// Visualizador da galeria: abre a foto grande, navega com as setas e fecha com Esc.
(function () {
    const itens = Array.from(document.querySelectorAll('.galeria__item'));
    const visualizador = document.getElementById('visualizador');
    if (!itens.length || !visualizador || typeof visualizador.showModal !== 'function') {
        return; // navegador sem suporte a <dialog>: as fotos continuam visíveis na página
    }

    const imagem = document.getElementById('visualizador-imagem');
    const legenda = document.getElementById('visualizador-legenda');
    let atual = 0;
    let quemAbriu = null;

    function mostrar(indice) {
        atual = (indice + itens.length) % itens.length;
        const item = itens[atual];
        imagem.src = item.dataset.grande;
        imagem.alt = item.querySelector('img').alt;
        legenda.textContent = item.dataset.legenda;
    }

    itens.forEach(function (item, indice) {
        item.addEventListener('click', function () {
            quemAbriu = item;
            mostrar(indice);
            visualizador.showModal();
        });
    });

    document.getElementById('visualizador-anterior').addEventListener('click', function () { mostrar(atual - 1); });
    document.getElementById('visualizador-proxima').addEventListener('click', function () { mostrar(atual + 1); });
    document.getElementById('visualizador-fechar').addEventListener('click', function () { visualizador.close(); });

    // Clicar fora da foto fecha
    visualizador.addEventListener('click', function (evento) {
        if (evento.target === visualizador) visualizador.close();
    });

    visualizador.addEventListener('keydown', function (evento) {
        if (evento.key === 'ArrowLeft') mostrar(atual - 1);
        if (evento.key === 'ArrowRight') mostrar(atual + 1);
    });

    // Devolve o foco para a foto que abriu o visualizador (acessibilidade)
    visualizador.addEventListener('close', function () {
        if (quemAbriu) quemAbriu.focus();
    });
})();
