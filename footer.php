    <?php wp_footer(); ?>
    <script>
        // plantas inicio
        let currentSlideplantas = 0;
        const slidesplantas = document.querySelectorAll('.carousel-slide');
        const totalSlidesplantas = slidesplantas.length;

        function showSlide(index) {
            slidesplantas.forEach(slide => slide.classList.remove('active'));
            currentSlideplantas = (index + totalSlidesplantas) % totalSlidesplantas;
            slidesplantas[currentSlideplantas].classList.add('active');
        }

        function moveSlide(direction) {
            showSlide(currentSlideplantas + direction);
        }

        // Iniciar o primeiro slide quando a página carrega
        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlideplantas);
        });
        // plantas fim


        // Seleciona os elementos
        var meusSlides = document.querySelectorAll('.slide-do-carousel');
        var botoesCirculares = document.querySelectorAll('.circulo-botao');
        var slideAtual = 0;

        // Função para atualizar o slide
        function atualizarSlide(indice) {
            var meuCarousel = document.querySelector('.meu-carousel');
            meuCarousel.style.transform = `translateX(-${indice * 100}%)`;

            // Atualizar o círculo ativo
            botoesCirculares.forEach(function(botao) {
                botao.classList.remove('ativo');
            });
            botoesCirculares[indice].classList.add('ativo');
        }

        // Adiciona o evento de clique para cada círculo
        botoesCirculares.forEach(function(botao, indice) {
            botao.addEventListener('click', function() {
                slideAtual = indice;
                atualizarSlide(slideAtual);
            });
        });

        // Inicializa o primeiro círculo como ativo
        atualizarSlide(slideAtual);
    </script>


    </body>

    </html>