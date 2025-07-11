<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient background for a vibrant look */
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
        .btn-login {
            background: linear-gradient(135deg, #ff416c, #ff4b2b); /* Fiery gradient for admin button */
            border: none;
            font-weight: 600;
            padding: 10px;
            border-radius: 25px;
        }
        .btn-login:hover {
            background: linear-gradient(135deg, #e6355a, #e04327);
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
            box-shadow: 0 0 5px rgba(255,65,108,0.5);
            border-color: #ff416c;
        }
        .alert {
            border-radius: 5px;
            padding: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card login-card animate__animated animate__fadeIn">
                    <div class="card-header text-center">
                        <h4>Admin Login</h4>
                        <small class="text-muted">Access the Admin Dashboard</small>
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

                        <form action="{{ route('adminlog') }}" method="POST">
                            @csrf
                            <!-- Username Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-shield"></i></span>
                                </div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Admin username" value="{{ old('username') }}">
                            </div>

                            <!-- Password Field with Icon -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Admin password">
                            </div>

                            <!-- Login Button -->
                            <button type="submit" class="btn btn-login btn-block">Login as Admin</button>
                        </form>
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