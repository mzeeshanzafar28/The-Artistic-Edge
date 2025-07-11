<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore insightful articles on art and creativity at Multan Art Gallery's blog.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Multan Art Gallery - Blogs</title>

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

        .dropdown-toggle.btn-gradient {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 25px;
            transition: transform 0.3s ease;
        }

        .dropdown-toggle.btn-gradient:hover {
            transform: scale(1.05);
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: url('{{ asset('storage/images/hero.jpg') }}') no-repeat center center/cover;
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
            font-size: 3.5rem;
            color: #ffd700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-text p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 20px auto;
        }

        /* Blog Section */
        .blog-section {
            background: #0a0a23;
            padding: 50px 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #1a1a3d;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.4);
        }

        .card-body {
            background: #1a1a3d;
        }

        .card-title {
            color: #ffd700;
            border-bottom: 2px solid #ffd700;
            padding-bottom: 10px;
        }

        .card-text {
            color: #ffffff;
        }

        .sidebar .list-group-item {
            background: #2a2a5a;
            color: #f5f6f5;
            border: none;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: background 0.3s ease;
        }

        .sidebar .list-group-item:hover {
            background: #3a3a7a;
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
                font-size: 2rem;
            }

            .hero-text p {
                font-size: 1rem;
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
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
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
                        
                        <li class="nav-item dropdown">
                            <button class="btn btn-gradient dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(auth()->check())
                                    {{ auth()->user()->name }}
                                @else
                                    Guest
                                @endif
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @if(auth()->check())
                                    @if(!auth()->user()->artist)
                                        <li><a class="dropdown-item" href="{{ route('artistPage') }}">Create Art Page</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('adminlogin') }}">Admin</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('loginpage') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('signuppage') }}">Signup</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section animate__animated animate__fadeIn">
            <div class="hero-overlay">
                <div class="hero-text">
                    <h1>Our Blog</h1>
                    <p>Explore insightful articles on art, creativity, and the transformative power of visual expression.</p>
                </div>
            </div>
        </section>

        <section class="blog-section animate__animated animate__fadeIn">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">The Transformative Power of Art: Exploring Diverse Artistic Expressions</h1>
                                <p class="card-text">
                                    Art has the power to move us, to challenge our perceptions, and to inspire change. From traditional paintings to cutting-edge digital creations, the world of visual art is a rich tapestry of creativity and expression. In this blog post, we will delve into the diverse world of artworks, exploring various forms and the impact they have on artists and art enthusiasts alike.
                                </p>
                                <h2 class="card-title">The Beauty of Traditional Art</h2>
                                <p class="card-text">
                                    Traditional art forms, such as painting, sculpture, and drawing, have a timeless appeal. These works often carry the weight of history and culture, reflecting the artist's skill and the era in which they were created. Classic paintings by masters like Leonardo da Vinci and Vincent van Gogh continue to captivate audiences with their beauty and technical prowess.
                                </p>
                                <h3 class="card-title">Why Traditional Art Endures:</h3>
                                <ul class="card-text">
                                    <li><strong>Historical Significance:</strong> Traditional artworks provide a window into the past, offering insights into historical events, cultural practices, and societal values.</li>
                                    <li><strong>Technical Mastery:</strong> The meticulous techniques employed by traditional artists showcase a high level of craftsmanship and dedication.</li>
                                    <li><strong>Emotional Connection:</strong> These works often evoke deep emotions and resonate with viewers on a personal level.</li>
                                </ul>
                                <h2 class="card-title">The Evolution of Contemporary Art</h2>
                                <p class="card-text">
                                    Contemporary art, encompassing a wide range of styles and mediums, reflects the dynamic and ever-changing nature of the modern world. Artists today experiment with materials, technology, and concepts, pushing the boundaries of what art can be. From abstract paintings to immersive installations, contemporary art invites us to see the world through a different lens.
                                </p>
                                <h3 class="card-title">Key Features of Contemporary Art:</h3>
                                <ul class="card-text">
                                    <li><strong>Innovation:</strong> Contemporary artists are unafraid to challenge conventions and explore new techniques.</li>
                                    <li><strong>Diverse Mediums:</strong> From digital art to mixed media, contemporary art employs a variety of tools to create unique experiences.</li>
                                    <li><strong>Conceptual Depth:</strong> Many contemporary works focus on ideas and messages, encouraging viewers to think critically and engage with the artwork on an intellectual level.</li>
                                </ul>
                                <h2 class="card-title">The Rise of Digital Art</h2>
                                <p class="card-text">
                                    In the digital age, art has expanded into virtual realms, giving rise to a new genre of digital art. This form encompasses digital painting, 3D modeling, animation, and more. Digital art allows for endless creativity and accessibility, enabling artists to reach global audiences with ease.
                                </p>
                                <h3 class="card-title">Advantages of Digital Art:</h3>
                                <ul class="card-text">
                                    <li><strong>Accessibility:</strong> Digital platforms make it easier for artists to share their work and for audiences to discover new art.</li>
                                    <li><strong>Flexibility:</strong> Digital tools offer a wide range of possibilities for creation and experimentation.</li>
                                    <li><strong>Sustainability:</strong> Unlike traditional art materials, digital art reduces waste and environmental impact.</li>
                                </ul>
                                <h2 class="card-title">Art as a Tool for Social Change</h2>
                                <p class="card-text">
                                    Art has always been a powerful medium for social commentary and activism. Throughout history, artists have used their work to address pressing issues and inspire change. From the political murals of Diego Rivera to the provocative installations of Ai Weiwei, art has the ability to raise awareness and provoke thought.
                                </p>
                                <h3 class="card-title">Impact of Art on Society:</h3>
                                <ul class="card-text">
                                    <li><strong>Awareness:</strong> Art can bring attention to social, political, and environmental issues, sparking conversations and promoting awareness.</li>
                                    <li><strong>Empathy:</strong> By depicting diverse experiences and perspectives, art fosters empathy and understanding among viewers.</li>
                                    <li><strong>Action:</strong> Art can inspire individuals and communities to take action, driving social and political movements.</li>
                                </ul>
                                <h2 class="card-title">Celebrating Artistic Diversity</h2>
                                <p class="card-text">
                                    The beauty of the art world lies in its diversity. Each artwork, whether traditional or contemporary, digital or physical, offers a unique perspective and contributes to the rich tapestry of human creativity. By exploring and appreciating diverse artistic expressions, we celebrate