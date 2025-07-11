<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Multan Art Gallery</title>
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
            background: linear-gradient(135deg, #4facfe, #00f2fe); /* Vibrant cyan gradient */
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .signup-card {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 15px;
            background-color: #ffffff;
            transition: transform 0.3s ease;
        }
        .signup-card:hover {
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
        .btn-signup {
            background: linear-gradient(135deg, #00f2fe, #4facfe); /* Cyan gradient matching background */
            border: none;
            font-weight: 600;
            padding: 10px;
            border-radius: 25px;
        }
        .btn-signup:hover {
            background: linear-gradient(135deg, #00d4e6, #3f9bfe);
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
            box-shadow: 0 0 5px rgba(0,242,254,0.5);
            border-color: #00f2fe;
        }
        .alert {
            border-radius: 5px;
            padding: 10px;
            font-size: 0.9rem;
        }
        .invalid-feedback {
            font-size: 0.85rem;
        }
        .btn-link {
            color: #4facfe;
            font-weight: 500;
        }
        .btn-link:hover {
            color: #3f9bfe;
            text-decoration: none;
        }
        .card-footer {
            border-top: none;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card signup-card animate__animated animate__fadeIn">
                    <div class="card-header text-center">
                        <h4>Join Multan Art Gallery</h4>
                        <small class="text-muted">Create Your Account</small>
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

                        <form action="{{ route('signup') }}" method="POST">
                            @csrf
                            <!-- Username Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name" value="{{ old('name') }}" placeholder="Enter username">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
                            </div>

                            <!-- Signup Button -->
                            <button type="submit" class="btn btn-signup btn-block">Signup</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Already have an account? <a href="{{ route('loginpage') }}" class="btn btn-link">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>