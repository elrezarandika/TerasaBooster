import './bootstrap';
import Alpine from 'alpinejs';

// Initialize Alpine.js
window.Alpine = Alpine;
Alpine.start();

// ========================================
// Animasi Dekoratif - Hearts & Leaves
// ========================================

function buatAnimasiDekoratif() {
    const container = document.getElementById('animasi-dekoratif');
    if (!container) return;

    // Buat hearts
    for (let i = 0; i < 15; i++) {
        setTimeout(() => {
            buatHeart(container);
        }, i * 800);
    }

    // Buat leaves
    for (let i = 0; i < 10; i++) {
        setTimeout(() => {
            buatLeaf(container);
        }, i * 1200);
    }

    // Loop terus menerus
    setInterval(() => {
        buatHeart(container);
    }, 2000);

    setInterval(() => {
        buatLeaf(container);
    }, 3000);
}

function buatHeart(container) {
    const heart = document.createElement('div');
    heart.className = 'heart';
    heart.innerHTML = '♥';
    heart.style.left = Math.random() * 100 + 'vw';
    heart.style.animationDuration = (Math.random() * 5 + 5) + 's';
    heart.style.fontSize = (Math.random() * 20 + 15) + 'px';
    heart.style.opacity = Math.random() * 0.4 + 0.2;
    
    container.appendChild(heart);
    
    // Hapus setelah animasi selesai
    setTimeout(() => {
        heart.remove();
    }, 10000);
}

function buatLeaf(container) {
    const leaf = document.createElement('div');
    leaf.className = 'leaf';
    leaf.innerHTML = '🍃';
    leaf.style.left = Math.random() * 100 + 'vw';
    leaf.style.animationDuration = (Math.random() * 6 + 6) + 's';
    leaf.style.fontSize = (Math.random() * 15 + 12) + 'px';
    leaf.style.opacity = Math.random() * 0.3 + 0.2;
    
    container.appendChild(leaf);
    
    setTimeout(() => {
        leaf.remove();
    }, 12000);
}

// ========================================
// Scroll Hint
// ========================================

function setupScrollHint() {
    const scrollHint = document.getElementById('scroll-hint');
    if (!scrollHint) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            scrollHint.style.opacity = '0';
        } else {
            scrollHint.style.opacity = '1';
        }
    });

    scrollHint.addEventListener('click', () => {
        window.scrollTo({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    });
}

// ========================================
// Smooth Scroll untuk Navigation
// ========================================

function setupSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ========================================
// Navbar Scroll Effect - Transparent on scroll
// ========================================

function setupNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    // Set initial state
    if (window.scrollY <= 50) {
        navbar.classList.add('navbar-transparent');
    }

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.remove('navbar-transparent');
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.classList.add('navbar-transparent');
        }
    });
}

// ========================================
// Fade In Animation Observer
// ========================================

function setupFadeInAnimations() {
    const fadeElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .fade-in-scale');
    
    if (!fadeElements.length) return;

    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };

    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Optional: unobserve after animation
                // fadeObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    fadeElements.forEach(el => {
        fadeObserver.observe(el);
    });

    // Trigger visible for elements already in view on load
    setTimeout(() => {
        fadeElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                el.classList.add('visible');
            }
        });
    }, 100);
}

// ========================================
// Rating Stars Interactive
// ========================================

function setupRatingStars() {
    const ratingInputs = document.querySelectorAll('.rating-input');
    
    ratingInputs.forEach(container => {
        const stars = container.querySelectorAll('.star');
        const input = container.querySelector('input[name="rating"]');
        
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                input.value = index + 1;
                updateStars(stars, index + 1);
            });
            
            star.addEventListener('mouseenter', () => {
                updateStars(stars, index + 1);
            });
        });
        
        container.addEventListener('mouseleave', () => {
            updateStars(stars, parseInt(input.value) || 0);
        });
    });
}

function updateStars(stars, rating) {
    stars.forEach((star, index) => {
        if (index < rating) {
            star.classList.add('text-yellow-400');
            star.classList.remove('text-gray-300');
        } else {
            star.classList.remove('text-yellow-400');
            star.classList.add('text-gray-300');
        }
    });
}

// ========================================
// Initialize All
// ========================================

document.addEventListener('DOMContentLoaded', () => {
    buatAnimasiDekoratif();
    setupScrollHint();
    setupSmoothScroll();
    setupNavbar();
    setupRatingStars();
    setupFadeInAnimations();
});

