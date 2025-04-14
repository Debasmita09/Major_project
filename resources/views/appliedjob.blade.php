<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>CareerHub</title>
    <link rel="stylesheet" href="{{url('frontend/css/myJob.css')}}">
</head>
<body>
    <header>
    <div class="header-left">
        <a href="#" class="logo"><img src="{{url('image/logo.png')}}"></a>
      </div>
    <header>
    <h5>CareerHub Details Page</h5>
    <div class="container">
  
   <div class="first_column">
       <form>
        <label><a href="{{url('/profile')}}">My Profile</a></label><br><hr><br>
        <label><a href="{{url('/postJob')}}">Post a job</a></label><br><hr><br>
        <label><a href="{{url('/myJob')}}">My Jobs</a></label><br><hr><br>
        <label><a href="{{url('/appliedJob')}}">Jobs Applied</a></label><br><hr><br>
        <label><a href="{{url('/savedJob')}}">Saved Jobs</a></label><br><hr><br>
       </form> 
   </div>
   <div class="second_column">
    <h2>Applied Jobs</h2><br><br>
        <form action="JobDetail.php" method="POST">
            <div class="table-box">
                <div class="table-row table-head">
                    <div class="table-cell first-cell">
                        <p>Title</p>
                    </div>
                    <div class="table-cell">
                        <p>Job Created</p>
                    </div>
                    <div class="table-cell">
                        <p>Applicants No</p>
                    </div>
                    <div class="table-cell">
                        <p>Status</p>
                    </div>
                    <div class="table-cell last-cell">
                        <p>Action</p>
                    </div> 
                </div>
            
        </form>
   </div>
</div>
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