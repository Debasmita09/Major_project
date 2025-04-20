<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerHub</title>
    <link rel="stylesheet" href="{{url('frontend/css/aboutus.css')}}">
<body>
     
  <header>
  <div class="header-left">
        <a href="#" class="logo"><img src="{{url('image/logo.png')}}"></a>
      </div>
      <h1>Careerhub</h1>
    </div>
    <nav>
      <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/details')}}">Job Search</a></li>
        <li><a href="{{url('/profile')}}">Employers</a></li>
        <li><a href="{{url('/blog')}}">Blogs</a></li>
        <li><a href="{{url('/login')}}">Login</a></li>
        <li><a href="{{url('/register')}}">Register</a></li>
      </ul>
    </nav>
  </header>


    <div class="aboutcontainer">
        <h1>About Us</h1>
        <p>Welcome to [careerhub 🐝], your trusted platform  for finding the best job opportunities. Our mission is to connect job seekers with top employers, making job searching effortless and efficient.</p>
        
        <h2>Why Choose Us?</h2>
        <div class="section"> ✔ Thousands of job listings updated daily<br>✔ Wide range of job listings<br>✔ Verified employers<br>✔ Easy application process<br>✔ Career resources and guidance<br>✔ Resume guidance, and interview preparation</div>
        
        <h2>Meet Our Team</h2>
        <div class="team">
            <div class="team-member">
                <img src="{{url('image/a1.jpg')}}" alt="Founder">
                <p><strong>John Doe</strong></p>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="{{url('image/a2.jpg')}}" alt="CTO">
                <p><strong>Jane Smith</strong></p>
                <p>CTO & Developer</p>
            </div>
            <div class="team-member">
                <img src="{{url('image/a3.jpg')}}" alt="HR">
                <p><strong>Michael Lee</strong></p>
                <p>Head of HR</p>
            </div>
        </div>

        <h2>Our Mission</h2>
        <div class="section">
            <p>We believe that job searching should be simple, fast, and stress-free. By leveraging technology, we provide job seekers with access to top employers and help businesses find the best talent.</p>
        </div>

        <h2>Get in Touch</h2>
        <p>If you have any questions, feel free to contact us at <strong>support@yourjobportal.com</strong>.</p>
    </div>


        <h2>Our Users Love Us!</h2>
        <div class="review">
            <p><strong>Emily R.</strong></p>
            <p>"This platform helped me land my dream job in just two weeks! Highly recommend."</p>
            <p class="stars">★★★★★</p>
        </div>
        <div class="review">
            <p><strong>Michael S.</strong></p>
            <p>"User-friendly and efficient. The job recommendations were spot on!"</p>
            <p class="stars">★★★★☆</p>
        </div>
        <div class="review">
            <p><strong>Sophia L.</strong></p>
            <p>"Great resource for job seekers. The application tracking feature is a game-changer."</p>
            <p class="stars">★★★★★</p>
        </div>
    </div>

      <!-- Footer Section -->
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
