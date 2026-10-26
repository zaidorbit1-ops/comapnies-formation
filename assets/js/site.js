(() => {
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  const mobileNavToggle = document.querySelector("[data-mobile-nav-toggle]");
  const siteNav = document.querySelector("#site-nav");
  const servicesDropdown = document.querySelector("[data-services-dropdown]");
  const servicesToggle = document.querySelector("[data-services-toggle]");

  const closeMobileNav = (restoreFocus = false) => {
    if (!mobileNavToggle || !siteNav) {
      return;
    }

    mobileNavToggle.setAttribute("aria-expanded", "false");
    mobileNavToggle.setAttribute("aria-label", "Open navigation menu");
    mobileNavToggle.querySelector(".material-symbols-outlined").textContent = "menu";
    siteNav.classList.remove("is-open");

    if (servicesDropdown && servicesToggle) {
      servicesDropdown.classList.remove("is-open");
      servicesToggle.setAttribute("aria-expanded", "false");
      servicesToggle.setAttribute("aria-label", "Show service links");
    }

    if (restoreFocus) {
      mobileNavToggle.focus();
    }
  };

  if (mobileNavToggle && siteNav) {
    mobileNavToggle.addEventListener("click", () => {
      const isOpen = mobileNavToggle.getAttribute("aria-expanded") === "true";
      mobileNavToggle.setAttribute("aria-expanded", String(!isOpen));
      mobileNavToggle.setAttribute("aria-label", isOpen ? "Open navigation menu" : "Close navigation menu");
      mobileNavToggle.querySelector(".material-symbols-outlined").textContent = isOpen ? "menu" : "close";
      siteNav.classList.toggle("is-open", !isOpen);

      if (isOpen) {
        closeMobileNav();
      }
    });

    siteNav.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => closeMobileNav());
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape" && mobileNavToggle.getAttribute("aria-expanded") === "true") {
        closeMobileNav(true);
      }
    });

    document.addEventListener("click", (event) => {
      if (
        mobileNavToggle.getAttribute("aria-expanded") === "true"
        && !siteNav.contains(event.target)
        && !mobileNavToggle.contains(event.target)
      ) {
        closeMobileNav();
      }
    });

    window.matchMedia("(min-width: 1024px)").addEventListener("change", (event) => {
      if (event.matches) {
        closeMobileNav();
      }
    });
  }

  if (servicesToggle && servicesDropdown) {
    servicesToggle.addEventListener("click", () => {
      const isOpen = servicesToggle.getAttribute("aria-expanded") === "true";
      servicesToggle.setAttribute("aria-expanded", String(!isOpen));
      servicesToggle.setAttribute("aria-label", isOpen ? "Show service links" : "Hide service links");
      servicesDropdown.classList.toggle("is-open", !isOpen);
    });
  }

  const testimonialCarousel = document.querySelector("[data-testimonial-carousel]");

  if (testimonialCarousel) {
    const track = testimonialCarousel.querySelector("[data-testimonial-track]");
    const cards = Array.from(track.children);
    const currentCount = testimonialCarousel.querySelector("[data-testimonial-current]");
    const totalCount = testimonialCarousel.querySelector("[data-testimonial-total]");
    const previousButton = testimonialCarousel.querySelector("[data-testimonial-prev]");
    const nextButton = testimonialCarousel.querySelector("[data-testimonial-next]");
    let visibleCards = 3;
    let activePage = 0;
    let resizeTimer;

    const getVisibleCards = () => {
      if (window.matchMedia("(max-width: 640px)").matches) {
        return 1;
      }
      if (window.matchMedia("(max-width: 1023px)").matches) {
        return 2;
      }
      return 3;
    };

    const updateCarousel = () => {
      visibleCards = getVisibleCards();
      const pageCount = Math.ceil(cards.length / visibleCards);
      activePage = Math.min(activePage, pageCount - 1);
      const firstCard = cards[activePage * visibleCards];
      const cardOffset = firstCard.offsetLeft;
      track.style.transform = `translateX(-${cardOffset}px)`;
      currentCount.textContent = String(activePage + 1).padStart(2, "0");
      totalCount.textContent = String(pageCount).padStart(2, "0");
      previousButton.disabled = pageCount < 2;
      nextButton.disabled = pageCount < 2;
    };

    previousButton.addEventListener("click", () => {
      activePage = (activePage - 1 + Math.ceil(cards.length / visibleCards)) % Math.ceil(cards.length / visibleCards);
      updateCarousel();
    });

    nextButton.addEventListener("click", () => {
      activePage = (activePage + 1) % Math.ceil(cards.length / visibleCards);
      updateCarousel();
    });

    window.addEventListener("resize", () => {
      window.clearTimeout(resizeTimer);
      resizeTimer = window.setTimeout(updateCarousel, 120);
    });

    updateCarousel();
  }

  document.querySelectorAll(
    ".surface-card, .pricing-card, #impact .grid > div, #accreditations .grid > div, #welcome .grid > div, main#main > section > div > .grid > div[class*='rounded-xl']"
  ).forEach((card) => card.classList.add("interactive-card"));

  if (reducedMotion.matches) {
    return;
  }

  const revealTargets = [];
  const sections = Array.from(document.querySelectorAll("main#main > section:not(#hero)"));

  sections.forEach((section, sectionIndex) => {
    const content = section.querySelector(":scope > .max-w-7xl");
    if (content) {
      const intro = content.firstElementChild;
      if (intro) {
        intro.classList.add("scroll-reveal", sectionIndex % 2 === 0 ? "reveal-from-left" : "reveal-from-right");
        revealTargets.push(intro);
      }
    }

    const cards = section.querySelectorAll(
      ".surface-card, .pricing-card, #impact .grid > div, #accreditations .grid > div, #welcome .grid > div"
    );
    cards.forEach((card, cardIndex) => {
      card.classList.add("interactive-card", "scroll-reveal", "reveal-card");
      card.style.setProperty("--reveal-delay", `${(cardIndex % 4) * 90}ms`);
      revealTargets.push(card);
    });
  });

  if (revealTargets.length === 0) {
    return;
  }

  document.documentElement.classList.add("has-reveal-animations");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("is-visible", entry.isIntersecting);
    });
  }, {
    threshold: 0.14,
    rootMargin: "0px 0px -8% 0px"
  });

  revealTargets.forEach((target) => observer.observe(target));
})();
