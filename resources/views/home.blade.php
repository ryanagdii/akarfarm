<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AkarFarm — Taste the Future</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-transparent">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-uppercase" href="#">
                <img src="/images/logo.png" alt="AkarFarm Logo" width="100" height="100" class="img-fluid"
                    id="navbarLogo">
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2"><a class="nav-link nav-link-custom" href="#home">Home</a></li>
                    <li class="nav-item mx-2"><a class="nav-link nav-link-custom" href="#plants">Plants</a></li>
                    <li class="nav-item mx-2"><a class="nav-link nav-link-custom" href="#products">Products</a></li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle nav-link-custom" href="#" id="companyDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                            <li><a class="dropdown-item" href="#about">About Us</a></li>
                            <li><a class="dropdown-item" href="#team">Our Team</a></li>
                            <li><a class="dropdown-item" href="#careers">Careers</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Contact Button -->
            <div class="d-none d-lg-block">
                <a href="#contact" class="btn text-white px-4 akar-btn rounded-5" id="akarbtn">
                    Contact
                </a>
            </div>
        </div>
    </nav>


    <!-- HERO VIDEO -->
    <section id="home" class="hero-section text-white text-center d-flex align-items-center justify-content-center">
        <video autoplay muted loop playsinline class="hero-video lazy-video" data-src="{{ asset('videos/vidbg.mp4') }}">
            Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content position-relative z-3">
            <h1 class="display-4 fw-bold mb-3">Grow Anywhere, <span style="color:pink;">Anytime</span>.</h1>
            <p class="lead mb-4">Solusi Pangan, Bisnis, Energi Terbarukan, dan Kualitas Hidup Untukmu</p>
            <a href="#products" class="btn btn-lg text-white px-5 akar-btn">Explore More</a>
        </div>

    </section>

    <!-- ===== SUSTAINABILITY SECTION ===== -->
    <section id="sustainability" class="sustainability-section text-center py-5">
        <ul class="sustainability-list">
            <li>Bebas Pestisida</li>
            <li>Pertanian Ramah Lingkungan</li>
            <li>Hemat Energi</li>
            <li>Produksi Sayuran Berkualitas Tinggi</li>
        </ul>
    </section>

    <!-- WHY SECTION -->
    <section id="why" class="why-section py-5 mx-auto">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
            <!-- LEFT TEXT -->
            <div class="why-text col-lg-6 col-md-12 mb-4 mb-lg-0">
                <h6 class="text-uppercase text-muted fw-semibold">MENGAPA AKARFARM</h6>
                <h2 class="fw-bold mb-4">Kami Menanam dengan Prinsip Keberlanjutan</h2>

                <ul class="list-unstyled why-list">
                    <li><i class="bi bi-geo-alt-fill me-2"></i>Hiperlokal dan terdesentralisasi</li>
                    <li><i class="bi bi-droplet-half me-2"></i>85% Hemat air, energi dan ruang</li>
                    <li><i class="bi bi-flower2 me-2"></i>100+ Varian Sayuran</li>
                    <li><i class="bi bi-shield-check me-2"></i>Non-transgenik, bebas pestisida, dan ready to eat</li>
                </ul>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="why-image col-lg-6 col-md-12 text-center">
                <img src="/images/mengapaakar.jpg" alt="Mengapa AkarFarm" class="img-fluid shadow-lg">
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Gambar di kiri -->
                        <div class="col-lg-5 about-image text-center order-1 order-lg-1">
                            <img src="images/sawah.jpg" alt="Sawah" class="img-fluid shadow-sm" />
                        </div>

                        <!-- Teks di kanan -->
                        <div class="col-lg-6 about-text order-2 order-lg-2">
                            <h2 class="fw-bold mb-3">Bayangkan Area Persawahan Konvensional</h2>
                            <p class="lead">
                                Bayangkan Kini Waktunya Miliki Area Persawahan Sendiri disini dan Bebas Tanam Apapun.
                                Kamu Bisa Tanam Berbagai Macam Jenis Tanaman Tanpa Khawatir Lahan, Air dan Jauh Lebih
                                Hemat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Gambar di kiri -->
                        <div class="col-lg-5 about-image text-center order-1 order-lg-1">
                            <img src="images/bagiarea.jpg" alt="bagiarea" class="img-fluid shadow-sm" />
                        </div>

                        <!-- Teks di kanan -->
                        <div class="col-lg-6 about-text order-2 order-lg-2">
                            <h2 class="fw-bold mb-3">Kita Bagi Area Tersebut</h2>
                            <p class="lead">
                                Tujuan Membagi Area Tersebut Untuk Menghasilkan Tanaman Yang Bervariasi dan Produksi
                                Menjadi Lebih Banyak.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Gambar di kiri -->
                        <div class="col-lg-5 about-image text-center order-1 order-lg-1">
                            <img src="images/areaditumpuk.jpg" alt="areaditumpuk"
                                class="img-fluid shadow-sm" />
                        </div>

                        <!-- Teks di kanan -->
                        <div class="col-lg-6 about-text order-2 order-lg-2">
                            <h2 class="fw-bold mb-3">Area-Area Kemudian Ditumpuk</h2>
                            <p class="lead">
                                Metode Utama Kami Merupakan Modular Indoor Vertical Farming. Bertani di Ruang Tertutup
                                Yang Terkontrol di Area Terbatas Namun Bisa Menghasilkan Tanaman Berkualitas Tanpa
                                Batas.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Gambar di kiri -->
                        <div class="col-lg-5 about-image text-center order-1 order-lg-1">
                            <img src="images/taruhdiarea.jpg" alt="taruhdiarea" class="img-fluid shadow-sm" />
                        </div>

                        <!-- Teks di kanan -->
                        <div class="col-lg-6 about-text order-2 order-lg-2">
                            <h2 class="fw-bold mb-3">Taruh Area Tersebut Di Ruang Terkontrol</h2>
                            <p class="lead">
                                Selain Menjaga Tanaman Terhindar Dari Penyakit Dan Hama. Ruangan Terkontrol Berfungsi
                                Untuk Mengatur Temperatur, Pencahayaan, Kelembapan Untuk Pertumbuhan Tanaman.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Gambar di kiri -->
                        <div class="col-lg-5 about-image text-center order-1 order-lg-1">
                            <img src="images/memberikanruang.jpg" alt="memberikanruang"
                                class="img-fluid shadow-sm" />
                        </div>

                        <!-- Teks di kanan -->
                        <div class="col-lg-6 about-text order-2 order-lg-2">
                            <h2 class="fw-bold mb-3">Memberikan Ruang Tepat Guna Secara Efisien</h2>
                            <p class="lead">
                                Jarak Tanam Menentukan Efisiensi Pemanfaatan Ruang Tumbuh Dan Mempermudah Tindakan
                                Budidaya Lainnya.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Gambar di kiri -->
                        <div class="col-lg-5 about-image text-center order-1 order-lg-1">
                            <img src="images/kontroldimanapun.jpg" alt="kontroldimanapun"
                                class="img-fluid shadow-sm" />
                        </div>

                        <!-- Teks di kanan -->
                        <div class="col-lg-6 about-text order-2 order-lg-2">
                            <h2 class="fw-bold mb-3">Kontrol Kapanpun, Monitor Dimanapun</h2>
                            <p class="lead">
                                Mengontrol Secara Berkala Untuk Hasil Tani Tanpa Kendala Disegala Cuaca. Waktu Panenmu
                                Kini Fokus Pada Kemampuan Tumbuh Setiap Tanaman Yang Berbeda Beda. Kamu Tidak Perlu
                                Menghabiskan Banyak Waktu.
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Kontrol di bawah -->
            <div class="carousel-controls text-center d-flex justify-content-center gap-0">
        <button class="carousel-control-prev d-inline-block" type="button"
            data-bs-target="#aboutCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-inline-block" type="button"
            data-bs-target="#aboutCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        </div>
    </section>

