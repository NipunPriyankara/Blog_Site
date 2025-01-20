<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #3a7bd5, #3a6073);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: #333;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }

        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #4caf50;
        }

        .container {
            flex-grow: 1;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            width: 250px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, background 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.2);
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .card a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }

        .card a:hover {
            color: #4caf50;
        }

        footer {
            background: #333;
            text-align: center;
            padding: 1rem;
            color: #fff;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">Admin Panel</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Settings</a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Main Dashboard -->
    <div class="container">
        <div class="card">
            <h3>Users</h3>
            <a href="/admin/users">Manage Users</a>
        </div>
        <div class="card">
            <h3>Posts</h3>
            <a href="/admin/posts">Manage Posts</a>
        </div>
        <div class="card">
            <h3>Reports</h3>
            <a href="/admin/reports">View Reports</a>
        </div>
        <div class="card">
            <h3>Settings</h3>
            <a href="/admin/settings">Application Settings</a>
        </div>
    </div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} Admin Panel. All rights reserved.
    </footer>
</body>
</html>
