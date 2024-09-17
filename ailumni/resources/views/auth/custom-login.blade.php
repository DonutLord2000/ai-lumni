<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css']) 
    <style>
        /* Style for the alert */
        .alert {
            padding: 15px;
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .close-btn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 20px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .close-btn:hover {
            color: black;
        }
    </style>
</head>
<body>
    <div class="background"></div> 

    <div class="container">
        <div class="login-box">
            <div class="logo">
                <img src="/images/grc.png" alt="Icon" class="logo-icon">
                <h1>Log in</h1>
            </div>

            @if ($errors->any())
            <div class="alert">
                <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ $errors->first('email') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="login-button">Login</button>
            </form>

            <div class="register-link">
                <a href="{{ route('register.custom') }}">Don't have an account? Register</a>
            </div>

            <div class="forgot-password">
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>
        </div>
    </div>
</body>
</html>
