// Swiper Slider Initialization
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    keyboard: { enabled: true },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: '.custom-next',
      prevEl: '.custom-prev',
    },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 30 },
    },
  });
});

// Scroll to FAQ section
function scrollToFAQ() {
  document.querySelector('#faq-section').scrollIntoView({ behavior: 'smooth' });
}

// Accordion Logic
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach((item) => {
  const question = item.querySelector('.faq-question');
  question.addEventListener('click', () => {
    const answer = item.querySelector('.faq-answer');
    const icon = question.querySelector('i');

    // Close others
    faqItems.forEach((i) => {
      if (i !== item) {
        i.querySelector('.faq-answer').classList.add('hidden');
        i.querySelector('.faq-question i').classList.replace(
          'ri-subtract-line',
          'ri-add-line'
        );
      }
    });

    // Toggle current
    answer.classList.toggle('hidden');
    icon.classList.toggle('ri-add-line');
    icon.classList.toggle('ri-subtract-line');
  });
});

// Highlight selected category (UI only)
const categoryBtns = document.querySelectorAll('.category-btn');
categoryBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    categoryBtns.forEach((b) => b.classList.remove('text-yellow-600', 'font-semibold'));
    btn.classList.add('text-yellow-600', 'font-semibold');
  });
});

// Menu Button Toggle
const menuBtn = document.getElementById('menu-btn');
const closeMenu = document.getElementById('close-menu');
const mobileMenu = document.getElementById('mobile-menu');
const overlay = document.getElementById('overlay');

// Open sidebar
menuBtn.addEventListener('click', () => {
  mobileMenu.classList.remove('-translate-x-full');
  overlay.classList.remove('hidden');
});

// Close sidebar
function closeSidebar() {
  mobileMenu.classList.add('-translate-x-full');
  overlay.classList.add('hidden');
}

// Close on overlay click
overlay.addEventListener('click', closeSidebar);

// Close on close icon click
closeMenu.addEventListener('click', closeSidebar);
