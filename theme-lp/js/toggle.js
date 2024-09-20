document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('toggle');
    const themeStyle = document.getElementById('theme-style');
    const baseForm = document.getElementById('base-form');

    function applyBlurOut(elements) {
        return anime({
            targets: elements,
            opacity: 0,
            filter: 'blur(5px)',
            duration: 300,
            easing: 'easeInOutQuad'
        }).finished;
    }

    function applyBlurIn(elements) {
        return anime({
            targets: elements,
            opacity: 1,
            filter: 'blur(0px)',
            duration: 300,
            easing: 'easeInOutQuad'
        }).finished;
    }

    function applyFadeOut(elements) {
        return anime({
            targets: elements,
            opacity: 0,
            duration: 100,
            easing: 'easeInOutQuad'
        }).finished;
    }

    function applyFadeIn(elements) {
        return anime({
            targets: elements,
            opacity: 1,
            duration: 100,
            easing: 'easeInOutQuad'
        }).finished;
    }

    let isTransitioning = false;

    function switchTheme(isNight) {
        if (isTransitioning) return;
        isTransitioning = true;

        const elementsToFade = document.querySelectorAll('.content, .intro, .descricao, .line-bottom, .textura-panoramica_topo-dia, .textura-panoramica_topo-noite, .textura-panoramica_baixo-dia, .textura-panoramica_baixo-noite');
        const fotoPanoramicaDia = document.querySelector('.foto-panoramica-dia');
        const fotoPanoramicaNoite = document.querySelector('.foto-panoramica-noite');

        applyBlurOut(fotoPanoramicaDia);
        applyBlurOut(fotoPanoramicaNoite);

        setTimeout(() => {
            applyFadeOut(elementsToFade).then(() => {
                document.body.classList.toggle('theme-day', !isNight);
                document.body.classList.toggle('theme-night', isNight);
                themeStyle.href = isNight ? '/wp-content/themes/orla-lp/css/noite.css?v=07082024_final4' : '/wp-content/themes/orla-lp/css/dia.css?v=07082024_final4';

                applyFadeIn(elementsToFade).then(() => {
                    applyBlurIn(fotoPanoramicaDia);
                    applyBlurIn(fotoPanoramicaNoite);
                    isTransitioning = false;
                });
            });
        }, 500);
    }

    toggle.addEventListener('change', function () {
        switchTheme(this.checked);
    });

    document.body.classList.add('theme-day');
});
