document.addEventListener('DOMContentLoaded', function() {
  const container = document.querySelector('.carousel-container');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');

  let slideIndex = 0;

  function showSlides() {
    container.style.transform = `translateX(-${slideIndex * 100}%)`;
    toggleButtons();
  }

  function toggleButtons() {
    if (slideIndex === 0) {
      prevBtn.style.opacity = '0';
    } else {
      prevBtn.style.opacity = '1';
    }

    if (slideIndex === container.children.length - 1) {
      nextBtn.style.opacity = '0';
    } else {
      nextBtn.style.opacity = '1';
    }
  }

  function nextSlide() {
    if (slideIndex < container.children.length - 1) {
      slideIndex++;
      showSlides();
    }
  }

  function prevSlide() {
    if (slideIndex > 0) {
      slideIndex--;
      showSlides();
    }
  }

  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);

  // Initial toggle for buttons
  toggleButtons();
});
