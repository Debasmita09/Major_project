<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>CareerHub</title>
    <link rel="stylesheet" href="{{url('frontend/css/myJob.css')}}">
</head>
<body>
<x-header />

    <h5>CareerHub Details Page</h5>
    <div class="container">
  
   <div class="first_column">
   <x-sidebar />

   </div>
   <div class="second_column">
    <h2>Lead Jobs</h2><br><br>
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
                        <p>Employee Name</p>
                    </div>
                    <div class="table-cell">
                        <p>Phone No.</p>
                    </div>
                    <div class="table-cell last-cell">
                        <p>Download CV</p>
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