<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAFAF GREEN FARM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        /* Navbar Background */
        .navbar{
            background-color: #000 !important;
            padding: 12px 0;
        }

        /* Logo Text */
        .navbar-brand{
            font-size: 1.8rem;
            font-weight: 800;
            color: #fff !important;
        }

        /* Menu Items */
        .navbar-nav .nav-link{
            color: #fff !important;
            font-size: 18px;
            font-weight: 700;
            margin: 0 15px;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        /* Hover Effect */
        .navbar-nav .nav-link:hover{
            color: #28a745 !important;
        }

        /* Active Menu */
        .navbar-nav .nav-link.active{
            color: #28a745 !important;
            font-weight: 800;
        }

        /* Login Button */
        .btn-outline-success{
            font-weight: 700;
        }

        /* Register Button */
        .btn-success{
            font-weight: 700;
        }

        .footer {
            background: #111827;
        }

        .footer-title {
            color: rgb(40, 167, 69);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .footer-link {
            color: #d1d5db;
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: rgb(40, 167, 69);
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.1);
            margin-top: 20px;
            padding-top: 15px;
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
        <div class="container-fluid px-4">

            <a class="navbar-brand d-flex align-items-center me-5" href="/">
                <img src="https://i.ibb.co/jPkXLm2w/converted.png"
                     alt="BAFAF Logo"
                     width="70"
                     class="me-2">

                <span>BAFAF GREEN FARM</span>
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                           href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                           href="/about">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('services') ? 'active' : '' }}"
                           href="/services">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products') ? 'active' : '' }}"
                           href="/products">
                            Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
                           href="/gallery">
                            Gallery
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                           href="/contact">
                            Contact Us
                        </a>
                    </li>

                </ul>

                <div class="d-flex">
                    <a href="#" class="btn btn-outline-success me-2">
                        Login
                    </a>

                    <a href="#" class="btn btn-success">
                        Register
                    </a>
                </div>

            </div>

        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Main Content -->
    <main class="container-fluid py-5 mt-5">
        @yield('content')
    </main>


    <!-- Footer Start -->
    <footer class="footer text-white">

        <div class="container py-5">

            <div class="row g-4">

                <div class="col-lg-4">
                    <h4 class="footer-title">
                        BAFAF GREEN FARM
                    </h4>

                    <p>
                        We provide quality agricultural products,
                        sustainable farming solutions and modern
                        green farming technologies.
                    </p>
                </div>

                <div class="col-lg-4">

                    <h4 class="footer-title">
                        Quick Links
                    </h4>

                    <ul class="list-unstyled">

                        <li>
                            <a href="/" class="footer-link">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="/about" class="footer-link">
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="/services" class="footer-link">
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="/products" class="footer-link">
                                Products
                            </a>
                        </li>

                        <li>
                            <a href="/gallery" class="footer-link">
                                Gallery
                            </a>
                        </li>

                        <li>
                            <a href="/contact" class="footer-link">
                                Contact Us
                            </a>
                        </li>

                    </ul>

                </div>

                <div class="col-lg-4">

                    <h4 class="footer-title">
                        Contact Information
                    </h4>

                    <p>
                        📧 info@bafafgreenfarm.com
                    </p>

                    <p>
                        📞 +880 1234-567890
                    </p>

                    <p>
                        📍 Rangpur, Bangladesh
                    </p>

                </div>

            </div>

            <div class="footer-bottom text-center">

                <p class="mb-0">
                    © 2026 BAFAF GREEN FARM.
                    All Rights Reserved.
                </p>

            </div>

        </div>

    </footer>
    <!-- Footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>