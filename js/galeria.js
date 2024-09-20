// galeria inicio
let currentSlideGaleria = 0;
const slidesGaleria = document.querySelectorAll('.galeria-carousel-slide');
const totalSlidesGaleria = slidesGaleria.length;

function showSlide(index) {
    slidesGaleria.forEach(slide => slide.classList.remove('active'));
    currentSlideGaleria = (index + totalSlidesGaleria) % totalSlidesGaleria;
    slidesGaleria[currentSlideGaleria].classList.add('active');
}

function moveSlide(direction) {
    showSlide(currentSlideGaleria + direction);
}

// Iniciar o primeiro slide quando a página carrega
document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlideGaleria);
});
// galeria fim