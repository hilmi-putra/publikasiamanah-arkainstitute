const menuToggle = document.querySelector('#menu-toggle');
const mobileMenu = document.querySelector('#mobile-menu');

menuToggle?.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

document.querySelectorAll('#mobile-menu a').forEach((link) => {
  link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
});

const filterButtons = document.querySelectorAll('.filter-btn');
const journalCards = document.querySelectorAll('.journal-card');

filterButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const filter = button.dataset.filter;
    filterButtons.forEach((item) => item.classList.remove('active-filter', 'bg-lime', 'text-ink'));
    button.classList.add('active-filter', 'bg-lime', 'text-ink');

    journalCards.forEach((card) => {
      const isInternational = filter === 'Internasional' && card.dataset.sinta === 'Q3 - Q4';
      const matches = filter === 'all' || card.dataset.sinta === filter || isInternational;
      card.hidden = !matches;
    });
  });
});

document.querySelectorAll('.faq-trigger').forEach((trigger) => {
  trigger.addEventListener('click', () => {
    const item = trigger.closest('.faq-item');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon');
    const isOpen = trigger.getAttribute('aria-expanded') === 'true';

    trigger.setAttribute('aria-expanded', String(!isOpen));
    answer.classList.toggle('hidden', isOpen);
    icon.textContent = isOpen ? '+' : '−';
  });
});

const lightbox = document.querySelector('#lightbox');
const lightboxImage = document.querySelector('#lightbox-image');

document.querySelectorAll('[data-lightbox]').forEach((button) => {
  button.addEventListener('click', () => {
    lightboxImage.src = button.dataset.lightbox;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
  });
});

document.querySelector('#lightbox-close')?.addEventListener('click', () => {
  lightbox.classList.add('hidden');
  lightbox.classList.remove('flex');
});

lightbox?.addEventListener('click', (event) => {
  if (event.target === lightbox) {
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
  }
});

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));
