let currentSlide = 0;
const slides = document.querySelectorAll('plantas-carousel-slide');
const totalSlides = slides.length;

function showSlide(index) {
  // Remove a classe 'active' de todos os slides
  slides.forEach(slide => slide.classList.remove('active'));

  // Garante que o índice é circular (0...totalSlides-1)
  currentSlide = (index + totalSlides) % totalSlides;

  // Mostra o slide atual
  slides[currentSlide].classList.add('active');
}

function moveSlide(direction) {
  showSlide(currentSlide + direction);
}

// Inicializa o primeiro slide
showSlide(currentSlide);