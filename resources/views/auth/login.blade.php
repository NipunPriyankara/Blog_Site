<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            width: 400px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1rem;
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

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .remember-me input[type="checkbox"] {
            margin-right: 10px;
            accent-color: #fff;
        }

        .btn {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            font-weight: bold;
            color: #1f4037;
            background: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn:hover {
            background: #f1f1f1;
        }

        .footer {
            margin-top: 1rem;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer a {
            color: #fff;
            text-decoration: underline;
        }

        .footer a:hover {
            color: #e3e3e3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome Back</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                @error('email')
                    <span class="text-danger" style="color: #ffcccc;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
                @error('password')
                    <span class="text-danger" style="color: #ffcccc;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn">Login</button>
        </form>

        <div class="footer">
            Don't have an account? <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
</body>
</html>
