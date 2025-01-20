<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>

<link rel="stylesheet" href="{{ asset('css/login.css') }}?v={{ time() }}">

 
        
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">MyApp</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="profile">Profile</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome Back, {{ Auth::user()->name }}!</h1>
        <p>We're glad to have you here. What would you like to do today?</p>

        <div class="actions">
            
            <a href="/newblog">New Blog</a>
            <a href="/myblog">My Blog</a>
            
        </div>
    </div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} MyApp. All rights reserved.
    </footer>
</body>
</html>
