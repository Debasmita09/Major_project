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
                <h1 class="job-title">MEAN Developer</h1>
                <div class="company-info">
                    <h2>Company: <span class="company-name">Colan Infotech</span></h2>
                    <p>Location: <span class="location">Hydrabad, India</span></p>
                    <p>Posted on: <span class="post-date">JAN 23, 2025</span></p>
                </div>
            </div>

            <div class="job-description">
                <h3>Job Description</h3>
                <p>
                   A JavaScript based set of technologies for building web and mobile apps.
                </p>
                <h4>Responsibilities:</h4>
                <ul>
                    <li>Building and maintaining web application using MongoDB,ExpressJS,Angular JS and Node.JS</li>
                    <li>Including front-end and back-end development,database management, and deployment</li>
                </ul>
                <h4>Requirements:</h4>
                <ul>
                    <li>Proficiency in HTML,CSS and JavaScript</li>
                </ul>
            </div>

            <div class="job-application">
                <h3>Salary & Benefits</h3>
                <p>Salary Range:5 to 7 LPA per year</p>
                <p>Benefits: Health insurance, 401(k), Paid Time Off, Remote work option</p>

                <div class="apply-btn">
                    <a href="apply.html" class="btn">Apply Now</a>
                </div>
            </div>

            <div class="contact-info">
                <h4>For More Information:</h4>
                <p>Contact HR: <a href="mailto:hr@ColanInfotech.com">hr@ColanInfotech.com</a></p>
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