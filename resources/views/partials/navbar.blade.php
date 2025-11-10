<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-transparent">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-uppercase" href="#">
                <img data-src="{{ asset('images/logo.png') }}" alt="AkarFarm Logo"
                     width="100" height="100" class="img-fluid lazyload" id="navbarLogo">
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
                        <a class="nav-link dropdown-toggle nav-link-custom" href="#" id="companyDropdown"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                        <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                            <li><a class="dropdown-item" href="#about">About Us</a></li>
                            <li><a class="dropdown-item" href="#team">Blog</a></li>
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