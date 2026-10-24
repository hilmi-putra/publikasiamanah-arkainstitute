// Mobile Menu Toggle
const menuToggle = document.querySelector('#menu-toggle');
const mobileMenu = document.querySelector('#mobile-menu');
const menuIcon = document.querySelector('#menu-icon');

menuToggle?.addEventListener('click', () => {
  const isClosed = mobileMenu.classList.contains('hidden');
  mobileMenu.classList.toggle('hidden');
  if (menuIcon) {
    menuIcon.setAttribute('d', isClosed ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16');
  }
});

document.querySelectorAll('#mobile-menu a').forEach((link) => {
  link.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
    if (menuIcon) {
      menuIcon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
    }
  });
});

// Journal Catalog Filter
const filterButtons = document.querySelectorAll('.filter-btn');
const journalCards = document.querySelectorAll('.journal-card');

filterButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const filter = button.dataset.filter;

    filterButtons.forEach((item) => {
      item.classList.remove('active-filter', 'bg-arka-yellow', 'text-arka-dark', 'border-arka-yellow');
      item.classList.add('bg-[#F4F4F6]', 'text-neutral-600', 'border-neutral-200');
    });

    button.classList.add('active-filter', 'bg-arka-yellow', 'text-arka-dark', 'border-arka-yellow');
    button.classList.remove('bg-[#F4F4F6]', 'text-neutral-600', 'border-neutral-200');

    journalCards.forEach((card) => {
      const sinta = card.dataset.sinta;
      const isInternational = filter === 'Internasional' && (sinta === 'Internasional' || sinta === 'Q3 - Q4' || sinta?.includes('Scopus'));
      const matches = filter === 'all' || sinta === filter || isInternational;
      
      if (matches) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  });
});

// Poster Lightbox Modal
const posterModal = document.querySelector('#poster-modal');
const posterModalImg = document.querySelector('#poster-modal-img');
const posterModalTitle = document.querySelector('#poster-modal-title');
const posterModalClose = document.querySelector('#poster-modal-close');

function openPosterModal(posterSrc, posterTitle) {
  if (posterModal && posterModalImg && posterSrc) {
    posterModalImg.src = posterSrc;
    if (posterModalTitle) posterModalTitle.textContent = posterTitle || 'Call for Paper';
    posterModal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
}

document.querySelectorAll('.poster-preview-trigger').forEach((trigger) => {
  trigger.addEventListener('click', () => {
    const posterSrc = trigger.dataset.poster;
    const posterTitle = trigger.dataset.title;
    openPosterModal(posterSrc, posterTitle);
  });
});

posterModalClose?.addEventListener('click', () => {
  posterModal?.classList.add('hidden');
  if (posterModalImg) posterModalImg.src = '';
  document.body.style.overflow = '';
});

posterModal?.addEventListener('click', (e) => {
  if (e.target === posterModal) {
    posterModal.classList.add('hidden');
    if (posterModalImg) posterModalImg.src = '';
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && posterModal && !posterModal.classList.contains('hidden')) {
    posterModal.classList.add('hidden');
    if (posterModalImg) posterModalImg.src = '';
  }
});

// FAQ Accordion
document.querySelectorAll('.faq-trigger').forEach((trigger) => {
  trigger.addEventListener('click', () => {
    const item = trigger.closest('.faq-item');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon');
    const isOpen = trigger.getAttribute('aria-expanded') === 'true';

    trigger.setAttribute('aria-expanded', String(!isOpen));
    answer.classList.toggle('hidden', isOpen);
    icon.textContent = isOpen ? '+' : '−';
    icon.classList.toggle('bg-arka-yellow', !isOpen);
  });
});

// Scroll Reveal Observer
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));

// Hero Rotating Journal Card Slider
const heroSlides = document.querySelectorAll('.hero-slide');
const heroDots = document.querySelectorAll('.hero-dot');
let currentHeroSlide = 0;
let heroSliderInterval = null;

function showHeroSlide(index) {
  if (!heroSlides.length) return;
  currentHeroSlide = (index + heroSlides.length) % heroSlides.length;

  heroSlides.forEach((slide, i) => {
    if (i === currentHeroSlide) {
      slide.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
      slide.classList.add('opacity-100', 'z-10');
    } else {
      slide.classList.remove('opacity-100', 'z-10');
      slide.classList.add('opacity-0', 'pointer-events-none', 'z-0');
    }
  });

  heroDots.forEach((dot, i) => {
    if (i === currentHeroSlide) {
      dot.classList.add('bg-arka-yellow', 'w-5');
      dot.classList.remove('bg-white/60', 'w-2');
    } else {
      dot.classList.remove('bg-arka-yellow', 'w-5');
      dot.classList.add('bg-white/60', 'w-2');
    }
  });
}

function startHeroSlider() {
  if (heroSlides.length > 1) {
    if (heroSliderInterval) clearInterval(heroSliderInterval);
    heroSliderInterval = setInterval(() => {
      showHeroSlide(currentHeroSlide + 1);
    }, 2800);
  }
}

function pauseHeroSlider() {
  if (heroSliderInterval) {
    clearInterval(heroSliderInterval);
    heroSliderInterval = null;
  }
}

const sliderContainer = document.querySelector('#hero-journal-slider');
if (sliderContainer) {
  startHeroSlider();
  sliderContainer.addEventListener('mouseenter', pauseHeroSlider);
  sliderContainer.addEventListener('mouseleave', startHeroSlider);
}

