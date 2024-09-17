<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/css/app.css']) <!-- Link to your CSS file -->
</head>
<body>
    <div class="background"></div> <!-- Background Div -->

    <div class="container">
        <div class="register-box">
            <div class="logo">
                <img src="/images/grc.png" alt="Icon" class="logo-icon">
                <h1>Register</h1>
            </div>

            <form method="POST" action="{{ route('register.custom') }}">
                @csrf
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit" class="register-button">Register</button>
            </form>

            <div class="login-link">
                <a href="{{ route('login') }}">Already have an account? Log In</a>
            </div>
        </div>
    </div>
</body>
</html>
