document.getElementById('toggle').addEventListener('change', function() {
    var body = document.body;
    var conteudo = document.getElementById('conteudo'); // O conteúdo principal do site

    // Aguarda 0.5 segundos antes de iniciar a transição
    setTimeout(function() {
        // Fase 1: Fade-out dos elementos (opacidade = 0)
        conteudo.style.transition = 'opacity 0.5s ease'; // Transição para fade-out
        conteudo.style.opacity = 0; // Desaparecer os elementos

        // Aguarda 0.5s (tempo do fade-out) antes de mudar o fundo e as classes
        setTimeout(function() {
            // Fase 2: Trocar a classe do body para "noite" e mudar o fundo
            body.style.transition = 'background-color 1s ease'; // Transição para o fundo
            body.classList.toggle('noite'); // Alterna entre 'dia' e 'noite'

            // Após o background mudar, traz os elementos de volta
            setTimeout(function() {
                // Fase 3: Fade-in dos elementos (opacidade = 1)
                conteudo.style.opacity = 1; // Reaparecer os elementos
            }, 500); // Espera o fundo mudar antes de dar fade-in
        }, 500); // Tempo para o fade-out inicial
    }, 500); // Atraso de 0.5s após o clique no botão
});
