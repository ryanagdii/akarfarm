import 'bootstrap';
import '../css/app.css';


document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        once: true,            // animasi hanya terjadi sekali
        duration: 1000,         // durasi animasi (ms)
        easing: 'ease-in-out', // efek transisi halus
        offset: 100,           // jarak sebelum animasi mulai (px)
    });
});

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
// document.addEventListener("DOMContentLoaded", () => {
//     const lazyMedia = document.querySelectorAll("img.lazy-img, video.lazy-video");

//     const observer = new IntersectionObserver((entries, obs) => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 const el = entry.target;
//                 const src = el.getAttribute("data-src");
//                 if (src) {
//                     if (el.tagName === "VIDEO") {
//                         el.src = src;
//                         el.load();
//                         el.play().catch(() => {});
//                     } else {
//                         el.src = src;
//                     }
//                     el.removeAttribute("data-src");
//                 }
//                 obs.unobserve(el);
//             }
//         });
//     });

//     lazyMedia.forEach(el => observer.observe(el));
// });

// Lazy load gambar & background v2
        // document.addEventListener("DOMContentLoaded", function () {
        //     const lazyImages = document.querySelectorAll("img.lazyload");
        //     const lazyBackgrounds = document.querySelectorAll(".lazyload[data-bg]");
        //     const lazyVideos = document.querySelectorAll("video.lazyload");

        //     const observer = new IntersectionObserver((entries, obs) => {
        //         entries.forEach(entry => {
        //             if (entry.isIntersecting) {
        //                 const el = entry.target;
        //                 if (el.tagName === "IMG") {
        //                     el.src = el.dataset.src;
        //                 } else if (el.tagName === "VIDEO") {
        //                     el.src = el.dataset.src;
        //                 } else if (el.dataset.bg) {
        //                     el.style.backgroundImage = `url('${el.dataset.bg}')`;
        //                 }
        //                 el.classList.remove("lazyload");
        //                 obs.unobserve(el);
        //             }
        //         });
        //     });

        //     [...lazyImages, ...lazyBackgrounds, ...lazyVideos].forEach(el => observer.observe(el));
        // });

        document.addEventListener("DOMContentLoaded", function () {
            const lazyImages = document.querySelectorAll("img.lazyload");
            const lazyBackgrounds = document.querySelectorAll(".lazyload[data-bg]");
            const lazyVideos = document.querySelectorAll("video.lazyload");
        
            const loadElement = (el) => {
                if (el.tagName === "IMG" && el.dataset.src) {
                    el.src = el.dataset.src;
                } else if (el.tagName === "VIDEO" && el.dataset.src) {
                    el.src = el.dataset.src;
                } else if (el.dataset.bg) {
                    el.style.backgroundImage = `url('${el.dataset.bg}')`;
                }
                el.classList.remove("lazyload");
            };
        
            // --- 1️⃣ Load gambar penting lebih dulu (misal yang di carousel pertama)
            lazyImages.forEach((img, i) => {
                if (i === 0 || img.closest("#aboutCarousel")) {
                    // preload hanya carousel pertama
                    loadElement(img);
                }
            });
        
            // --- 2️⃣ IntersectionObserver untuk gambar lain
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        loadElement(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: "200px 0px", // mulai load sebelum kelihatan di layar
                threshold: 0.01
            });
        
            [...lazyImages, ...lazyBackgrounds, ...lazyVideos].forEach(el => observer.observe(el));
        
            // --- 3️⃣ Pastikan semua lazy image yang belum sempat muncul tetap di-load setelah page siap
            window.addEventListener("load", () => {
                setTimeout(() => {
                    [...lazyImages, ...lazyBackgrounds, ...lazyVideos].forEach(el => {
                        if (el.classList.contains("lazyload")) loadElement(el);
                    });
                }, 800); // tunda sedikit agar tidak ganggu render awal
            });
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


