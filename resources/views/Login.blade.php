<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('frontend/css/login.css')}}">
    <title>CareerHub</title>
</head>

<body>
    <header class="header">
        <div class="header-left">
        <a href="{{ url('/') }}" class="logo"><img src="{{ url('image/logo.png') }}"></a>

        </div>
    </header>
    <form method="POST" action="{{ url('/login') }}" autocomplete="off" class="form">
        @csrf 

        <p class="title">Login</p>
        <p class="message">Login using registered email-id and password</p>

        <label>
        <input type="text" name="email" placeholder="Email" required>
        </label>

        <label>
            <input type="password" name="password" id="password" placeholder="password" required>
           <div class="icon" onclick="togglePassword('password', this)">
                <i class="fa fa-eye"></i>
            </div>
        </label>

        <button type="submit" class="submit">Submit</button>

        <p class="signin">
            Don't have an account ?
            <a href="{{ url('/register') }}">Register</a><br><br>
            <a href="{{ url('/') }}">Back to Home Page</a>
        </p>
    </form>


    <footer>
        <p>&copy; 2025 CareerHub. All Rights Reserved.</p>
        <div class="footer-links">
            
            <a href="{{url('/terms')}}">Terms & Conditions</a>
            <a href="{{url('/faq')}}">FAQs</a>
        </div>
    </footer>

    <script>
         function togglePassword(id, iconElement) {
            const input = document.getElementById(id);
            const icon = iconElement.querySelector('i');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }

        function validateFormData(data) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,10}$/;

            if (!emailRegex.test(data.email)) {
                return "Please enter a valid email address.";
            }

            if (!passwordRegex.test(data.password)) {
                return "Password must be 8-10 characters, include a capital letter, number, and special character.";
            }

            const confirmPassword = document.getElementById('passwordConfirm').value;
            if (data.password !== confirmPassword) {
                return "Passwords do not match.";
            }

            return null;
        }
     </script>
</body>

</html>