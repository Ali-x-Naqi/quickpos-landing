// script.js — QuickPOS Landing Page Interactions

// ===== Navbar scroll effect =====
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 20) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// ===== Mobile menu toggle =====
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');

hamburger.addEventListener('click', () => {
  mobileMenu.classList.toggle('open');
});

function closeMobile() {
  mobileMenu.classList.remove('open');
}

// Close mobile menu on outside click
document.addEventListener('click', (e) => {
  if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
    mobileMenu.classList.remove('open');
  }
});

// ===== Smooth active nav link highlight =====
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-links a');

function highlightNav() {
  const scrollPos = window.scrollY + 100;
  sections.forEach(section => {
    const top = section.offsetTop;
    const bottom = top + section.offsetHeight;
    const id = section.getAttribute('id');
    if (scrollPos >= top && scrollPos < bottom) {
      navLinks.forEach(link => {
        link.classList.remove('active-link');
        if (link.getAttribute('href') === `#${id}`) {
          link.classList.add('active-link');
        }
      });
    }
  });
}
window.addEventListener('scroll', highlightNav);

// ===== Intersection Observer — animate sections on scroll =====
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -60px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

// Add animation class to cards
document.querySelectorAll('.feature-card, .pricing-card, .stat').forEach((el, i) => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(32px)';
  el.style.transition = `opacity 0.5s ${i * 0.08}s ease, transform 0.5s ${i * 0.08}s ease`;
  el.classList.add('anim-el');
  observer.observe(el);
});

// Update observer to set visible styles
const cardObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
      cardObserver.unobserve(entry.target);
    }
  });
}, observerOptions);

document.querySelectorAll('.anim-el').forEach(el => cardObserver.observe(el));

// ===== Animated counter for hero stats =====
function animateCounter(el, target, suffix = '') {
  const duration = 1500;
  const start = performance.now();
  const isDecimal = target.toString().includes('.');
  
  function update(time) {
    const elapsed = time - start;
    const progress = Math.min(elapsed / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
    const current = eased * parseFloat(target);
    el.textContent = (isDecimal ? current.toFixed(1) : Math.floor(current)) + suffix;
    if (progress < 1) requestAnimationFrame(update);
  }
  requestAnimationFrame(update);
}

const statsObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const numEl = entry.target.querySelector('.stat-num');
      if (numEl && !numEl.dataset.animated) {
        numEl.dataset.animated = 'true';
        const text = numEl.textContent;
        const num = parseFloat(text);
        const suffix = text.replace(/[\d.]/g, '');
        animateCounter(numEl, num, suffix);
      }
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.stat').forEach(el => statsObserver.observe(el));

// ===== Pricing card hover glow =====
document.querySelectorAll('.pricing-card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width) * 100;
    const y = ((e.clientY - rect.top) / rect.height) * 100;
    card.style.setProperty('--mouse-x', `${x}%`);
    card.style.setProperty('--mouse-y', `${y}%`);
  });
});

// ===== Form validation client-side =====
const form = document.querySelector('.contact-form');
if (form) {
  form.addEventListener('submit', (e) => {
    const name = form.querySelector('#name').value.trim();
    const email = form.querySelector('#email').value.trim();
    const message = form.querySelector('#message').value.trim();
    
    // Clear previous errors
    form.querySelectorAll('.field-error').forEach(el => el.remove());
    
    let hasError = false;
    
    if (!name) {
      showError(form.querySelector('#name'), 'Please enter your name');
      hasError = true;
    }
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showError(form.querySelector('#email'), 'Please enter a valid email');
      hasError = true;
    }
    if (!message || message.length < 10) {
      showError(form.querySelector('#message'), 'Message must be at least 10 characters');
      hasError = true;
    }
    
    if (hasError) {
      e.preventDefault();
    } else {
      const btn = form.querySelector('.btn-submit');
      btn.textContent = 'Sending...';
      btn.disabled = true;
    }
  });
}

function showError(input, message) {
  const errorEl = document.createElement('span');
  errorEl.className = 'field-error';
  errorEl.style.cssText = 'color:#EF4444;font-size:0.8rem;margin-top:4px;display:block';
  errorEl.textContent = message;
  input.parentElement.appendChild(errorEl);
  input.style.borderColor = '#EF4444';
  input.addEventListener('input', () => {
    input.style.borderColor = '';
    errorEl.remove();
  }, { once: true });
}
