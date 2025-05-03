<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>CareerHub</title>
    <link rel="stylesheet" href="{{url('frontend/css/JobDetail.css')}}">
</head>
<body>
    <header>
    <div class="header-left">
        <a href="#" class="logo"><img src="{{url('image/logo.png')}}"></a>
      </div>
</header>
    <h5>CareerHub Details Page</h5>
    <div class="container">
  
   <div class="first_column">
       <form>
        <label><a href="{{url('/profile')}}">My Profile</a></label><br><hr><br>
        <label><a href="{{url('/postJob')}}">Post a job</a></label><br><hr><br>
        <label><a href="{{url('/myJob')}}">My Jobs</a></label><br><hr><br>
        <label><a href="{{url('/appliedJob')}}">Jobs Applied</a></label><br><hr><br>
        <label><a href="{{url('/savedJob')}}">Lead Jobs</a></label><br><hr><br>
       </form> 
   </div>
   <div class="second_column">
    <h2>Job Details</h2><br><br>
        <form action="JobDetail.php" method="POST">
            <label for="title">Title*</label>
            <input type="text"  name="title" placeholder="Job Title" required>
            <br>
            <label for="category">Category*</label>
            <select class="px-4 py-2 border rounded-md focus:outline-none">
            <option>Technical</option>
            <option>Non-Technical</option>
            </select>
            <br>
            <br>
            <label for="vacancy">Designation*</label>
            <select class="px-4 py-2 border rounded-md focus:outline-none">
            <option>Software Developer</option>
            <option>Web Developer</option>
            <option>Accountant</option>
            <option>Field Sales</option>
          </select>
            <br>
            <br>
            <label for="vacancy">JobType*</label>
            <select class="px-4 py-2 border rounded-md focus:outline-none">
            <option>FullTime</option>
            <option>PartTime</option>
            <option>Internship</option>
          </select>
            <br>
            <br>
            <label for="salary">Salary*</label>
            <input type="text"  name="salary" placeholder="Salary" required>
            <br>
            <br>
            <label for="vacancy">City*</label>
            <select class="px-4 py-2 border rounded-md focus:outline-none">
            <option>Noida</option>
            <option>Kolkata</option>
            <option>Bangalore</option>
            <option>Hydrabad</option>
          </select>
            <br>
            <br>
            <label for="description">Description*</label><br>
            <textarea  placeholder="Description" name="description" rows="5" required></textarea>
            <br>
            <label for="benefits">Benefits</label><br>
            <textarea  placeholder="Benefits" name="benefits" rows="5" required></textarea>
            <br>
            <label for="qualifications">Qualifications</label><br>
            <textarea  placeholder="Qualifications" name="qualifications" rows="5" required></textarea>
            <br><br>
            <h2>Company Details</h2>
            <br><br>
            <label for="name">Name*</label>
            <input type="text"  name="name" placeholder="Company name" required>
            <br>
            <label for="email">Email*</label>
            <input type="email"  name="email" placeholder="Enter email" required>
            <br>
            <label for="location">Location</label>
            <input type="text"  name="location" placeholder="Location" required>
            <br>
            <label for="website">Website</label>
            <input type="text"  name="website" placeholder="Website" required>
            <br>
            <hr><br>
            <button type="submit" name="save">Save Job</button>
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