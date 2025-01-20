<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #1f4037, #99f2c8);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            width: 400px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #fff;
            margin: 0 auto 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            color: #4e54c8;
            font-weight: bold;
        }

        h2 {
            margin-bottom: 1rem;
            font-weight: 600;
        }

        p {
            font-size: 0.9rem;
            margin-bottom: 1rem;
            color: #e3e3e3;
        }

        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        .btn {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            font-weight: bold;
            color: #4ec88f;
            background: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .btn:hover {
            background: #f1f1f1;
        }

        .link {
            margin-top: 1rem;
            text-align: center;
        }

        .link a {
            color: #fff;
            text-decoration: underline;
        }

        .link a:hover {
            color: #d3d3d3;
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
        }

        footer a {
            color: #fff;
            text-decoration: underline;
        }

        footer a:hover {
            color: #e3e3e3;
        }
    </style>
</head>
<body>
    <!-- Profile Container -->
    <div class="container">
        <!-- User Avatar -->
        <div class="avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>

        <!-- User Info -->
        <h2>{{ auth()->user()->name }}</h2>
        <p>Email: {{ auth()->user()->email }}</p>
        <p>Phone: {{ auth()->user()->phone ?? 'Not provided' }}</p>
        <p>Address: {{ auth()->user()->address ?? 'Not provided' }}</p>

        <!-- Update Profile Form -->
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ auth()->user()->phone }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="{{ auth()->user()->address }}">
            </div>

            <button type="submit" class="btn">Update Profile</button>
        </form>

        <!-- Additional Links -->
        <div class="link">
            <a href="{{ route('dashboard') }}">Go to Dashboard</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} My Profile. All rights reserved.
    </footer>
</body>
</html>