<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/css/app.css']) <!-- Make sure this is linked properly -->
</head>

<style>
    /* Red border for password mismatch */
    .error-border {
        border-color: red;
    }

    /* Optional error message styling */
    .error-message {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }
</style>

<body>
    <div class="background"></div>

    <div class="container">
        <div class="register-box">
            <div class="logo">
                <img src="/images/grc.png" alt="Icon" class="logo-icon">
                <h1>Register</h1>
            </div>

            <form method="POST" action="{{ route('register.custom') }}" id="registerForm" onsubmit="return validateForm()">
                @csrf
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" id="confirmPassword" required>
                <span id="passwordError" class="error-message" style="display: none;">Passwords do not match</span>
                <button type="submit" class="register-button">Register</button>
            </form>

            <div class="login-link">
                <a href="{{ route('login.custom') }}">Already have an account? Log In</a>
            </div>
        </div>
    </div>
    
    <script>
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        const passwordError = document.getElementById('passwordError');

        // Function to check if the passwords match
        function checkPasswordMatch() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.classList.add('error-border');
                passwordError.style.display = 'block';
                return false;
            } else {
                confirmPassword.classList.remove('error-border');
                passwordError.style.display = 'none';
                return true;
            }
        }

        // Validate the form before submission
        function validateForm() {
            return checkPasswordMatch(); // Return true if passwords match, false otherwise
        }

        // Attach real-time validation to input fields
        password.addEventListener('input', checkPasswordMatch);
        confirmPassword.addEventListener('input', checkPasswordMatch);
    </script>
    
</body>
</html>
