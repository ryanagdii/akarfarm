import 'bootstrap';
import '../css/app.css';



// Navbar scroll effect
window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    const logo = document.getElementById("navbarLogo");
    const button = document.getElementById("akarbtn");
  
    if (window.scrollY > 50) {
      navbar.classList.add("navbar-scrolled");
      logo.style.filter = "brightness(0)"; // logo hitam
      button.classList.add("akar-btn-scrolled");
    } else {
      navbar.classList.remove("navbar-scrolled");
      logo.style.filter = "none";
      button.classList.remove("akar-btn-scrolled");
    }
  });

// LAZY LOAD IMAGES & VIDEO
document.addEventListener("DOMContentLoaded", () => {
    const lazyMedia = document.querySelectorAll("img.lazy-img, video.lazy-video");

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const src = el.getAttribute("data-src");
                if (src) {
                    if (el.tagName === "VIDEO") {
                        el.src = src;
                        el.load();
                        el.play().catch(() => {});
                    } else {
                        el.src = src;
                    }
                    el.removeAttribute("data-src");
                }
                obs.unobserve(el);
            }
        });
    });

    lazyMedia.forEach(el => observer.observe(el));
});

// 🌿 Smooth horizontal drag scroll for plants
document.addEventListener("DOMContentLoaded", () => {
    const scrollContainer = document.getElementById("plantsScroll");
    let isDown = false;
    let startX;
    let scrollLeft;

    scrollContainer.addEventListener("mousedown", (e) => {
        isDown = true;
        scrollContainer.classList.add("active");
        startX = e.pageX - scrollContainer.offsetLeft;
        scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener("mouseleave", () => {
        isDown = false;
        scrollContainer.classList.remove("active");
    });

    scrollContainer.addEventListener("mouseup", () => {
        isDown = false;
        scrollContainer.classList.remove("active");
    });

    scrollContainer.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scrollContainer.offsetLeft;
        const walk = (x - startX) * 1.5; // speed factor
        scrollContainer.scrollLeft = scrollLeft - walk;
    });
});

// ===== HERO CAPTION TEXT CAROUSEL =====
document.addEventListener('DOMContentLoaded', () => {
    const captions = [
        "Solusi Pangan",
        "Bisnis",
        "Energi Terbarukan",
        "Kualitas Hidup Terbaik Untukmu"
    ];

    let index = 0;
    const captionElement = document.getElementById("captionText");

    if (captionElement) {
        setInterval(() => {
            index = (index + 1) % captions.length;
            captionElement.style.opacity = 0;
            setTimeout(() => {
                captionElement.textContent = captions[index];
                captionElement.style.opacity = 1;
            }, 500);
        }, 2500);
    }
});

