const slides = document.querySelectorAll('.slider__item')

function clearActive() {
  slides.forEach((slide) => {
    slide.classList.remove('active')
  })
}

slides.forEach((slide) => {
  slide.addEventListener('click', (e) => {
    clearActive()
    e.target.classList.add('active')

  })
})