<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=S, initial-scale=1.0">
  <title>CareerHub</title>
  <link rel="stylesheet" href="{{url('frontend/css/JobDetail.css')}}">
</head>

<body>
<x-header />

  <h5>Welcome To Carrearhub!</h5>
  <div class="container">

    <div class="first_column">
    <x-sidebar />

    </div>
    <div class="second_column">
      <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="display: flex; gap: 10px;">
          <label style="flex: 1;">First Name*
            <input type="text" name="first_name" value="{{ old('first_name', $user->first_name ?? '') }}" placeholder="First Name" required disabled style="color: white; background-color: transparent; border: 1px solid #ccc;">
          </label>
          <label style="flex: 1;">Last Name*
            <input type="text" name="last_name" value="{{ old('last_name', $user->last_name ?? '') }}" placeholder="Last Name" required disabled style="color: white; background-color: transparent; border: 1px solid #ccc;">
          </label>
        </div>
        <br>
        <label for="email">Email*</label>
        <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" placeholder="Enter email" required disabled style="color: white; background-color: transparent; border: 1px solid #ccc;">
        <br>
        <label for="number">Phone Number*</label>
        <input type="text" name="phone" value="{{ old('phone', $user->phone_number ?? '') }}" placeholder="Phone no" required disabled style="color: white; background-color: transparent; border: 1px solid #ccc;">

        <br><br>


        <h2>Education</h2><br>

        <h4>Class X</h4><br>
        <label for="ten">School Name*</label>
        <input type="text" name="class_10_school_name" placeholder="Enter school name" required>
        <br>
        <label for="board">Board Name*</label>
        <input type="text" name="class_10_board_name" placeholder="Enter school board name" required>
        <br>
        <label for="marks">Percentage/Cgpa*</label>
        <input type="text" name="class_10_percentage_cgpa" placeholder="Enter percentage/cgpa" required>
        <br><br>

        <h4>Class XII</h4><br>
        <label for="twelve">School Name*</label>
        <input type="text" name="class_12_school_name" placeholder="Enter school name" required>
        <br>
        <label for="board">Board Name*</label>
        <input type="text" name="class_12_board_name" placeholder="Enter school board name" required>
        <br>
        <label for="marks">Percentage/Cgpa*</label>
        <input type="text" name="class_12_percentage_cgpa" placeholder="Enter percentage/cgpa" required>
        <br><br>

        <h4>Graduation</h4><br>
        <label for="grad">College Name*</label>
        <input type="text" name="graduation_college_name" placeholder="Enter school name" required>
        <br>
        <label for="special">Specialization*</label>
        <input type="text" name="graduation_specialization" placeholder="Enter school board name" required>
        <br>
        <label for="marks">Percentage/Cgpa*</label>
        <input type="text" name="graduation_cgpa" placeholder="Enter percentage/cgpa" required>
        <br><br>

        <h4>Post Graduation</h4><br>
        <label for="grad">College Name*</label>
        <input type="text" name="post_graduation_college_name" placeholder="Enter school name">
        <br>
        <label for="special">Specialization*</label>
        <input type="text" name="post_graduation_specialization" placeholder="Enter school board name">
        <br>
        <label for="marks">Percentage/Cgpa*</label>
        <input type="text" name="post_graduation_cgpa" placeholder="Enter percentage/cgpa">
        <br><br>


        <h2>Skills</h2><br>
        <textarea placeholder="Mention Skills" name="skills" rows="5" required></textarea>
        <br><br>


        <h2>Experience/Internship</h2><br>
        <label for="name">Company Name*</label>
        <input type="text" name="organization_name" placeholder="Enter Company Name" required>
        <br>
        <label for="duration">Duration*</label>
        <input type="duration" name="experience_duration_years" placeholder="Enter duration period in month or year" required>
        <br>
        <label for="certificate_links">Certificate (PDF/DOC, max 2MB):</label>
        <input type="file" name="certificate_links" accept=".pdf,.doc,.docx"><br><br>


        <label for="resume_path">Resume (PDF/DOC, max 2MB):</label>
        <input type="file" name="resume_path" accept=".pdf,.doc,.docx" required><br>
        <hr><br>
        <button type="submit" name="update">Upload</button>
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