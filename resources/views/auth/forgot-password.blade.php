<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Full-Height Centering */
        body, html {
            height: 100%;
            margin: 0;
        }

        .full-height {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: url('{{ asset('assets/images/01.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }

        .card {
            background: rgba(255, 255, 255, 0.7); /* Slightly transparent background */
            border: none;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }

        h3, label, p, a {
            font-weight: bold;
            color: black;
        }

        .form-control {
            color: black;
        }
    </style>
</head>
<body>

    <div class="full-height">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="text-center mb-3">Forgot Password?</h3>

                            <p class="text-center">
                                {{ __('No problem! Just enter your email address and we’ll send you a link to reset your password.') }}
                            </p>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Password Reset Form -->
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Input -->
                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <x-primary-button class="btn btn-primary w-100">
                                        {{ __('Send Password Reset Link') }}
                                    </x-primary-button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
