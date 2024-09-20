document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('toggle');
    const themeStyle = document.getElementById('theme-style');
    const baseForm = document.getElementById('base-form');
    const selects = document.querySelectorAll('.wpcf7-select');
    const submitButtons = document.querySelectorAll('.wpcf7-submit, .wpcf7-form-control.wpcf7-submit.has-spinner');
    const footerLinks = document.querySelectorAll('footer .botao-footer a');
    const footerButtons = document.querySelectorAll('footer .botao-footer button');

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
                themeStyle.href = isNight ? '/wp-content/themes/orla-lp/css/noite.css?v=07082024_final' : '/wp-content/themes/orla-lp/css/dia.css?v=2';

                baseForm.style.backgroundColor = isNight ? '#4b4747' : '#e9e9e5';

                selects.forEach(select => {
                    select.style.backgroundImage = isNight ? 'url(/wp-content/themes/orla-lp/images/layouts/seta-noite.svg)' : 'url(/wp-content/themes/orla-lp/images/layouts/seta-dia.svg)';
                    select.style.color = isNight ? '#fff' : '#000';
                });

                submitButtons.forEach(button => {
                    button.style.color = isNight ? '#a09a98' : '#4b4747';
                    button.style.backgroundColor = isNight ? '#4b4747' : '#eaeae6';
                    button.style.borderColor = isNight ? '#a09a98' : '#4b4747';
                    button.style.cursor = 'pointer';
                    button.style.transition = 'border-color 0.3s ease, color 0.3s ease, background-color 0.3s ease';
                });

                footerLinks.forEach(link => {
                    link.style.transition = 'border-color 0.3s ease, color 0.3s ease, background-color 0.3s ease';
                    link.style.borderColor = isNight ? '#a09a98' : '#4b4747';
                    link.style.color = isNight ? '#eaeae6' : '#4b4747';
                    link.style.backgroundColor = isNight ? '#4b4747' : '#eaeae6';
                });

                footerButtons.forEach(button => {
                    button.style.transition = 'border-color 0.3s ease, color 0.3s ease, background-color 0.3s ease';
                    button.style.borderColor = isNight ? '#a09a98' : '#4b4747';
                    button.style.color = isNight ? '#eaeae6' : '#4b4747';
                    button.style.backgroundColor = isNight ? '#4b4747' : '#eaeae6';
                });

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
