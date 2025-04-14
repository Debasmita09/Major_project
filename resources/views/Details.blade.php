<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('frontend/css/details.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>CareerHub</title>
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
    <div id="div1">
        <h1>FIND YOUR DREAM JOB</h1>
        <h3>Thousands of jobs available</h3>
        
    </div>
    <br><br>
    <div id="div2">
        <div id="div21">
             <p>Keywords</p>
             <p>Location</p>
             <textarea  placeholder="Input a category" name="description" rows="1"></textarea>
             <button>Search</button>
        </div>
    </div>
    <br><br>
    <div id="div3">
        <br><br>
        <p id="head">Popular Categories</p>
        <hr><br><br>
        <div id="div31">
             
             <div><p>Accounts</p></div>
             <div><p>Buisnesses</p></div>
             <div><p>Finance</p></div>
             <div><p>IT</p></div>
             
        </div>
    </div>
    <br>
    <div id="div4">
        <p id="head2">Featured jobs</p>
        <hr><br><br>
        <div id="div41">
             
             <div><p class="a">Accountant<br><br>
                <i class="fa-solid fa-location-dot">Kolkata</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$7L</p><br> 
                <button class="signin"><a href="{{url('/Accountant')}}">Details</button></a></div>
             <div><p class="a">Software Developer<br><br>
                <i class="fa-solid fa-location-dot">Noida</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$4L</p><br> 
                <button class="signin"><a href="{{url('/SofDev')}}">Details</button></a></div>
             <div><p class="a">Mean Developer<br><br>
                <i class="fa-solid fa-location-dot">Hyderabad</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$7L</p><br> 
                <button class="signin"><a href="{{url('/Mean')}}">Details</button></a></div>
        </div>
    </div>
    <br><br>
    <div id="div5">
        <p id="head3">Latest jobs</p>
        <hr>
        <div id="div51">
             
             <div><p class="a">MERN developer<br><br>
                <i class="fa-solid fa-location-dot">Dubai</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$7L</p><br> 
                <button class="signin"><a href="{{url('/Mern2')}}">Details</button></a></div>
             <div><p class="a">Software Developer<br><br>
                <i class="fa-solid fa-location-dot">USA</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$4L</p><br> 
                <button class="signin"><a href="{{url('/SofDev2')}}">Details</button></a></div>
             <div><p class="a">Accountant<br><br>
                <i class="fa-solid fa-location-dot">New Delhi</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$8L</p><br> 
                <button class="signin"><a href="{{url('/Accountant2')}}">Details</button></a></div>
                <div><p class="a">MERN developer<br><br>
                    <i class="fa-solid fa-location-dot">Bangalore</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$7L</p><br> 
                    <button class="signin"><a href="{{url('/Mern1')}}">Details</button></a></div>
                 <div><p class="a">PHP Developer<br><br>
                    <i class="fa-solid fa-location-dot">Kolkata</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$4L</p><br> 
                    <button class="signin"><a href="{{url('/PhpDev')}}">Details</button></a></div>
                 <div><p class="a">Accountant<br><br>
                    <i class="fa-solid fa-location-dot">Kolkata</i><br><br><i class="fa-solid fa-clock">Full time</i><br>$8L</p><br> 
                    <button class="signin"><a href="{{url('/Accountant')}}">Details</button></a></div>
                
             
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