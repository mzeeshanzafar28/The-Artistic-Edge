<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Visual Art Gallery</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Animate.css for Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
      color: #e2e8f0;
      min-height: 100vh;
      margin: 0;
    }
    .sidebar {
      background: #0f172a;
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      padding: 1.5rem;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease;
    }
    .sidebar-hidden {
      transform: translateX(-250px);
    }
    .sidebar-brand {
      font-size: 1.5rem;
      font-weight: bold;
      color: #f472b6;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .sidebar-nav .nav-link {
      color: #94a3b8;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 1rem;
      transition: all 0.3s ease;
    }
    .sidebar-nav .nav-link:hover, .sidebar-nav .nav-link.active {
      background: #f472b6;
      color: #fff;
      transform: translateX(5px);
    }
    .sidebar-nav .nav-link i {
      font-size: 1.2rem;
    }
    .main-content {
      margin-left: 250px;
      padding: 2rem;
      transition: margin-left 0.3s ease;
    }
    .main-content.full-width {
      margin-left: 0;
    }
    .dashboard-header {
      background: #1e293b;
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      margin-bottom: 2rem;
    }
    .dashboard-header h1 {
      font-size: 2rem;
      font-weight: 700;
      color: #f472b6;
      margin: 0;
    }
    .toggle-btn {
      position: fixed;
      top: 1rem;
      left: 260px;
      z-index: 1000;
      background: #f472b6;
      color: #fff;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: left 0.3s ease;
    }
    .toggle-btn.hidden {
      left: 1rem;
    }
    .toggle-btn:hover {
      background: #ec4899;
    }
    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-250px);
      }
      .sidebar.active {
        transform: translateX(0);
      }
      .main-content {
        margin-left: 0;
      }
      .toggle-btn {
        left: 1rem;
      }
      .toggle-btn.hidden {
        left: 260px;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar animate__animated animate__fadeInLeft">
    <div class="sidebar-brand">
      <i class="fas fa-palette"></i>
      Admin Panel
    </div>
    <nav class="sidebar-nav">
      <a href="{{ route('artistList') }}" class="nav-link">
        <i class="fas fa-palette"></i> View Artists
      </a>
      <a href="{{ route('exhibition.create') }}" class="nav-link">
        <i class="fas fa-plus-circle"></i> Add Exhibition
      </a>
      <a href="{{ route('exhibition.index') }}" class="nav-link">
        <i class="fas fa-eye"></i> View Exhibitions
      </a>
      <a href="{{ route('main') }}" class="nav-link">
        <i class="fas fa-home"></i> Homepage
      </a>
      <a href="{{ route('message.index') }}" class="nav-link">
        <i class="fas fa-envelope"></i> View Messages
      </a>
    </nav>
  </div>

  <!-- Toggle Button -->
  <!-- <button class="toggle-btn" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
  </button> -->

  <!-- Main Content -->
  <div class="main-content">
    <div class="dashboard-header animate__animated animate__fadeInDown">
      <h1>Welcome to the Admin Dashboard</h1>
      <p class="text-gray-400 mt-2">Manage artists, exhibitions, and messages with ease.</p>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card bg-dark text-white border-0 shadow-sm animate__animated animate__zoomIn" style="border-radius: 12px;">
          <div class="card-body">
            <h5 class="card-title">Artists Overview</h5>
            <p class="card-text">View and manage the list of artists in the gallery.</p>
            <a href="{{ route('artistList') }}" class="btn btn-outline-light">Go to Artists</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card bg-dark text-white border-0 shadow-sm animate__animated animate__zoomIn" style="border-radius: 12px; animation-delay: 0.2s;">
          <div class="card-body">
            <h5 class="card-title">Exhibitions Management</h5>
            <p class="card-text">Create and view upcoming exhibitions.</p>
            <a href="{{ route('exhibition.index') }}" class="btn btn-outline-light">Go to Exhibitions</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      const mainContent = document.querySelector('.main-content');
      const toggleBtn = document.querySelector('.toggle-btn');
      sidebar.classList.toggle('active');
      sidebar.classList.toggle('sidebar-hidden');
      mainContent.classList.toggle('full-width');
      toggleBtn.classList.toggle('hidden');
    }
  </script>
</body>
</html>