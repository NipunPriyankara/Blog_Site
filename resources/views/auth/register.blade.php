<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .btn {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            font-weight: bold;
            color: #000000;
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
        <h2>Create an Account</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your name">
                @error('name')
                    <span class="text-danger" style="color: #ffcccc;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email">
                @error('email')
                    <span class="text-danger" style="color: #ffcccc;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="phone" id="phone" name="phone" value="{{ old('phone') }}" required autofocus placeholder="Enter your phone number">
                @error('phone')
                    <span class="text-danger" style="color: #ffcccc;">{{ $message }}</span>
                @enderror
            </div>


            <!-- Address -->
            <div class="form-group">
                <label for="address">Address</label>
                <input type="address" id="address" name="address" value="{{ old('address') }}" required autofocus placeholder="Enter your address">
                @error('address')
                    <span class="text-danger" style="color: #ffcccc;">{{ $message }}</span>
                @enderror
            </div>

            

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Create a password">
                @error('password')
                    <span class="text-danger" style="color: #ffcccc;">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn">Register</button>
        </form>

        <div class="footer">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</body>
</html>
