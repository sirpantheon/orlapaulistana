document.addEventListener('DOMContentLoaded', function() {
    const panoramica = document.querySelector('.panoramica');
    const fotoPanoramicaDia = document.querySelector('.foto-panoramica-dia');
    const fotoPanoramicaNoite = document.querySelector('.foto-panoramica-noite');
    const textoBanner = document.querySelector('.texto-banner');
    const breakpoint = document.querySelector('#breakpoint');

    if (!panoramica || !fotoPanoramicaDia || !fotoPanoramicaNoite || !breakpoint) {
        console.error('Elementos necessários não foram encontrados na página.');
        return;
    }

    // Posição inicial da imagem equivalente ao mouse na extremidade esquerda da tela na versão desktop.
    const windowWidth = window.innerWidth;
    const imageWidthDia = fotoPanoramicaDia.clientWidth;
    const imageWidthNoite = fotoPanoramicaNoite.clientWidth;
    const maxTranslateXDia = (imageWidthDia - windowWidth) / 2;
    const maxTranslateXNoite = (imageWidthNoite - windowWidth) / 2;
    fotoPanoramicaDia.style.transform = `translateX(${maxTranslateXDia}px)`;
    fotoPanoramicaNoite.style.transform = `translateX(${maxTranslateXNoite}px)`;

    function handleScroll() {
        const scrollY = window.scrollY;
        const panoramicaTop = panoramica.getBoundingClientRect().top;
        const breakpointTop = breakpoint.getBoundingClientRect().top;
        const scrollRange = breakpointTop - panoramicaTop;
        let scrollFraction = Math.max(0, Math.min(1, scrollY / scrollRange));

        const imagePositionDia = scrollFraction * (maxTranslateXDia * 2) - maxTranslateXDia;
        const imagePositionNoite = scrollFraction * (maxTranslateXNoite * 2) - maxTranslateXNoite;
        fotoPanoramicaDia.style.transform = `translateX(${-imagePositionDia}px)`;
        fotoPanoramicaNoite.style.transform = `translateX(${-imagePositionNoite}px)`;

        // Parar a animação quando a div #breakpoint chegar ao topo da tela.
        if (breakpointTop <= 0) {
            window.removeEventListener('scroll', handleScroll);
        }
    }

    window.addEventListener('scroll', handleScroll);

    // Alternar a opacidade do banner ao tocar na imagem.
    let bannerVisible = false;
    panoramica.addEventListener('click', () => {
        bannerVisible = !bannerVisible;
        textoBanner.style.opacity = bannerVisible ? 1 : 0;
    });
});
