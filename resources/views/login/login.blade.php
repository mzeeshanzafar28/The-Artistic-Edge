<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Multan Art Gallery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298); /* Artistic blue gradient */
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-card {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 15px;
            background-color: #ffffff;
            transition: transform 0.3s ease;
        }
        .login-card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding-bottom: 0;
            color: #333;
        }
        .card-header h4 {
            font-weight: 700;
            margin-bottom: 0;
        }
        .card-header small {
            color: #6c757d;
        }
        .btn-login {
            background: linear-gradient(135deg, #00c6ff, #0072ff); /* Vibrant blue gradient */
            border: none;
            font-weight: 600;
            padding: 10px;
            border-radius: 25px;
        }
        .btn-login:hover {
            background: linear-gradient(135deg, #00aaff, #005bb5);
            transform: scale(1.05);
            transition: all 0.2s;
        }
        .input-group-text {
            background-color: #f1f3f5;
            border: none;
            border-radius: 5px 0 0 5px;
        }
        .form-control {
            border-radius: 0 5px 5px 0;
            border: none;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0,114,255,0.5);
            border-color: #0072ff;
        }
        .alert {
            border-radius: 5px;
            padding: 10px;
            font-size: 0.9rem;
        }
        .btn-link {
            color: #0072ff;
            font-weight: 500;
        }
        .btn-link:hover {
            color: #005bb5;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card login-card animate__animated animate__fadeIn">
                    <div class="card-header text-center">
                        <h4>Login to Multan Art Gallery</h4>
                        <small class="text-muted">Explore Art & Exhibitions</small>
                    </div>
                    <div class="card-body">
                        <!-- Success Message -->
                        @if(session('success'))
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <i class="fas fa-check-circle mr-2"></i>
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Error Message -->
                        @if(session('error'))
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Validation Errors -->
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li><i class="fas fa-exclamation-circle mr-2"></i>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <!-- Username Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="username" name="name" placeholder="Enter your username" value="{{ old('name') }}">
                            </div>

                            <!-- Password Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>

                            <!-- Login Button -->
                            <button type="submit" class="btn btn-login btn-block">Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Don't have an account? <a href="{{ route('signuppage') }}" class="btn btn-link">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>