document.addEventListener('DOMContentLoaded', function() {
    const panoramica = document.querySelector('.panoramica');
    const fotoPanoramicaDia = document.querySelector('.foto-panoramica-dia');
    const fotoPanoramicaNoite = document.querySelector('.foto-panoramica-noite');
    const textoBanner = document.querySelector('.texto-banner');
    const breakpoint = document.getElementById('breakpoint');

    if (!panoramica || !fotoPanoramicaDia || !fotoPanoramicaNoite || !breakpoint) {
        console.error('Elementos necessários não foram encontrados na página.');
        return;
    }

    let bannerVisible = false;

    function handleScroll() {
        const rect = panoramica.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const breakpointRect = breakpoint.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        const docHeight = document.documentElement.scrollHeight;
        const scrollProgress = scrollTop / (docHeight - windowHeight);

        const imageWidthDia = fotoPanoramicaDia.clientWidth;
        const imageWidthNoite = fotoPanoramicaNoite.clientWidth;
        const maxTranslateXDia = (imageWidthDia - rect.width) / 2;
        const maxTranslateXNoite = (imageWidthNoite - rect.width) / 2;

        let imagePositionDia = scrollProgress * 2 * maxTranslateXDia - maxTranslateXDia;
        let imagePositionNoite = scrollProgress * 2 * maxTranslateXNoite - maxTranslateXNoite;

        imagePositionDia = Math.max(-maxTranslateXDia, Math.min(maxTranslateXDia, imagePositionDia));
        imagePositionNoite = Math.max(-maxTranslateXNoite, Math.min(maxTranslateXNoite, imagePositionNoite));

        fotoPanoramicaDia.style.transform = `translateX(${-imagePositionDia}px)`;
        fotoPanoramicaNoite.style.transform = `translateX(${-imagePositionNoite}px)`;
    }

    function toggleBanner() {
        bannerVisible = !bannerVisible;
        textoBanner.style.opacity = bannerVisible ? 1 : 0;
    }

    window.addEventListener('scroll', handleScroll);
    panoramica.addEventListener('click', toggleBanner);

    // Initialize positions
    handleScroll();
});
