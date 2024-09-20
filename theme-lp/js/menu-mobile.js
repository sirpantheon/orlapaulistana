document.addEventListener("DOMContentLoaded", function () {
    const botaoMenu = document.getElementById('botao-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    botaoMenu.addEventListener('click', function () {
        botaoMenu.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });
});
