    <?php wp_footer(); ?>
    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-item');
            const dots = document.querySelectorAll('.dot');

            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }

            slides.forEach((slide, i) => {
                slide.style.display = (i === currentSlide) ? 'block' : 'none';
            });

            dots.forEach((dot, i) => {
                dot.className = (i === currentSlide) ? 'dot active' : 'dot';
            });
        }

        function moveSlide(n) {
            showSlide(currentSlide + n);
        }

        function setSlide(index) {
            showSlide(index);
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlide);
        });
    </script>


    </body>

    </html>