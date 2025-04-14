<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CareerHub</title>
  <link rel="stylesheet" href="{{url('frontend/css/FAQs.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
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
<br><br>
  <section class="hero">
    <h1>Hi, how can we help you?</h1>
    <div class="search-box">
      <input type="text" placeholder="Search Queries" />
      <button><i class="fas fa-search"></i></button>
    </div>
  </section>
<br><br>
  <section class="quick-solutions">
    <div class="icon-badge">
      <i class="fas fa-robot"></i>
    </div>
    <h2>Quick Solution</h2>
    <p>as per the recent search trend</p>

    <div class="faq-grid">
      <div class="faq-item">
        <span>Q.</span><a href="#">How can I deactivate my account? </a>
      </div>
      <div class="faq-item">
        <span>Q.</span><a href="#"> How can I update/edit my profile?</a>
      </div>
      <div class="faq-item">
        <span>Q.</span> <a href="#">How can I block a recruiter?</a>
      </div>
      <div class="faq-item">
        <span>Q.</span> <a href="#"> Do I need to pay for job interviews?</a>
      </div>
    </div>
  </section>

  <section class="browse-topic">
    <h2>Browse by Topic</h2>
  </section>




  <!--queriespart-->
  <div class="job_queries2">
    <h3>For Job Seekers</h3>
  </div>
  <br>

  <details>
    <summary>How can I deactivate my account?</summary>
    <div class="answer">
      To deactivate your account on the job portal, go to your account settings and choose the "Deactivate Account" option.
    </div>
  </details>

<details>
    <summary>How do I create a profile?</summary>
    <div class="answer">
      Click on the "Sign Up" button at the top of the homepage...
    </div>
  </details>

<details>
    <summary> How can I apply for jobs?</summary>
    <div class="answer">
      Browse job listings, click on one, and hit "Apply"...
    </div>
  </details>

<details>
    <summary>Can I edit my resume after submission?</summary>
    <div class="answer">
      Yes! Log in to your account to update your resume anytime.
    </div>
  </details>

<details>
    <summary> Is it free to use the platform?</summary>
    <div class="answer">
      Yes, it’s completely free for job seekers.
    </div>
  </details>

<details>
    <summary> How do I get job alerts?</summary>
    <div class="answer">
      Enable email alerts in your profile after setting preferences.
    </div>
  </details>

<details>
  <summary> How can I improve my chances of being noticed?</summary>
  <div class="answer">
    Complete your profile and customize your cover letters.
  </div>
</details>



  <div class="job_queries2">
    <h3>For Employers</h3>
  </div>
  <br>
  <summary>  How do I post a job opening?</summary>
  <div class="answer">
    Log into your employer account and click "Post a Job".
  </div>
</details>

<details>
  <summary> Is there a fee for posting jobs?</summary>
  <div class="answer">
    We offer free and premium plans depending on your needs.
  </div>
</details>

<details>
  <summary> Can I manage multiple job postings?</summary>
  <div class="answer">
    Yes, through your employer dashboard.
  </div>
</details>

<details>
  <summary> How do I review candidates?</summary>
  <div class="answer">
    You’ll be notified via email and can review applicants on your dashboard.
  </div>
</details>

<details>
  <summary> Can I contact candidates directly?</summary>
  <div class="answer">
    Yes, via the portal’s messaging system.
  </div>
</details>


  <div class="job_queries2">
    <h3>General Questions</h3>
  </div>
 
  <details>
    <summary> Is it free to use the platform?</summary>
    <div class="answer">
      Click "Forgot Password?" on the login page.
    </div>
  </details>

<details>
  <summary> How do I delete my account?</summary>
  <div class="answer">
    Go to settings and choose "Delete Account".
  </div>
</details>

<details>
  <summary> Is my personal information secure?</summary>
  <div class="answer">
    Yes, we use encryption and strong security practices.  <a href="#">Privacy Policy</a>
  </div>
</details>

<details>
  <summary> I How can I contact customer support?</summary>
  <div class="answer">
    Visit our <a href="#">Contact Us</a>  <br>
    email <a href="mailto:support@careerhub.com">support@careerhub.com</a>
  </div>
</details>


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