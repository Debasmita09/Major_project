<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('frontend/css/register.css')}}">
    <title>CareerHub</title>
</head>
<body>
    <header class="header">
    <div class="header-left">
        <a href="#" class="logo"><img src="{{url('image/logo.png')}}"></a>
      </div>
    </header>
    <form autocomplete="off" class="form">
        <p class="title">Register</p>
        <p class="message">Signup now to get full access to our app</p>
        <div class="form-group">
            <label>
                <input type="text" required>
                <span>First Name</span>
            </label>
            <label>
                <input type="text" required>
                <span>Last Name</span>
            </label>
        </div>
            <label>
                <input type="text" required>
                <span>Email</span>
            </label>
            <label>
                <input type="password" id="password" required>
                <span>Password</span>
                <span class="icon" id="togglePassword">
                    <i class="far fa-eye-slash"></i>
                </span>
            </label>
            <label>
                <input type="password" id="passwordConfirm" required>
                <span>Confirm Password</span>
                <span class="icon" id="togglePasswordConfirm">
                    <i class="far fa-eye-slash"></i>
                </span>
            </label>
            <button class="submit">Submit</button>
            <p class="signin">
                Already have an account ?
                <a href="{{url('/login')}}">Login</a><br><br>
                <a href="{{url('/')}}">Back to Home Page</a>
            </p>
    </form>
<hr>
    <footer>
    <p>&copy; 2025 CareerHub. All Rights Reserved.</p>
    <div class="footer-links">
      <a href="{{url('/')}}">Home Page</a>
      <a href="{{url('/terms')}}">Terms & Conditions</a>
      <a href="{{url('/faq')}}">FAQs</a>
    </div>
  </footer>
</body>
</html>