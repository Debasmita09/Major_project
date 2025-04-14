<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerHub</title>
    <link rel="stylesheet" href="{{url('frontend/css/blogs.css')}}">
</head>
<body>
    
  <!-- Header Section -->
  <header>
    <div class="header-left">
        <a href="#" class="logo"><img src="{{url('image/logo.png')}}"></a>
    </div>
    <nav>
      <ul>
      <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/details')}}">Job Search</a></li>
        <li><a href="{{url('/profile')}}">Employers</a></li>
        <li><a href="{{url('/about')}}">About Us</a></li>
        <li><a href="{{url('/login')}}">Login</a></li>
        <li><a href="{{url('/register')}}">Register</a></li>
      </ul>
    </nav>
  </header>

    <!-- Hero Section -->
    <section class="blogshero">
        <h2>Career Tips & Insights</h2>
        <p>Stay updated with the latest job trends and career advice.</p>
    </section>

  <!-- Blog Content -->
  <main class="blog-container">
    <section class="blog-posts">
        <article class="post">
            <img src="{{url('image/resume-tips.jpg')}}" alt="Resume Tips">
            <h2>How to Write a Winning Resume</h2>
            <p>Your resume is your first impression. Learn the key tips to create a strong resume.</p>
            <a href="{{url('/blog1')}}" class="read-more">Read More</a>
        </article>

        <article class="post">
            <img src="{{url('image/blogs_interview.jpg')}}" alt="Job Interview">
            <h2>Top 10 Interview Questions & Answers</h2>
            <p>Prepare for your next job interview with these commonly asked questions.</p>
            <a href="{{url('/blog2')}}" class="read-more">Read More</a>
        </article>

        <article class="post">
            <img src="{{url('image/remote-jobs.jpg')}}" alt="Remote Jobs">
            <h2>The Future of Remote Work</h2>
            <p>Explore the rise of remote jobs and how they are changing the job market.</p>
            <a href="{{url('/blog3')}}" class="read-more">Read More</a>
        </article>
    </section>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Categories</h3>
        <ul>
            <li><a href="#">Resume Tips</a></li>
            <li><a href="#">Job Interview</a></li>
            <li><a href="#">Career Growth</a></li>
            <li><a href="#">Freelancing</a></li>
            <li><a href="#">Remote Jobs</a></li>
        </ul>
    </aside>
    </main>
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