// ==============================================
// Call For Paper 3D Infinite Centered Coverflow Carousel
// ==============================================
(function() {
  const cfpStage = document.querySelector('#cfp-stage');
  const cfpCards = document.querySelectorAll('.cfp-card');
  const cfpDots = document.querySelectorAll('.cfp-dot');
  const cfpPrev = document.querySelector('#cfp-prev');
  const cfpNext = document.querySelector('#cfp-next');

  if (!cfpStage || !cfpCards.length) return;

  let currentCfpSlide = 0;
  let cfpInterval = null;
  const total = cfpCards.length;

  function getStepSpacing() {
    const w = window.innerWidth;
    if (w < 640) return 210;       // Mobile
    if (w < 1024) return 300;      // Tablet
    return 390;                    // Desktop
  }

  function updateCfpCarousel(index) {
    currentCfpSlide = ((index % total) + total) % total;
    const step = getStepSpacing();
    const isMobile = window.innerWidth < 640;

    cfpCards.forEach((card, i) => {
      // Calculate shortest circular difference
      let diff = i - currentCfpSlide;
      while (diff > total / 2) diff -= total;
      while (diff < -total / 2) diff += total;

      const absDiff = Math.abs(diff);

      if (absDiff <= 2) {
        // Visible slots: diff = -2, -1, 0, 1, 2
        const translateX = diff * step;
        const scale = diff === 0 ? 1 : Math.max(0.72, 1 - absDiff * 0.14);
        const opacity = diff === 0 ? 1 : (isMobile && absDiff > 1 ? 0 : Math.max(0.3, 0.75 - (absDiff - 1) * 0.38));
        const blur = diff === 0 ? 0 : absDiff * 1.5;
        const zIndex = 25 - absDiff * 5;

        card.style.transform = `translate3d(${translateX}px, 0, 0) scale(${scale})`;
        card.style.opacity = opacity;
        card.style.filter = blur > 0 ? `blur(${blur}px)` : 'none';
        card.style.zIndex = zIndex;
        card.style.pointerEvents = 'auto';
        card.style.visibility = 'visible';
      } else {
        // Hidden slots beyond view
        const dir = diff > 0 ? 1 : -1;
        card.style.transform = `translate3d(${dir * step * 2.5}px, 0, 0) scale(0.6)`;
        card.style.opacity = '0';
        card.style.filter = 'blur(4px)';
        card.style.zIndex = '0';
        card.style.pointerEvents = 'none';
        card.style.visibility = 'hidden';
      }
    });

    // Update dot indicators
    cfpDots.forEach((dot, i) => {
      if (i === currentCfpSlide) {
        dot.classList.add('bg-arka-yellow', 'w-8');
        dot.classList.remove('bg-neutral-300', 'w-2.5');
      } else {
        dot.classList.remove('bg-arka-yellow', 'w-8');
        dot.classList.add('bg-neutral-300', 'w-2.5');
      }
    });
  }

  function startCfpSlider() {
    if (total > 1) {
      if (cfpInterval) clearInterval(cfpInterval);
      cfpInterval = setInterval(() => {
        updateCfpCarousel(currentCfpSlide + 1);
      }, 4000);
    }
  }

  function pauseCfpSlider() {
    if (cfpInterval) {
      clearInterval(cfpInterval);
      cfpInterval = null;
    }
  }

  // Card click behavior: side cards center themselves, active card opens lightbox
  cfpCards.forEach((card, i) => {
    card.addEventListener('click', (e) => {
      let diff = i - currentCfpSlide;
      while (diff > total / 2) diff -= total;
      while (diff < -total / 2) diff += total;

      if (diff !== 0) {
        e.stopPropagation();
        updateCfpCarousel(i);
        pauseCfpSlider();
        startCfpSlider();
      } else {
        const posterSrc = card.dataset.poster;
        const posterTitle = card.dataset.title;
        if (typeof openPosterModal === 'function') {
          openPosterModal(posterSrc, posterTitle);
        }
      }
    });
  });

  // Prev / Next button navigation
  cfpPrev?.addEventListener('click', () => {
    updateCfpCarousel(currentCfpSlide - 1);
    pauseCfpSlider();
    startCfpSlider();
  });

  cfpNext?.addEventListener('click', () => {
    updateCfpCarousel(currentCfpSlide + 1);
    pauseCfpSlider();
    startCfpSlider();
  });

  // Dot navigation
  cfpDots.forEach((dot) => {
    dot.addEventListener('click', () => {
      const idx = parseInt(dot.dataset.cfpDot, 10);
      updateCfpCarousel(idx);
      pauseCfpSlider();
      startCfpSlider();
    });
  });

  // Pause on hover
  cfpStage.closest('section')?.addEventListener('mouseenter', pauseCfpSlider);
  cfpStage.closest('section')?.addEventListener('mouseleave', startCfpSlider);

  // Touch / Swipe support
  let touchStartX = 0;
  let touchEndX = 0;

  cfpStage.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
    pauseCfpSlider();
  }, { passive: true });

  cfpStage.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    const diff = touchStartX - touchEndX;
    if (Math.abs(diff) > 40) {
      if (diff > 0) {
        updateCfpCarousel(currentCfpSlide + 1);
      } else {
        updateCfpCarousel(currentCfpSlide - 1);
      }
    }
    startCfpSlider();
  }, { passive: true });

  // Handle screen resize smoothly
  window.addEventListener('resize', () => {
    updateCfpCarousel(currentCfpSlide);
  });

  // Initialize
  updateCfpCarousel(0);
  startCfpSlider();
})();