<section class="produk-section py-5">
<div class="container text-center mb-4">
        <h2 class="text-muted fw-semibold">Produk Kami, <br>Akar dan Akar+</h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-5 mb-4">
                <div class="card produk-card text-white text-center p-4">
                    <h4 class="card-title">Akar</h4>
                    <p class="card-text">Panen Bersama unit modular 5 tingkat unit AKAR (1.5 x 0.7 x 2.5 m)</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-5 mb-4">
                <div class="card produk-card text-white text-center p-4">
                    <h4 class="card-title">Produk B</h4>
                    <p class="card-text">Deskripsi singkat mengenai Produk B, manfaat, dan fitur utamanya.</p>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- PLANTS SECTION -->
    <section id="plants" class="plants-section text-white">
        <div class="plants-container mx-auto">
            <div class="row g-0 justify-content-center">

                @php
                $plants = [
                ['name' => 'Selada Iceberg', 'desc' => 'Renyah dan segar dari kebun hidroponik.', 'img' =>
                '/images/selada-hidroponik.jpg'],
                ['name' => 'Kale Nero', 'desc' => 'Kaya nutrisi dan rasa yang khas.', 'img' =>
                '/images/tanaman-kale.jpg'],
                ['name' => 'Bayam Merah', 'desc' => 'Warna cerah, tinggi zat besi.', 'img' =>
                '/images/bayam-merah.jpg'],
                ['name' => 'Bayam Hijau', 'desc' => 'Daun segar penuh vitamin.', 'img' => '/images/bayam-hijau.jpg'],
                ];
                @endphp

                @foreach ($plants as $plant)
                <div class="col-12 col-md-6 col-lg-3 plant-item position-relative text-center">
                    <div class="plant-bg" style="background-image: url('{{ $plant['img'] }}');"></div>
                    <div class="plant-overlay d-flex flex-column justify-content-center align-items-center text-white">
                        <h3 class="fw-bold">{{ $plant['name'] }}</h3>
                        <p class="mb-3">{{ $plant['desc'] }}</p>
                        <a href="#" class="btn btn-outline-light btn-sm">LEARN MORE</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>








</body>

</html>
