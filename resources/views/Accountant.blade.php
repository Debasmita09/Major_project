<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerHub</title>
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
                <h1 class="job-title">Accountant</h1>
                <div class="company-info">
                    <h2>Company: <span class="company-name">Rise and Shine</span></h2>
                    <p>Location: <span class="location">Kolkata,India</span></p>
                    <p>Posted on: <span class="post-date">April 2, 2025</span></p>
                </div>
            </div>
 
            <div class="job-description">
                <h3>Job Description</h3>
                <p>
                    A financial professional who manages and analyzes financial records, ensuring accuracy 
                    and compliance with accounting principles and regulations, and providing insights for decision-making.
                </p>
                <h4>Responsibilities:</h4>
                <ul>
                    <li>Maintaing accurate financial records</li>
                    <li>Preparing financial statements.</li>
                    <li>Ensuring compliance with accounting standards.</li>
                    <li>Providing financial analysis to support informed decision making.</li>
                </ul>         
                <h4>Requirements:</h4>
                <ul>
                    <li>Bachelor’s degree in accounting or related field.</li>
                    <li>5+ years of experience in accounting.</li>
                    <li>Along with accounting cetifications like CPA.</li>
                    <li>Relevant experience.</li>
                </ul>
            </div>    

            <div class="job-application">
                <h3>Salary & Benefits</h3>
                <p>Salary Range: 17,568 - 23,823 per year</p>
                <p>Benefits: Health insurance, 401(k), Paid Time Off, Remote work option</p>

                <div class="apply-btn">
                    <a href="{{ Auth::check() ? url('/api/apply-now') : url('/login') }}" class="btn">Apply Now</a>
                </div>
            </div>

            <div class="contact-info">
                <h4>For More Information:</h4>
                <p>Contact HR: <a href="mailto:hr@riseandshine.com">hr@riseandshine.com</a></p>
            </div>
        </div>
    </section>
    <br><br>

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
