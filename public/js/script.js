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

// Smooth Scroll Logic
document.getElementById('contact-link').addEventListener('click', function(e) {
    e.preventDefault(); // prevent the default jump
    document.querySelector('#contact').scrollIntoView({
      behavior: 'smooth'
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
