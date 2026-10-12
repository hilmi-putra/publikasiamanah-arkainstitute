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

document.querySelectorAll('.poster-preview-trigger').forEach((trigger) => {
  trigger.addEventListener('click', () => {
    const posterSrc = trigger.dataset.poster;
    const posterTitle = trigger.dataset.title;
    if (posterModal && posterModalImg && posterSrc) {
      posterModalImg.src = posterSrc;
      if (posterModalTitle) posterModalTitle.textContent = posterTitle || 'Call for Paper';
      posterModal.classList.remove('hidden');
    }
  });
});

posterModalClose?.addEventListener('click', () => {
  posterModal?.classList.add('hidden');
  if (posterModalImg) posterModalImg.src = '';
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
