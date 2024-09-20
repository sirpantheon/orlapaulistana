document.addEventListener('DOMContentLoaded', function() {
    const panoramica = document.querySelector('.panoramica');
    const fotoPanoramicaDia = document.querySelector('.foto-panoramica-dia');
    const fotoPanoramicaNoite = document.querySelector('.foto-panoramica-noite');
    const textoBanner = document.querySelector('.texto-banner');

    if (!panoramica || !fotoPanoramicaDia || !fotoPanoramicaNoite) {
        console.error('Elementos necessários não foram encontrados na página.');
        return;
    }

    function handleMouseMove(event) {
        const rect = panoramica.getBoundingClientRect();
        const mouseX = event.clientX - rect.left;
        const windowWidth = rect.width;
        const imageWidthDia = fotoPanoramicaDia.clientWidth;
        const imageWidthNoite = fotoPanoramicaNoite.clientWidth;
        const maxTranslateXDia = (imageWidthDia - windowWidth) / 2;
        const maxTranslateXNoite = (imageWidthNoite - windowWidth) / 2;
        let imagePositionDia = ((mouseX / windowWidth) * 2 - 1) * maxTranslateXDia;
        let imagePositionNoite = ((mouseX / windowWidth) * 2 - 1) * maxTranslateXNoite;
        imagePositionDia = Math.max(-maxTranslateXDia, Math.min(maxTranslateXDia, imagePositionDia));
        imagePositionNoite = Math.max(-maxTranslateXNoite, Math.min(maxTranslateXNoite, imagePositionNoite));
        fotoPanoramicaDia.style.transform = `translateX(${-imagePositionDia}px)`;
        fotoPanoramicaNoite.style.transform = `translateX(${-imagePositionNoite}px)`;
    }

    panoramica.addEventListener('mousemove', handleMouseMove);
    panoramica.addEventListener('mouseenter', () => {
        textoBanner.style.opacity = 1;
    });
    panoramica.addEventListener('mouseleave', () => {
        fotoPanoramicaDia.style.transform = 'translateX(0)';
        fotoPanoramicaNoite.style.transform = 'translateX(0)';
        textoBanner.style.opacity = 0;
    });
});
