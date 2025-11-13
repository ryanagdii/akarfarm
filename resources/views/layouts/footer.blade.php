<footer id="footer" class="footer-section text-white py-5">
    <div class="container">
        <div class="row align-items-start text-center text-md-start">
            <!-- Kiri: Logo dan Sosial Media -->
            <div class="col-md-4 mb-4 mb-md-0">
                <img src="{{ asset('images/logo.png') }}" alt="Akar Logo" class="mb-3" style="width: 120px;">
                <p class="small mb-3">Copyright © NC Digital. All Rights Reserved</p>
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <a href="#" class="text-white fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white fs-5"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white fs-5"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <!-- Tengah: Navigasi (dibagi 2 kolom) -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="row text-center text-md-start">
                    <!-- Kolom 1: Company -->
                    <div class="col-6">
                        <h6 class="fw-bold mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none d-block mb-2">About Us</a></li>
                            <li><a href="#" class="text-white text-decoration-none d-block mb-2">Our Fruits</a></li>
                            <li><a href="#" class="text-white text-decoration-none d-block mb-2">Location</a></li>
                            <li><a href="#" class="text-white text-decoration-none d-block mb-2">Press Kit</a></li>
                        </ul>
                    </div>

                    <!-- Kolom 2: Support -->
                    <div class="col-6">
                        <h6 class="fw-bold mb-3">Support</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none d-block mb-2">Blog</a></li>
                            <li><a href="#" class="text-white text-decoration-none d-block mb-2">Contact</a></li>
                            <li><a href="#" class="text-white text-decoration-none d-block mb-2">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Kanan: Email & Tombol -->
            <div class="col-md-4 text-md-end text-center">
                <div class="d-inline-flex align-items-center mb-3">
                    <input type="email" class="form-control form-control-sm email-input"
                        placeholder="info@akarfarm.com" />
                    <button class="btn btn-light rounded-pill">Get Started</button>
                </div>
                <div class="mt-3">
                    <img src="{{ asset('images/appstore.png') }}" alt="App Store" class="me-2" style="height:40px;">
                    <img src="{{ asset('images/googleplay.png') }}" alt="Google Play" style="height:40px;">
                </div>
            </div>
        </div>

        <!-- Garis Pembatas -->
        <hr class="my-4 border-light opacity-50">

        <!-- Copyright -->
        <p class="small mb-0 text-center">© AkarFarm 2025</p>
    </div>
</footer>
