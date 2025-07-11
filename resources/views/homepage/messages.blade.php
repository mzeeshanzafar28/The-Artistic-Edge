<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View user-submitted messages at Multan Art Gallery's admin panel.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Multan Art Gallery - Messages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
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

        /* Messages Section */
        .messages-section {
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

        .card-header {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            border-radius: 15px 15px 0 0;
            padding: 15px;
        }

        .card-title {
            color: #ffd700;
            border-bottom: 2px solid #ffd700;
            padding-bottom: 10px;
            margin-bottom: 0;
        }

        .table {
            background: #1a1a3d;
            color: #f5f6f5;
        }

        .table th {
            background: #2a2a5a;
            color: #ffd700;
            border: none;
            border-bottom: 2px solid #ffd700;
        }

        .table td {
            background: #1a1a3d;
            color: #f5f6f5;
            border: none;
            border-bottom: 1px solid #2a2a5a;
        }

        .table tr:nth-child(even) td {
            background: #2a2a5a;
            color: #f5f6f5;
        }

        .table tr:hover td {
            background: #3a3a7a;
            color: #f5f6f5;
            transition: background 0.3s ease;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            border: none;
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .btn-gradient:hover {
            transform: scale(1.1);
        }

        /* DataTables Custom Styles */
        .dataTables_filter label {
            color: #f5f6f5 !important;
        }

        .dataTables_length label {
            color: #f5f6f5 !important;
        }

        .dataTables_wrapper .dataTables_filter input {
            background: #2a2a5a;
            color: #f5f6f5;
            border: 1px solid #ffd700;
            border-radius: 10px;
        }

        .dataTables_wrapper .dataTables_length select {
            background: #2a2a5a;
            color: #f5f6f5;
            border: 1px solid #ffd700;
            border-radius: 10px;
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

            .table {
                font-size: 0.9rem;
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
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
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
                    <h1>Messages</h1>
                    <p>View all user-submitted messages to the Multan Art Gallery.</p>
                </div>
            </div>
        </section>

        <section class="messages-section animate__animated animate__fadeIn">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center">Messages</h2>
                    </div>
                    <div class="card-body">
                        @if($messages->isEmpty())
                            <div class="alert alert-info text-center" role="alert">
                                No messages found.
                            </div>
                        @else
                            <div class="table-responsive">
                                <table id="messagesTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="width: 20%">Name</th>
                                            <th style="width: 25%">Email</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $d)
                                            <tr>
                                                <td>{{ $d->id }}</td>
                                                <td>{{ $d->name }}</td>
                                                <td>{{ $d->email }}</td>
                                                <td>{{ $d->message }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        <div class="text-center mt-4">
                            <a href="{{ route('homepage') }}" class="btn btn-gradient">Homepage</a>
                        </div>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#messagesTable').DataTable({
                responsive: true,
                pageLength: 10,
                order: [[0, 'desc']],
                language: {
                    search: "Search messages:",
                    emptyTable: "No messages available in table"
                }
            });
        });
    </script>
</body>
</html>