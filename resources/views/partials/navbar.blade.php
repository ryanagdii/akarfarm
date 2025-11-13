<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-uppercase" href="#">
            <img data-src="{{ asset('images/logo.png') }}" alt="AkarFarm Logo" width="140" height="140"
                class="img-fluid lazyload" id="navbarLogo">
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2"><a class="nav-link nav-link-custom text-uppercase" href="#home">Home</a></li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle nav-link-custom text-uppercase" href="#" id="fruitsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Our Fruits
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="fruitsDropdown">
                        <li><a class="dropdown-item" href="#melon1">Melon 1</a></li>
                        <li><a class="dropdown-item" href="#melon2">Melon 2</a></li>
                        <li><a class="dropdown-item" href="#melon3">Melon 3</a></li>
                        <li><a class="dropdown-item" href="#melon4">Melon 4</a></li>
                        <li><a class="dropdown-item" href="#melon5">Melon 5</a></li>
                        <li><a class="dropdown-item" href="#melon6">Melon 6</a></li>
                        <li><a class="dropdown-item" href="#melon7">Melon 7</a></li>
                        <li><a class="dropdown-item" href="#melon8">Melon 8</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle nav-link-custom text-uppercase" href="#" id="companyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Learn</a>
                    <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                        <li><a class="dropdown-item" href="#about">About</a></li>
                        <li><a class="dropdown-item" href="#team">Sustainability</a></li>
                        <li><a class="dropdown-item" href="#careers">Press Kit</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Contact Button -->
        <div class="d-none d-lg-block text-uppercase">
            <a href="#contact" class="btn text-white px-4 akar-btn rounded-5" id="akarbtn">
                Contact
            </a>
        </div>
    </div>
</nav>
