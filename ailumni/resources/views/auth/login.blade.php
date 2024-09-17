<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css']) <!-- Link to your CSS file -->
</head>
<body>
    <div class="background"></div> <!-- Background Div -->
    
    <div class="container">
        <div class="login-box">
            <div class="logo">
                <img src="/images/grc.png" alt="Instagram Icon" class="logo-icon">
                <h1></h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log In</button>
            </form>

            <div class="register-link">
                <a href="{{ route('register') }}" class="register-button">Don't have an account? Register</a>
            </div>

            <div class="forgot-password">
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>
        </div>
    </div>
</body>
</html>
