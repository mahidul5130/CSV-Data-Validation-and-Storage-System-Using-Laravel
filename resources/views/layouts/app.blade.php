<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">CSV Data Validation and Storage System</a>
            <ul class="navbar-nav">
                <!-- Upload CSV link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Upload CSV</a>
                </li>
                <!-- User List link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list') }}">User List</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Main content section -->
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>