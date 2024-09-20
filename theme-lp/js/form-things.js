document.addEventListener('DOMContentLoaded', function () {
    const botaoForm = document.getElementById('botao-form');
    const baseForm = document.getElementById('base-form');
    const botaoFechar = document.getElementById('botao-fechar');

    botaoForm.addEventListener('click', function () {
        baseForm.classList.add('show');
    });

    botaoFechar.addEventListener('click', function () {
        baseForm.classList.remove('show');
    });
});
