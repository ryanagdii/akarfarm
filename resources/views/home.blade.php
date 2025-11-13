<!DOCTYPE html>
<html lang="en">
@include('partials.head') {{-- Memanggil file head.blade.php --}}

<body>

    @include('partials.navbar')


    <!-- HERO VIDEO -->
    <section id="home" class="hero-section text-white text-center d-flex align-items-center justify-content-center"
        data-aos="fade-up">
        <video autoplay muted loop playsinline class="hero-video lazyload" data-src="{{ asset('videos/vidbg.mp4') }}">
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
    <section id="sustainability" class="sustainability-section text-center py-5" data-aos="fade-up">
        <ul class="sustainability-list">
            <li>Bebas Pestisida</li>
            <li>Pertanian Ramah Lingkungan</li>
            <li>Hemat Energi</li>
            <li>Produksi Sayuran Berkualitas Tinggi</li>
        </ul>
    </section>

    <!-- WHY SECTION -->
    <section id="why" class="why-section d-flex align-items-center mx-auto mb-5" data-aos="fade-up">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <!-- Kiri: Teks -->
                <div class="col-lg-6 d-flex align-items-center justify-content-center text-section px-5 py-5">
                    <div class="why-text">
                        <h6 class="text-uppercase text-muted fw-semibold">MENGAPA AKARFARM?</h6>
                        <h2 class="fw-bold mb-4">Kami Menanam dengan Prinsip Keberlanjutan</h2>

                        <ul class="list-unstyled why-list">
                            <li><i class="bi bi-geo-alt-fill me-2"></i>Hiperlokal dan terdesentralisasi</li>
                            <li><i class="bi bi-droplet-half me-2"></i>85% Hemat air, energi dan ruang</li>
                            <li><i class="bi bi-flower2 me-2"></i>100+ Varian Sayuran</li>
                            <li><i class="bi bi-shield-check me-2"></i>Non-transgenik, bebas pestisida, dan ready to eat
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kanan: Gambar -->
                <div class="col-lg-6 image-section">
                    <img src="{{ asset('images/mengapaakar.jpg') }}" alt="Mengapa AkarFarm"
                        class="img-fluid w-100 h-100">
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT (Carousel) -->
    <section id="about" class="about-section" data-aos="fade-up">
        <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-inner">
                @foreach ([
                ['images/areasawah.jpg','Bayangkan Area Persawahan Konvensional',
                'Bayangkan Kini Waktunya Miliki Area Persawahan Sendiri disini dan Bebas Tanam Apapun. Kamu Bisa Tanam
                Berbagai Macam Jenis Tanaman Tanpa Khawatir Lahan, Air dan Jauh Lebih Hemat.'],
                ['images/bagiarea.jpg','Kita Bagi Area Tersebut',
                'Tujuan Membagi Area Tersebut Untuk Menghasilkan Tanaman Yang Bervariasi dan Produksi Menjadi Lebih
                Banyak.'],
                ['images/areaditumpuk.jpg','Area-Area Kemudian Ditumpuk',
                'Metode Utama Kami Merupakan Modular Indoor Vertical Farming. Bertani Di Ruang Tertutup Yang Terkontrol
                Di Area Terbatas Namun Bisa Menghasilkan Tanaman Berkualitas Tanpa Batas.'],
                ['images/ruangterkontrol.jpg','Taruh Area Tersebut Di Ruang Terkontrol',
                'Selain Menjaga Tanaman Terhindar Dari Penyakit Dan Hama. Ruangan Terkontrol Berfungsi Untuk Mengatur
                Temperatur, Pencahayaan, Kelembapan Untuk Pertumbuhan Tanaman.'],
                ['images/ruangtepatguna.jpg','Memberikan Ruang Tepat Guna Secara Efisien',
                'Jarak Tanam Menentukan Efisiensi Pemanfaatan Ruang Tumbuh Dan Mempermudah Tindakan Budidaya Lainnya.'],
                ['images/kontrol.jpg','Kontrol Kapanpun, Monitor Dimanapun',
                'Mengontrol Secara Berkala Untuk Hasil Tani Tanpa Kendala Di Segala Cuaca. Waktu Panenmu Kini Fokus Pada
                Kemampuan Tumbuh Setiap Tanaman Yang Berbeda-Beda. Kamu Tidak Perlu Menghabiskan Banyak Waktu.']
                ] as $index => $slide)
                <div class="carousel-item @if($index==0) active @endif">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between">
                        <div class="col-lg-5 about-image text-center">
                            <img data-src="{{ asset($slide[0]) }}" alt="{{ $slide[1] }}"
                                class="img-fluid shadow-sm lazyload" />
                        </div>
                        <div class="col-lg-6 about-text">
                            <h2 class="fw-bold mb-3">{{ $slide[1] }}</h2>
                            <p class="lead">{{ $slide[2] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="carousel-controls text-center d-flex justify-content-center gap-0">
                <button class="carousel-control-prev d-inline-block" type="button" data-bs-target="#aboutCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-inline-block" type="button" data-bs-target="#aboutCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="tentang-section">
        <!-- Bagian 1 -->
        <div class="tentang-row">
            <div class="tentang-image">
                <img src="{{ asset('images/bagiarea.jpg') }}" alt="Tentang 1">
            </div>
            <div class="tentang-text">
                <h2>All Akar Fruits Are...</h2>
                <ul>
                    <li>Vertically Farmed</li>
                    <li>Pesticide Free</li>
                    <li>Non-GMO</li>
                    <li>Hand Pollinated</li>
                    <li>Non-GMO Project Verified</li>
                    <li>Always in Season</li>
                    <li>Delicious</li>
                </ul>
            </div>
        </div>

        <!-- Bagian 2 -->
        <div class="tentang-row reverse">
            <div class="tentang-image">
                <img src="{{ asset('images/areasawah.jpg') }}" alt="Tentang 2">
            </div>
            <div class="tentang-text">
                <h2>Non-GMO Project Verified</h2>
                <p>
                    Akar Fruits are verified by the Non-GMO Project, ensuring they meet the highest
                    standards for transparency and quality.
                </p>
            </div>
        </div>
    </section>

    <!-- VISI SECTION -->
    <section id="aftertentang" class="aftertentang-section py-5 mx-auto mb-5" data-aos="fade-up">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
            <!-- Teks Kiri -->
            <div class="aftertentang-text col-lg-6 col-md-12 mb-4 mb-lg-0 text-white">
                <h2 class="text-uppercase text-center fw-semibold">Akar Melon</h2>
                <p class="text-center">
                    Melon....
                </p>
            </div>

            <!-- Gambar Tengah -->
            <div class="aftertentang-image col-lg-6 col-md-12 text-center mb-4 mb-lg-0">
                <img src="{{ asset('images/gajadi.jpg') }}" alt="-" class="img-fluid shadow-lg" />
            </div>
        </div>
    </section>


    <!-- PLANTS -->
    <section id="plants" class="plants-section text-white mb-5" data-aos="fade-up">
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
                    <div class="plant-bg lazyload" data-bg="{{ asset($plant['img']) }}"></div>
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

    <!-- VISI SECTION -->
    <section id="visi" class="visi-section py-5 mx-auto mb-5" data-aos="fade-up">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
            <!-- Teks Kiri -->
            <div class="visi-text col-lg-4 col-md-12 mb-4 mb-lg-0 text-white">
                <h2 class="text-uppercase text-center fw-semibold">Visi</h2>
                <p class="text-center">
                    Menjadi Garda Terdepan Di Bidang Agrikultur Melalui Inovasi Dan Teknologi Untuk Kemajuan Urban
                    Farming Nusantara.
                </p>
            </div>

            <!-- Gambar Tengah -->
            <div class="visi-image col-lg-4 col-md-12 text-center mb-4 mb-lg-0">
                <img src="{{ asset('images/visimisi.jpg') }}" alt="Visi AkarFarm" class="img-fluid shadow-lg" />
            </div>

            <!-- Teks Kanan -->
            <div class="visi-text col-lg-4 col-md-12 text-white">
                <h2 class="text-uppercase text-center fw-semibold">Misi</h2>
                <p class="text-center">
                    Menciptakan Platform Yang Cocok Untuk Petani Di Indonesia Melalui Teknologi Pertanian Yang Dapat
                    Dimanfaatkan Secara Komersial Di Seluruh Indonesia.
                </p>
            </div>
        </div>
    </section>

    <section id="partners" class="partners-section py-5" data-aos="fade-up">
        <div class="container text-center mb-4">
            <h2 class="fw-bold">Partners & Collaborations</h2>
        </div>

        <div class="logo-carousel-wrapper">
            <div class="logo-carousel">
                {{-- Duplicated track for smooth infinite animation --}}
                @for ($i = 0; $i < 2; $i++) <div class="logo-track d-flex align-items-center">
                    @foreach (File::files(public_path('images/logo')) as $file)
                    <div class="logo-item mx-4">
                        <img src="{{ asset('images/logo/' . $file->getFilename()) }}" alt="Partner Logo"
                            class="img-fluid" />
                    </div>
                    @endforeach
            </div>
            @endfor
        </div>
        </div>
    </section>





    @include('layouts.footer')


</body>

</html>
