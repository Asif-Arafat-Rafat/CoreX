let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');
const radios = document.querySelectorAll('.carousel-indicators input[type="radio"]');

function showSlide(index) {
    if (index >= slides.length) index = 0;
    if (index < 0) index = slides.length - 1;
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${index * 100}%)`;
    });
    radios.forEach((radio, i) => {
        radio.checked = i === index;
    });
    currentSlide = index;
}

function moveSlide(step) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    currentSlide = (currentSlide + step + totalSlides) % totalSlides;
    updateCarousel();}

    function jumpToSlide(index) {
        currentSlide = index;
        updateCarousel();
    }

// Initialize the carousel
function updateCarousel() {
    const carousel = document.querySelector('.carousel');
    const slideWidth = document.querySelector('.carousel-item').offsetWidth;
    carousel.style.transform = `translateX(-${currentSlide * slideWidth}px)`;

    // Update radio buttons
    const radios = document.querySelectorAll('.carousel-indicators input[type="radio"]');
    radios.forEach((radio, index) => {
        radio.checked = index === currentSlide;
    });
}

// Initial call to set up the carousel
updateCarousel();
