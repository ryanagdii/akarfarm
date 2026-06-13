/**
* Template Name: QuickStart
* Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  

  window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    const logo = document.getElementById("navbarLogo");
  
    if (window.scrollY > 50) {
      logo.style.filter = "brightness(0)"; // logo hitam
    } else {
      logo.style.filter = "none";
    }
  });
  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    const logoImg = document.querySelector('#header .logo img');
  
    // CARA BARU: Cek apakah section dengan ID 'hero' ada di halaman ini?
    // Jika ada, berarti kita di "Beranda". Jika tidak ada, berarti di halaman lain.
    const isHomePage = document.querySelector('#heroMain'); 
  
    if (!selectHeader.classList.contains('scroll-up-sticky') && 
        !selectHeader.classList.contains('sticky-top') && 
        !selectHeader.classList.contains('fixed-top')) return;
  
    // LOGIKA:
    // Navbar menjadi "Scrolled" (Putih & Logo Hitam) jika:
    // 1. Kita TIDAK di halaman Home (!isHomePage) -> Halaman lain otomatis langsung hitam.
    // 2. ATAU Kita di halaman Home TAPI sudah scroll ke bawah (window.scrollY > 100).
    const shouldActive = !isHomePage || (window.scrollY > 100);
  
    if (shouldActive) {
      // --- MODE AKTIF (Background Putih, Logo Hitam) ---
      selectBody.classList.add('scrolled');
      if (logoImg) {
        logoImg.style.filter = "brightness(0)"; 
      }
  
    } else {
      // --- MODE TRANSPARAN (Hanya untuk Home Page posisi atas) ---
      selectBody.classList.remove('scrolled');
      if (logoImg) {
        logoImg.style.filter = "none"; 
      }
    }
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('bgVideo');
    const src = video.querySelector('source');
    if (src && src.dataset.src) {
      src.src = src.dataset.src;
      video.load();
      video.play().catch(() => {});
      video.classList.add('loaded');
    }})

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

  

  
  

})();


// Data untuk setiap Slide (Gambar dan Judul Overlay)
const slides = [
    {
        image: "https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?q=80&w=1000&auto=format&fit=crop", // Gambar 1
        title: "Memiliki Kualitas Konsisten Sepanjang Tahun"
    },
    {
        image: "https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?q=80&w=1000&auto=format&fit=crop", // Gambar 2
        title: "Hasil Panen 350x Lebih Banyak Per Acre"
    },
    {
        image: "https://images.unsplash.com/photo-1550989460-0adf9ea622e2?q=80&w=1000&auto=format&fit=crop", // Gambar 3
        title: "Hemat Lahan Hingga 99% Dibanding Konvensional"
    }
];

function changeSlideBuah(index) {
  // 1. Ambil elemen yang diperlukan
  const mainImage = document.getElementById('mainImage');
  const overlayTitle = document.getElementById('overlayTitle');
  const controlItems = document.querySelectorAll('.control-item');

  // 2. Update Gambar dan Teks
  // Hapus kelas animasi dulu agar bisa dipicu ulang
  mainImage.classList.remove('fade-anim');
  
  // Trik kecil untuk memicu reflow agar animasi jalan ulang
  void mainImage.offsetWidth; 
  
  mainImage.src = slides[index].image;
  overlayTitle.textContent = slides[index].title;
  
  // Tambah kelas animasi lagi
  mainImage.classList.add('fade-anim');

  // 3. Update Tampilan Active pada Teks Bawah
  controlItems.forEach((item, i) => {
      if (i === index) {
          item.classList.add('active'); // Tambah style aktif (garis hijau tebal)
      } else {
          item.classList.remove('active'); // Hapus style aktif
      }
  });
}

// --- VARIABEL GLOBAL CAROUSEL ---
let currentSlideModalIndex = 0;
let carouselImages = [];

// --- FUNGSI UTAMA BUKA MODAL ---
function openInstaModal(type, src, caption) {
  const modal = document.getElementById("instaModal");
  const mediaContainer = document.getElementById("instaMediaContainer");
  const captionText = document.getElementById("instaCaptionText");
  
  // 1. BERSIHKAN TOTAL container media (Hapus gambar/video/tombol lama)
  // Ini mencegah tombol hilang atau duplikat
  mediaContainer.innerHTML = "";

  // 2. LOGIKA TAMPILAN MEDIA
  if (type === 'video') {
    // === TIPE VIDEO ===
    const video = document.createElement('video');
    video.src = src;
    video.controls = true;
    video.autoplay = true;
    video.loop = true;
    
    // Style Video
    video.style.width = "100%";
    video.style.height = "100%";
    video.style.objectFit = "contain"; // Agar video utuh tidak terpotong
    video.style.backgroundColor = "#000"; // Background hitam untuk sisa ruang
    
    mediaContainer.appendChild(video);

  } else if (src.includes(',')) {
    // === TIPE CAROUSEL (BANYAK FOTO) ===
    
    // Siapkan Data
    carouselImages = src.split(',');
    currentSlideModalIndex = 0; 

    // Buat Gambar Utama
    const img = document.createElement('img');
    img.id = "currentInstaImage"; 
    img.src = carouselImages[0].trim();
    img.style.width = "100%";
    img.style.height = "100%";
    img.style.objectFit = "contain"; // Gunakan 'contain' jika ingin gambar utuh 100%
    mediaContainer.appendChild(img);

    // --- BUAT TOMBOL NAVIGASI SECARA OTOMATIS (JS) ---
    // Tombol Prev
    const prevBtn = document.createElement('a');
    prevBtn.className = "carousel-btn prev";
    prevBtn.innerHTML = "&#10094;"; // Simbol Panah Kiri
    prevBtn.onclick = function() { changeSlide(-1) };
    prevBtn.style.display = "block"; // Pastikan muncul
    mediaContainer.appendChild(prevBtn);

    // Tombol Next
    const nextBtn = document.createElement('a');
    nextBtn.className = "carousel-btn next";
    nextBtn.innerHTML = "&#10095;"; // Simbol Panah Kanan
    nextBtn.onclick = function() { changeSlide(1) };
    nextBtn.style.display = "block"; // Pastikan muncul
    mediaContainer.appendChild(nextBtn);

  } else {
    // === TIPE GAMBAR TUNGGAL ===
    const img = document.createElement('img');
    img.src = src;
    img.style.width = "100%";
    img.style.height = "100%";
    img.style.objectFit = "contain";
    mediaContainer.appendChild(img);
  }

  // 3. ISI CAPTION (Gunakan innerHTML agar <br> terbaca sebagai Enter)
  if(captionText) {
    captionText.innerHTML = caption;
  }

  // 4. TAMPILKAN MODAL
  modal.style.display = "flex";
}

// --- FUNGSI GANTI SLIDE ---
function changeSlide(n) {
  const imgElement = document.getElementById("currentInstaImage");
  
  if (imgElement && carouselImages.length > 0) {
    // Update Index
    currentSlideModalIndex += n;

    // Loop Carousel (Mutar balik jika di ujung)
    if (currentSlideModalIndex >= carouselImages.length) {
      currentSlideModalIndex = 0;
    } else if (currentSlideModalIndex < 0) {
      currentSlideModalIndex = carouselImages.length - 1;
    }

    // Ganti Gambar
    imgElement.src = carouselImages[currentSlideModalIndex].trim();
  }
}

function closeInstaModal() {
  const modal = document.getElementById("instaModal");
  const mediaContainer = document.getElementById("instaMediaContainer");
  
  // Sembunyikan Modal
  modal.style.display = "none";
  
  // Hapus konten media (agar video berhenti berputar)
  mediaContainer.innerHTML = "";
}

// Tutup modal jika klik di luar area konten (background gelap)
window.onclick = function(event) {
  const modal = document.getElementById("instaModal");
  if (event.target == modal) {
    closeInstaModal();
  }
}

// --- FUNGSI UNTUK MEMBUKA MODAL BLOG (MENGGUNAKAN MODAL INSTAGRAM) ---
function openBlogModal(src, title, content) {
  // 1. Ambil elemen modal yang SUDAH ADA (dari section Instagram)
  const modal = document.getElementById("instaModal");
  const mediaContainer = document.getElementById("instaMediaContainer");
  const captionText = document.getElementById("instaCaptionText");
  
  // Ambil elemen Header Profil di modal untuk diubah sementara
  const profileName = document.querySelector(".insta-header h5");
  const profileHandle = document.querySelector(".insta-header span");

  // 2. Reset & Isi Gambar
  mediaContainer.innerHTML = "";
  const img = document.createElement('img');
  img.src = src;
  img.style.width = "100%";
  img.style.height = "100%";
  img.style.objectFit = "cover";
  mediaContainer.appendChild(img);

  // 3. Ubah Info Header Modal (Agar terlihat seperti Artikel, bukan Profil IG)
  // Simpan nilai lama (opsional jika ingin strict), tapi di sini kita timpa saja visualnya
  if(profileName) profileName.textContent = "Community Article"; 
  if(profileHandle) profileHandle.textContent = "October 13, 2022";

  // 4. Isi Konten (Judul ditebalkan + Isi Artikel)
  // Kita gunakan HTML string untuk formatting
  captionText.innerHTML = `
    <h4 style="font-weight:700; margin-bottom:15px; font-size:1.2rem; line-height:1.4;">${title}</h4>
    <p style="font-size:0.95rem; line-height:1.6; color:#555;">${content}</p>
  `;

  // 5. Tampilkan Modal
  modal.style.display = "flex";
}

// --- FUNGSI UNTUK MEMBUKA MODAL BLOG (MENGGUNAKAN MODAL INSTAGRAM) ---
function openPressModal(src, title, content) {
  // 1. Ambil elemen modal yang SUDAH ADA (dari section Instagram)
  const modal = document.getElementById("instaModal");
  const mediaContainer = document.getElementById("instaMediaContainer");
  const captionText = document.getElementById("instaCaptionText");
  
  // Ambil elemen Header Profil di modal untuk diubah sementara
  const profileName = document.querySelector(".insta-header h5");
  const profileHandle = document.querySelector(".insta-header span");

  // 2. Reset & Isi Gambar
  mediaContainer.innerHTML = "";
  const img = document.createElement('img');
  img.src = src;
  img.style.width = "100%";
  img.style.height = "100%";
  img.style.objectFit = "cover";
  mediaContainer.appendChild(img);

  // 3. Ubah Info Header Modal (Agar terlihat seperti Artikel, bukan Profil IG)
  // Simpan nilai lama (opsional jika ingin strict), tapi di sini kita timpa saja visualnya
  if(profileName) profileName.textContent = "Pers Kit"; 
  if(profileHandle) profileHandle.textContent = "October 13, 2022";

  // 4. Isi Konten (Judul ditebalkan + Isi Artikel)
  // Kita gunakan HTML string untuk formatting
  captionText.innerHTML = `
    <h4 style="font-weight:700; margin-bottom:15px; font-size:1.2rem; line-height:1.4;">${title}</h4>
    <p style="font-size:0.95rem; line-height:1.6; color:#555;">${content}</p>
  `;

  // 5. Tampilkan Modal
  modal.style.display = "flex";
}