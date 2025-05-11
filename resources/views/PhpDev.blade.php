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
                <h1 class="job-title">PHP Developer</h1>
                <div class="company-info">
                    <h2>Company: <span class="company-name">Infotech Wayout</span></h2>
                    <p>Location: <span class="location">Kolkata, India</span></p>
                    <p>Posted on: <span class="post-date">DEC 21, 2024</span></p>
                </div>
            </div>

            <div class="job-description">
                <h3>Job Description</h3>
                <p>
                    specializes in writing and maintaining server-side web applications using the PHP scripting language,often interacting
                     with databases and collaborating with front-end developers to create dynamic and interactive websites and applications.
                </p>
                <h4>Responsibilities:</h4>
                <ul>
                    <li>Building and maintaining the serer side logic </li>
                    <li>Bckend components of web applications using the PHP.</li>
                    <li>Programming language often integrating with database and other web services.</li>
                </ul>
                <h4>Requirements:</h4>
                <ul>
                    <li>A strong foundatiob in PHP understanding of database.</li>
                    <li>Familarity with web development technologies.</li>
                    <li>Experience with framework like laravel or symfony.</li>
                    <li>Along with good problem solveing and communuication skills.</li>
                </ul>
            </div>

            <div class="job-application">
                <h3>Salary & Benefits</h3>
                <p>Salary Range: 1.1Lakh to 6.8Lakh per year</p>
                <p>Benefits: Health insurance, 201(k), Paid Time Off, Remote work option</p>

                <div class="apply-btn">
                <a href="{{ Auth::check() ? url('/apply') : url('/login') }}" class="btn">Apply Now</a>
                </div>
            </div>

            <div class="contact-info">
                <h4>For More Information:</h4>
                <p>Contact HR: <a href="mailto:hr@infotechwayout.com">hr@infotechwayout.com</a></p>
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