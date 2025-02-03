<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Image Styling */
        body {
            background: url('{{ asset('assets/images/02.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 90vh;
            color: black; /* Default text color set to black */
        }
        .card {
            background: rgba(255, 255, 255, 0.644); /* Increased transparency */
            border: none;
            border-radius: 10px;
            margin: 10px; /* Reduced margin */
            padding: 50px;
            max-width: 500px; /* Adjusted size */
        }
        h3, label, p, a { 
             
            color: black; /* Black font color */
            font-weight: bold;
        }
        .form-control {
        
            color: black; /* Black input text color */
        }
    </style>
</head>
<body>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-sm p-4" style="width: 100%;">
        <h3 class="text-center mb-4">Create an Account</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Full Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" 
                       class="form-control @error('name') is-invalid @enderror" 
                       value="{{ old('name') }}" required autofocus placeholder="Enter your name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" required placeholder="Enter your email">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Phone and Address in One Row -->
<div class="row mb-3">
    <!-- Phone -->
    <div class="col-md-6">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" id="phone" name="phone" 
               class="form-control @error('phone') is-invalid @enderror" 
               value="{{ old('phone') }}" required placeholder="Enter your phone number">
        @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Address -->
    <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" id="address" name="address" 
               class="form-control @error('address') is-invalid @enderror" 
               value="{{ old('address') }}" required placeholder="Enter your address">
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>


            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       required placeholder="Create a password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" 
                       class="form-control" required placeholder="Confirm your password">
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


