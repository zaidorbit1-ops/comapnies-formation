(() => {
  const slider = document.querySelector(".home-slider");
  if (!slider) {
    return;
  }

  const slides = Array.from(slider.querySelectorAll(".home-slider__slide"));
  const indicators = Array.from(slider.querySelectorAll("[data-slide-to]"));
  const currentCount = slider.querySelector("[data-slide-current]");
  const previousButton = slider.querySelector("[data-slide-prev]");
  const nextButton = slider.querySelector("[data-slide-next]");
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  const interval = 6000;
  let activeIndex = 0;
  let timer;
  let touchStartX = null;

  const showSlide = (index) => {
    activeIndex = (index + slides.length) % slides.length;

    slides.forEach((slide, slideIndex) => {
      const isActive = slideIndex === activeIndex;
      slide.classList.toggle("is-active", isActive);
      slide.setAttribute("aria-hidden", String(!isActive));
      slide.inert = !isActive;
    });

    indicators.forEach((indicator, indicatorIndex) => {
      const isActive = indicatorIndex === activeIndex;
      indicator.classList.toggle("is-active", isActive);
      indicator.setAttribute("aria-current", String(isActive));
    });

    currentCount.textContent = String(activeIndex + 1).padStart(2, "0");
    const activeProgress = indicators[activeIndex].querySelector("span");
    if (activeProgress) {
      activeProgress.style.animation = "none";
      activeProgress.offsetWidth;
      activeProgress.style.animation = "";
    }
  };

  const stopAutoplay = () => {
    window.clearTimeout(timer);
  };

  const startAutoplay = () => {
    stopAutoplay();
    const shouldPause = reducedMotion.matches || document.hidden;
    slider.classList.toggle("is-paused", shouldPause);
    if (shouldPause) {
      return;
    }

    showSlide(activeIndex);
    timer = window.setTimeout(() => {
      showSlide(activeIndex + 1);
      startAutoplay();
    }, interval);
  };

  slider.addEventListener("click", (event) => {
    const target = event.target;
    if (!(target instanceof Element)) {
      return;
    }

    const indicator = target.closest("[data-slide-to]");
    if (indicator && slider.contains(indicator)) {
      showSlide(Number(indicator.dataset.slideTo));
      startAutoplay();
      return;
    }

    if (target.closest("[data-slide-prev]")) {
      showSlide(activeIndex - 1);
      startAutoplay();
    } else if (target.closest("[data-slide-next]")) {
      showSlide(activeIndex + 1);
      startAutoplay();
    }
  });

  slider.addEventListener("touchstart", (event) => {
    touchStartX = event.changedTouches[0].clientX;
  }, { passive: true });

  slider.addEventListener("touchend", (event) => {
    if (touchStartX === null) {
      return;
    }

    const swipeDistance = event.changedTouches[0].clientX - touchStartX;
    touchStartX = null;
    if (Math.abs(swipeDistance) < 50) {
      return;
    }

    showSlide(activeIndex + (swipeDistance < 0 ? 1 : -1));
    startAutoplay();
  }, { passive: true });

  document.addEventListener("visibilitychange", startAutoplay);
  reducedMotion.addEventListener("change", startAutoplay);
  showSlide(0);
  startAutoplay();
})();
