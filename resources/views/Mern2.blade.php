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
                <h1 class="job-title">MERN Developer</h1>
                <div class="company-info">
                    <h2>Company: <span class="company-name">MERN Web Application Development</span></h2>
                    <p>Location: <span class="location">Dubai</span></p>
                    <p>Posted on: <span class="post-date">Feb 17, 2025</span></p>
                </div>
            </div>
 
            <div class="job-description">
                <h3>Job Description</h3>
                <p>
                    designs, develops, and maintains web applications using the MERN stack (MongoDB, Express.js, React, and Node.js), 
                    encompassing both frontend and backend development, database management, and ensuring seamless application 
                    performance.
                </p>
                <h4>Responsibilities:</h4>
                <ul>
                    <li>Desings develops and naintain.</li>
                    <li>Web applications using MongoDB.</li>
                    <li>Express.js React and Node.js.</li>
                    <li>Front-end and back-end development,ensuring efficient and reliable applications</li>
                </ul>         
                <h4>Requirements:</h4>
                <ul>
                    <li>String proficiency in Javascript including ES6+ features.</li>
                    <li>Asynchronous programming and functional programming.</li>
                    <li>Along with a good understanding.</li>
                    <li>MongoDB, Express.js and React.js.</li>
                </ul>
            </div>    

            <div class="job-application">
                <h3>Salary & Benefits</h3>
                <p>Salary Range: AED 8,000 - AED 20,800 per year</p>
                <p>Benefits: Health insurance, 201(k), Paid Time Off, Remote work option</p>

                <div class="apply-btn">
                    <a href="apply.html" class="btn">Apply Now</a>
                </div>
            </div>

            <div class="contact-info">
                <h4>For More Information:</h4>
                <p>Contact HR: <a href="mailto:hr@merndevelpersweb.com">hr@merndevelpersweb.com</a></p>
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
