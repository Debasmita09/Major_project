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
        <a href="#" class="logo"><img src="{{url('image/logo.png')}}"></a>
      </div>
    </header>
    <form autocomplete="off" class="form">
        <p class="title">Login</p>
        <p class="message">Login using email-id and password</p>
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
            
            <button class="submit">Submit</button>
            <p class="signin">
                Don't have an account ?
                <a href="{{url('/register')}}">Register</a><br><br>
                <a href="{{url('/')}}">Back to Home Page</a>
            </p>
    </form>

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