<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Multan Art Gallery, an online platform showcasing diverse artistic talents globally.">
    <meta name="author" content="Multan Art Gallery Team">
    <title>Multan Art Gallery · Exhibition</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Animate.css for animations -->
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(to right, #2b2e4a, #1a1a2e);
            transition: all 0.3s ease;
        }
        .navbar-brand:hover {
            transform: scale(1.05);
        }
        .dropdown-menu {
            background: #2b2e4a;
            border: none;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.3s ease;
        }
        .dropdown-item:hover {
            background: #00c6ff;
            color: #fff;
        }

        /* Header Section */
        .header-section {
            background: url('https://source.unsplash.com/random/1920x600/?art') no-repeat center center/cover;
            color: #fff;
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }
        .header-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .header-section .container {
            position: relative;
            z-index: 2;
        }
        .header-section h1 {
            animation: fadeInDown 1s ease;
        }
        .header-section p {
            animation: fadeInUp 1s ease 0.3s;
            animation-fill-mode: backwards;
        }

        /* Exhibition Section */
        .exhibition-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            padding: 2.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 1s ease;
        }
        .exhibition-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
        }
        .exhibition-image {
            transition: transform 0.3s ease;
            cursor: pointer;
            max-height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }
        .exhibition-image:hover {
            transform: scale(1.05);
        }
        .carousel-item img {
            max-height: 350px;
            object-fit: cover;
            width: 100%;
            border-radius: 8px;
        }
        .carousel-control-prev, .carousel-control-next {
            background: rgba(0, 0, 0, 0.3);
            width: 10%;
            border-radius: 8px;
        }
        .modal-content {
            border-radius: 15px;
            overflow: hidden;
            background: #fff;
        }
        .modal-body img {
            border-radius: 8px;
            max-height: 500px;
            object-fit: contain;
        }

        /* Footer Styling */
        footer {
            background: linear-gradient(to right, #2b2e4a, #1a1a2e);
            color: #d1d5db;
            padding: 3rem 0;
            animation: fadeIn 1s ease;
        }
        footer a {
            color: #00c6ff;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #fff;
            text-decoration: none;
        }

        /* Theme Toggle Button */
        .btn-bd-primary {
            background: linear-gradient(135deg, #00f2fe, #4facfe);
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        .btn-bd-primary:hover {
            background: linear-gradient(135deg, #00d4e6, #3f9bfe);
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .exhibition-card {
                padding: 1.5rem;
            }
            .carousel-item img {
                max-height: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Theme Toggle -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (auto)">
            <i class="fas fa-adjust me-2"></i>
            <span class="d-none d-sm-inline">Theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <i class="fas fa-sun me-2 opacity-50"></i>
                    Light
                    <i class="fas fa-check ms-auto d-none"></i>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <i class="fas fa-moon me-2 opacity-50"></i>
                    Dark
                    <i class="fas fa-check ms-auto d-none"></i>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <i class="fas fa-circle-half-stroke me-2 opacity-50"></i>
                    Auto
                    <i class="fas fa-check ms-auto"></i>
                </button>
            </li>
        </ul>
    </div>

    <!-- SVG Symbols (Updated to Font Awesome) -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 1 1 .5.5v2a.5.5 0 1 1-1 0v-2A.5.5 0 1 1 8 0zm0 13a.5.5 0 1 1 .5.5v2a.5.5 0 1 1-1 0v-2A.5.5 0 1 1 8 13zm8-5a.5.5 0 1 1-.5.5h-2a.5.5 0 1 1 0-1h2a.5.5 0 1 1 .5.5zM3 8a.5.5 0 1 1-.5.5h-2a.5.5 0 1 1 0-1h2A.5.5 0 1 1 3 8zm10.657-5.657a.5.5 0 1 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 1 1 .707 0zm-9.193 9.193a.5.5 0 1 1 0 .707L3.05 13.657a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 1 1 .707 0zm9.193 2.121a.5.5 0 1 1-.707 0l-1.414-1.414a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 1 1 0 .707zM4.464 4.465a.5.5 0 1 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 1 1 0 .708z"/>
        </symbol>
    </svg>

    <!-- Navbar -->
    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4 animate__animated animate__fadeIn">
                        <h4 class="text-white">About</h4>
                        <p class="text-gray-300">Welcome to the Multan Art Gallery, an innovative online platform dedicated to showcasing and celebrating the diverse world of visual arts. Our mission is to connect artists and art enthusiasts globally, providing a space where creativity thrives.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4 animate__animated animate__fadeIn" style="animation-delay: 0.2s;">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-gray-300 hover:text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white">Email us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <div class="dropdown">
                    <a href="#" class="navbar-brand d-flex align-items-center dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-paint-brush me-2"></i>
                        <strong>
                            @if(auth()->check())
                                {{ auth()->user()->name }}
                            @else
                                Guest
                            @endif
                        </strong>
                    </a>
                    @if(auth()->check())
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="{{ route('artistPage') }}">Create Art Page</a></li>
                            <li><a class="dropdown-item text-white" href="{{ route('adminlogin') }}">Admin</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-white" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    @else
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="{{ route('loginpage') }}">Login</a></li>
                            <li><a class="dropdown-item text-white" href="{{ route('signuppage') }}">Signup</a></li>
                        </ul>
                    @endif
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="header-section text-center">
        <div class="container">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Multan Art Gallery</h1>
            <p class="lead text-lg md:text-xl text-gray-200 max-w-2xl mx-auto">
                Discover the beauty of art through our curated exhibitions.
            </p>
            <div class="mt-6">
                <a href="{{ route('about') }}" class="btn btn-primary mx-2 animate__animated animate__pulse animate__infinite">About Us</a>
                <a href="{{ route('contactus') }}" class="btn btn-outline-light mx-2">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Exhibition Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="exhibition-card">
                        <h2 class="text-3xl font-semibold mb-4 text-gray-800">{{ $exhibition->Name }}</h2>
                        <div class="mb-4">
                            <h3 class="text-xl font-medium text-gray-700 mb-2">Exhibition Description</h3>
                            <p class="text-gray-600 leading-relaxed">{{ $exhibition->Bio }}</p>
                        </div>
                        <div class="exhibition-images mb-4">
                            @if($exhibition->images->isNotEmpty())
                                <div id="exhibitionCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner">
                                        @foreach($exhibition->images as $index => $image)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                <img src="{{ asset($image->image_path) }}" class="d-block w-100 exhibition-image" alt="Image {{ $index + 1 }}" data-bs-toggle="modal" data-bs-target="#imageModal{{ $index }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#exhibitionCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#exhibitionCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            @else
                                <p class="text-gray-600">No images available for this exhibition.</p>
                            @endif
                        </div>
                        <div class="d-flex flex-wrap gap-4">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800"><i class="fas fa-calendar-alt me-2"></i>Date</h3>
                                <p class="text-gray-600">{{ $exhibition->Date }}</p>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800"><i class="fas fa-map-marker-alt me-2"></i>Venue</h3>
                                <p class="text-gray-600">{{ $exhibition->Venue }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals for Images -->
    @foreach($exhibition->images as $index => $image)
        <div class="modal fade" id="imageModal{{ $index }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $index }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ asset($image->image_path) }}" class="img-fluid" alt="Image {{ $index + 1 }}">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Footer -->
    <footer class="text-gray-300 py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#" class="hover:underline">Back to top</a>
            </p>
            <p class="mb-1">Multan Art Gallery © 2025. All rights reserved.</p>
            <p class="mb-0">Explore more? <a href="/" class="hover:underline">Visit the homepage</a> or check our <a href="{{ route('about') }}" class="hover:underline">about page</a>.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>