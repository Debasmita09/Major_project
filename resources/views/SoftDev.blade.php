<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details - Job Portal</title>
    <link rel="stylesheet" href="{{url('frontend/css/List.css')}}">
</head> 
<body>  
    <header> 
    <div class="header-left">
        <a href="#" class="logo"><img src="{{url('image/logo.png')}}"></a>
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

    <section class="job-details">
        <div class="container">
            <div class="job-header">
                <h1 class="job-title"> Software Developer</h1>
                <div class="company-info">
                    <h2>Company: <span class="company-name">Tech Innovators</span></h2>
                    <p>Location: <span class="location">Noida</span></p>
                    <p>Posted on: <span class="post-date">March 27, 2025</span></p>
                </div>
            </div>
 
            <div class="job-description">
                <h3>Job Description</h3>
                <p>
                    We are looking for a Software Developer to join our dynamic team. As a key member of our engineering team, 
                    you will be responsible for designing, implementing, and maintaining high-quality software solutions.
                </p>
                <h4>Responsibilities:</h4>
                <ul>
                    <li>Design, implement, and maintain software systems.</li>
                    <li>Collaborate with cross-functional teams to define software requirements.</li>
                    <li>Mentor junior developers and lead technical projects.</li>
                    <li>Write clean, maintainable, and efficient code.</li>
                </ul>         
                <h4>Requirements:</h4>
                <ul>
                    <li>Bachelor’s degree in Computer Science or related field.</li>
                    <li>5+ years of experience in software development.</li>
                    <li>Proficiency in Java, Python, or C++.</li>
                    <li>Strong problem-solving skills and attention to detail.</li>
                </ul>
            </div>    

            <div class="job-application">
                <h3>Salary & Benefits</h3>
                <p>Salary Range: $100,000 - $130,000 per year</p>
                <p>Benefits: Health insurance, 401(k), Paid Time Off, Remote work option</p>

                <div class="apply-btn">
                    <a href="apply.html" class="btn">Apply Now</a>
                </div>
            </div>

            <div class="contact-info">
                <h4>For More Information:</h4>
                <p>Contact HR: <a href="mailto:hr@techinnovators.com">hr@techinnovators.com</a></p>
            </div>
        </div>
    </section>

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
