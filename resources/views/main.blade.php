<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore the Multan Art Gallery, a vibrant platform showcasing diverse artistic talents from around the world.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Multan Art Gallery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #0a0a23;
            color: #f5f6f5;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(10, 10, 35, 0.8) !important;
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            color: #ffd700 !important;
        }

        .nav-link {
            color: #f5f6f5 !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffd700 !important;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 25px;
            transition: transform 0.3s ease;
        }

        .btn-gradient:hover {
            transform: scale(1.05);
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-section .carousel-item img {
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.7);
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            z-index: 1;
        }

        .hero-text h1 {
            font-size: 4.5rem;
            color: #ffd700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-text p {
            font-size: 1.5rem;
            max-width: 600px;
            margin: 20px auto;
        }

        .btn-hero {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 500;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        /* Featured Artworks */
        .artwork-carousel img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border: 2px solid #ffd700;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .artwork-carousel .carousel-item:hover img {
            transform: scale(1.05);
        }

        .btn-view-more {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 500;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-view-more:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        /* About Section */
        .about-section {
            background: linear-gradient(to bottom, #1a1a3d, #0a0a23);
            border-radius: 15px;
            padding: 50px 20px;
        }

        .about-section h1 {
            color: #ffd700;
        }

        .about-section .btn {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            transition: transform 0.3s ease;
        }

        .about-section .btn:hover {
            transform: scale(1.05);
        }

        /* Cards (Artists/Exhibitions) */
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.4);
        }

        .card-img-top {
            height: 225px;
            object-fit: cover;
            border: 2px solid #ffd700;
        }

        .card-body {
            background: #1a1a3d;
        }

        .card-title {
            color: #ffd700;
        }

        .card-text {
            color: #ffffff;
        }

        .card .btn {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            border: none;
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .card .btn:hover {
            transform: scale(1.1);
        }

        /* Footer */
        .footer {
            background: linear-gradient(to bottom, #1a1a3d, #0a0a23);
            padding: 40px 0;
            text-align: center;
        }

        .footer a {
            color: #ffd700;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #ff6f61;
        }

        .social-icons a {
            font-size: 1.5rem;
            margin: 0 10px;
            color: #f5f6f5;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            color: #ffd700;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-text p {
                font-size: 1rem;
            }

            .artwork-carousel img {
                height: 200px;
            }
        }
    </style>
</head>
<body>
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
            <path d="M8 12a4 4 0 0 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
        </symbol>
        <symbol id="arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
        </ul>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('main') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/>
                    </svg>
                    Multan Art Gallery
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('exhibitions') }}">Exhibitions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactus') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            @if(auth()->check())
                                <div class="dropdown">
                                    <button class="btn btn-gradient dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ auth()->user()->name }}
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        @if(!auth()->user()->artist)
                                            <li class="create-artist"><a class="dropdown-item" href="{{ route('artistPage') }}">Create Artist Profile</a></li>
                                        @endif
                                        <li><a class="dropdown-item" href="{{ route('adminlogin') }}">Admin</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ route('loginpage') }}" class="btn btn-gradient">Login/Signup</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section animate__animated animate__fadeIn">
            <div id="artCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 1; $i <= 10; $i++)
                        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                            <img src="{{ asset('storage/images/img' . $i . '.jpg') }}" class="d-block w-100" alt="Art Image {{ $i }}" loading="lazy">
                        </div>
                    @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#artCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#artCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="hero-overlay">
                <div class="hero-text">
                    <h1>The Transformative Power of Art</h1>
                    <p>Discover a world of creativity and expression through our curated collection of visual arts.</p>
                    <a href="{{ route('Blog') }}" class="btn btn-hero">Explore Now</a>
                </div>
            </div>
        </section>

        <section class="py-5 bg-dark animate__animated animate__fadeIn">
            <div class="container">
                <h2 class="text-center mb-5">Featured Artworks</h2>
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div id="carousel1" class="carousel slide artwork-carousel" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-inner">
                                @for ($i = 11; $i <= 20; $i++)
                                    <div class="carousel-item {{ $i == 11 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/images/img' . $i . '.jpg') }}" class="d-block w-100" alt="Artwork {{ $i - 10 }}" loading="lazy">
                                    </div>
                                @endfor
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div id="carousel2" class="carousel slide artwork-carousel" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-inner">
                                @for ($i = 21; $i <= 30; $i++)
                                    <div class="carousel-item {{ $i == 21 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/images/img' . $i . '.jpg') }}" class="d-block w-100" alt="Artwork {{ $i - 20 }}" loading="lazy">
                                    </div>
                                @endfor
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div id="carousel3" class="carousel slide artwork-carousel" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-inner">
                                @for ($i = 31; $i <= 40; $i++)
                                    <div class="carousel-item {{ $i == 31 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/images/img' . $i . '.jpg') }}" class="d-block w-100" alt="Artwork {{ $i - 30 }}" loading="lazy">
                                    </div>
                                @endfor
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div id="carousel4" class="carousel slide artwork-carousel" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-inner">
                                @for ($i = 41; $i <= 50; $i++)
                                    <div class="carousel-item {{ $i == 41 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/images/img' . $i . '.jpg') }}" class="d-block w-100" alt="Artwork {{ $i - 30 }}" loading="lazy">
                                    </div>
                                @endfor
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

        <section class="about-section text-center animate__animated animate__fadeIn">
            <div class="container">
                <h1>Multan Art Gallery</h1>
                <p class="lead text-light">Welcome to the Multan Art Gallery, an immersive online platform dedicated to celebrating and showcasing diverse artistic talents from around the world. Whether you are an art enthusiast, a budding artist, or a seasoned curator, our gallery offers a vibrant space where creativity meets community.</p>
                <p>
                    <a href="{{ route('about') }}" class="btn btn-primary mx-2">About Us</a>
                    <a href="{{ route('contactus') }}" class="btn btn-primary mx-2">Contact Us</a>
                </p>
            </div>
        </section>

        <section class="py-5 bg-dark animate__animated animate__fadeIn">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fw-light">Artists</h1>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    @foreach($data as $artist)
                        <div class="col">
                            <div class="card">
                                @if($artist->profile_image)
                                    <img src="{{ asset($artist->profile_image) }}" class="card-img-top" alt="{{ $artist->Name }}'s Profile Image" loading="lazy">
                                @elseif($artist->images->first())
                                    <img src="{{ asset($artist->images->first()->image_path) }}" class="card-img-top" alt="{{ $artist->Name }}'s Artwork" loading="lazy">
                                @else
                                    <img src="https://via.placeholder.com/300x225?text=No+Image" class="card-img-top" alt="No Image Available" loading="lazy">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $artist->Name }}</h5>
                                    <p class="card-text">{{ Str::limit($artist->Bio, 100) }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route('artist.show', $artist->id) }}">
                                                <button type="button" class="btn btn-sm m-1">View</button>
                                            </a>
                                            @if(auth()->check() && auth()->user()->id === $artist->user_id)
                                                <a href="{{ route('artist.edit', $artist->id) }}">
                                                    <button type="button" class="btn btn-sm m-1 btn-edit">Edit</button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-5 bg-dark animate__animated animate__fadeIn">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fw-light">Exhibitions</h1>
                    <a href="{{ route('exhibitions') }}">
                        <button class="btn btn-outline-light d-inline-flex align-items-center">
                            View All
                            <svg class="bi ms-1" width="20" height="20">
                                <use xlink:href="#arrow-right-short"></use>
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    @foreach($exhibitions as $exhibition)
                        <div class="col">
                            <div class="card">
                                @if($exhibition->images->first())
                                    <img src="{{ asset($exhibition->images->first()->image_path) }}" class="card-img-top" alt="{{ $exhibition->Name }} Image" loading="lazy">
                                @else
                                    <img src="https://via.placeholder.com/300x225?text=No+Image" class="card-img-top" alt="No Image Available" loading="lazy">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $exhibition->Name }}</h5>
                                    <p class="card-text">{{ Str::limit($exhibition->Bio, 100) }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route('exhibition.show', $exhibition->id) }}">
                                                <button type="button" class="btn btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <footer class="footer text-light">
        <div class="container">
            <div class="social-icons mb-3">
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
            <p>Multan Art Gallery © 2025</p>
            <p>New to our platform? <a href="{{ route('about') }}">Visit the About page</a> or <a href="{{ route('contactus') }}">contact us</a>.</p>
            <p class="mt-3"><a href="#">Back to top</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector('.btn-edit')) {
                const createArtist = document.querySelector('.create-artist');
                if (createArtist) {
                    createArtist.style.display = 'none';
                }
            }
        });
    </script>
</body>
</html>