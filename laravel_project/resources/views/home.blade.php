@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-center bg-light rounded shadow-sm">
    <div class="container">

        <h1 class="display-4 fw-bold">
            Welcome to My Laravel Website
        </h1>

        <p class="lead text-muted">
            Build Modern Web Applications with Laravel & Bootstrap
        </p>

        <div class="mt-4">
            <a href="/about" class="btn btn-primary btn-lg me-2">
                Learn More
            </a>

            <a href="/contact" class="btn btn-outline-dark btn-lg">
                Contact Us
            </a>
        </div>

    </div>
</section>

<!-- Services Section -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Services</h2>
            <p class="text-muted">
                We provide high quality web development services.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">

                        <h4 class="card-title">
                            Web Development
                        </h4>

                        <p class="card-text">
                            Modern responsive websites using Laravel.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">

                        <h4 class="card-title">
                            UI/UX Design
                        </h4>

                        <p class="card-text">
                            Clean and user-friendly design solutions.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">

                        <h4 class="card-title">
                            SEO Optimization
                        </h4>

                        <p class="card-text">
                            Improve your website ranking on search engines.
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light rounded">
    <div class="container">

        <div class="row text-center">

            <div class="col-md-4">
                <h2 class="fw-bold text-primary">100+</h2>
                <p>Projects Completed</p>
            </div>

            <div class="col-md-4">
                <h2 class="fw-bold text-success">50+</h2>
                <p>Happy Clients</p>
            </div>

            <div class="col-md-4">
                <h2 class="fw-bold text-danger">24/7</h2>
                <p>Support Available</p>
            </div>

        </div>

    </div>
</section>

@endsection