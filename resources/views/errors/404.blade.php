<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page not found - Multan Art Gallery">
    <title>404 - Page Not Found | Multan Art Gallery</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #343a40;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        h1, h2 {
            font-family: 'Playfair Display', serif;
        }

        .error-container {
            text-align: center;
            padding: 5rem 1.5rem;
            flex-grow: 1;
        }

        .error-title {
            font-size: 6rem;
            color: #6a11cb;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 1.5rem;
            color: #495057;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-home {
            background: linear-gradient(135deg, #ffd700, #ff6f61);
            color: #fff;
            padding: 0.75rem 2rem;
            border-radius: 25px;
            font-weight: 500;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }

        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        .footer {
            background: linear-gradient(to bottom, #1a1a3d, #0a0a23);
            padding: 2rem 0;
            text-align: center;
            color: #f5f6f5;
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

        @media (max-width: 768px) {
            .error-title {
                font-size: 4rem;
            }
            .error-message {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-container animate__animated animate__fadeIn">
        <h1 class="error-title">404</h1>
        <h2>Page Not Found</h2>
        <p class="error-message">Oops! It looks like the page you're looking for doesn't exist or has been moved.</p>
        <a href="{{ route('main') }}" class="btn btn-home">
            <i class="fas fa-home me-2"></i>Back to Home
        </a>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="social-icons mb-3">
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
            <p>Multan Art Gallery © 2025</p>
            <p>New to our platform? <a href="{{ route('about') }}">Visit the About page</a> or <a href="{{ route('contactus') }}">contact us</a>.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
