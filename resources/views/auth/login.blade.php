<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Image Styling */
        body {
            background: url('{{ asset('assets/images/01.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            color: black; /* Default text color set to black */
        }
        .card {
            background: rgba(255, 255, 255, 0.5); /* Increased transparency */
            border: none;
            border-radius: 10px;
        }
        h3, label, p, a {
            font-weight: bold; /* Bold text */
            color: black; /* Black font color */
        }
        .form-control {
            color: black; /* Black input text color */
        }
    </style>
</head>
<body>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <h3 class="text-center mb-4">Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me & Forgot Password in Same Row -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- Remember Me -->
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember Me</label>
                </div>
                <!-- Forgot Password -->
                <div>
                    <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
