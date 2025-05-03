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
        <form action="JobDetail.php" method="POST">

            <h2>Personal Details</h2><br>
            <label for="name">Name*</label>
            <input type="text"  name="name" placeholder="Enter name" required>
            <br>
            <label for="email">Email*</label>
            <input type="email"  name="email" placeholder="Enter email" required>
            <br>
            <label for="number">Phone Number*</label>
            <input type="text"  name="phone" placeholder="Phone no" required>
            <br><br>


            <h2>Education</h2><br>

            <h4>Class X</h4><br>
            <label for="ten">School Name*</label>
            <input type="text"  name="ten" placeholder="Enter school name" required>
            <br>
            <label for="board">Board Name*</label>
            <input type="text"  name="board" placeholder="Enter school board name" required>
            <br>
            <label for="marks">Percentage/Cgpa*</label>
            <input type="text"  name="marks" placeholder="Enter percentage/cgpa" required>
            <br><br>

            <h4>Class XII</h4><br>
            <label for="twelve">School Name*</label>
            <input type="text"  name="twelve" placeholder="Enter school name" required>
            <br>
            <label for="board">Board Name*</label>
            <input type="text"  name="board" placeholder="Enter school board name" required>
            <br>
            <label for="marks">Percentage/Cgpa*</label>
            <input type="text"  name="marks" placeholder="Enter percentage/cgpa" required>
            <br><br>

            <h4>Graduation</h4><br>
            <label for="grad">College Name*</label>
            <input type="text"  name="twelve" placeholder="Enter school name" required>
            <br>
            <label for="special">Specialization*</label>
            <input type="text"  name="board" placeholder="Enter school board name" required>
            <br>
            <label for="marks">Percentage/Cgpa*</label>
            <input type="text"  name="marks" placeholder="Enter percentage/cgpa" required>
            <br><br>

            <h4>Post Graduation</h4><br>
            <label for="grad">College Name*</label>
            <input type="text"  name="twelve" placeholder="Enter school name" required>
            <br>
            <label for="special">Specialization*</label>
            <input type="text"  name="board" placeholder="Enter school board name" required>
            <br>
            <label for="marks">Percentage/Cgpa*</label>
            <input type="text"  name="marks" placeholder="Enter percentage/cgpa" required>
            <br><br>


            <h2>Skills</h2><br>
            <textarea  placeholder="Mention Skills" name="Skills" rows="5" required></textarea>
            <br><br>


            <h2>Experience/Internship</h2><br>
            <label for="name">Company Name*</label>
            <input type="text"  name="name" placeholder="Enter Company Name" required>
            <br>
            <label for="duration">Duration*</label>
            <input type="duration"  name="duration" placeholder="Enter duration period in month or year" required>
            <br>
            <label for="file">Certificate</label>
            <input type="file" id="file" name="file"><br><br>


            <h2>Resume Upload</h2><br>
            <input type="file" id="file" name="file"><br><br>
            <hr><br>
            <button type="submit" name="update">Update</button>
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