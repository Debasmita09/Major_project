<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>CareerHub</title>
  <link rel="stylesheet" href="{{url('frontend/css/home.css')}}">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />


  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <x-header />

  <div
    class="hero relative flex flex-col items-center justify-center bg-blue-900">
    <div
      class="h-96 w-96 absolute left-16 bottom-9 overflow-hidden shadow-lg animated-shape">
      <img src="{{url('image/heroimage.jpg')}}" alt="Profile Image" class="h-full w-full object-cover" />
    </div>

    <svg width="0" height="0">
      <defs>
        <clipPath id="cloudShape">
          <path d="M10% 10%, 90% 10%, 90% 90%, 10% 90%" />
        </clipPath>
      </defs>
    </svg>

    <h1 class="text-4xl font-bold text-rose-100">Find Your Dream Job</h1>
    <p class="text-lg text-rose-100">Connecting you to your perfect career</p>

    <div class="relative w-full max-w-2xl mt-6">
      <div class="absolute inset-0 bg-white shadow-md rounded-lg"></div>
      <form action="{{ route('search.jobs') }}" method="GET">
        <div
          class="relative flex flex-wrap w-full pt-4 pr-4 pb-2 pl-4 bg-white rounded-lg shadow-md space-y-2 sm:space-y-0 sm:space-x-2">
          <input
            type="text"
            name="keyword"
            value="{{ request('keyword') }}"
            placeholder="Search Your Preferred Jobs"
            class="flex-1 px-4 py-2 border rounded-md focus:outline-none" />
          <button
            type="submit"
            class="px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">
            Search
          </button>
        </div>
        <div
          class="relative flex flex-wrap w-full pt-2 pr-4 pb-4 pl-4 bg-white rounded-lg shadow-md sm:space-y-0 sm:space-x-2">
          <select name="city" class="px-4 py-2 border rounded-md focus:outline-none">
            <option value="">City</option>
            <option value="Noida" {{ request('location') == 'Noida' ? 'selected' : '' }}>Noida</option>
            <option value="Kolkata" {{ request('location') == 'Kolkata' ? 'selected' : '' }}>Kolkata</option>
            <option value="Bangalore" {{ request('location') == 'Bangalore' ? 'selected' : '' }}>Bangalore</option>
            <option value="Hyderabad" {{ request('location') == 'Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
          </select>
          <select name="category" class="px-4 py-2 border rounded-md focus:outline-none">
            <option value="">Category</option>
            <option value="Technical" {{ request('category') == 'Technical' ? 'selected' : '' }}>Technical</option>
            <option value="Non-Technical" {{ request('category') == 'Non-Technical' ? 'selected' : '' }}>Non-Technical</option>
          </select>
          <select name="type" class="px-4 py-2 border rounded-md focus:outline-none">
            <option value="">Job Type</option>
            <option value="Full Time" {{ request('type') == 'Full Time' ? 'selected' : '' }}>Full Time</option>
            <option value="Part Time" {{ request('type') == 'Part Time' ? 'selected' : '' }}>Part Time</option>
            <option value="Internship" {{ request('type') == 'Internship' ? 'selected' : '' }}>Internship</option>
          </select>
          <div class="flex justify-end mt-2 pr-4">
            <button type="button"
              onclick="resetFilters()"
              class="px-4 py-2 text-sm text-white bg-blue-600 rounded-md hover:bg-blue-700">
              Reset 
            </button>
          </div>

        </div>
      </form>
    </div>

    <div class="h-96 w-96 absolute right-16 bottom-9 overflow-hidden">
      <img src="{{url('image/heroimage2.png')}}" alt="profileImage2" />
    </div>

  </div>

  <div class="main-content">
    <div class="left w-1/4 space-y-4">
      <div class="bg-white p-4 rounded-lg shadow-md border border-gray-300">
        <img
          src="{{url('image/ad_banner1.jpg')}}"
          alt="Ad Banner"
          class="w-full h-36 object-cover rounded-md" />
        <h3 class="text-lg font-semibold text-gray-800 mt-3">
          Boost Your Hiring Process!
        </h3>
        <p class="text-sm text-gray-600 mt-1">
          Discover top talent with our advanced recruitment solutions. Post
          jobs, find candidates, and hire smarter.
        </p>
        <a
          href="#"
          class="text-blue-600 font-medium mt-2 inline-block hover:underline">Learn More &rarr;</a>
      </div>

      <div class="bg-white p-4 rounded-lg shadow-md border border-gray-300">
        <img
          src="{{ URL('image/ad_banner2.jpg')}}"
          alt="Career Training"
          class="w-full h-36 object-cover rounded-md" />
        <h3 class="text-lg font-semibold text-gray-800 mt-3">
          Upgrade Your Skills & Get Hired!
        </h3>
        <p class="text-sm text-gray-600 mt-1">
          Join our expert-led training programs and boost your career
          prospects in high-demand industries.
        </p>
        <a
          href="#"
          class="text-blue-600 font-medium mt-2 inline-block hover:underline">Explore Courses &rarr;</a>
      </div>
    </div>

    <div class="middle">
      <h1 class="text-4xl font-bold text-gray-800 text-center ">Hot Jobs</h1>
      <hr class="customHr">
      @forelse ($jobs as $job)
      <div class="bg-white p-4 rounded-lg shadow-md border border-gray-300 flex items-center gap-4 mb-4">
        <img src="{{ url('storage/' . ($job->company_logo ?? 'default.jpg')) }}" alt="Job Image"
          class="w-32 h-32 object-cover rounded-md" />
        <div class="flex-1">
          <h3 class="text-lg font-semibold text-gray-800">{{ $job->job_title }}</h3>
          <p class="text-sm text-gray-600 mt-1">{{ $job->description }}</p>
          <p class="text-sm text-gray-600 mt-1 flex items-center">
            <i class="fa-solid fa-location-dot text-gray-600 mr-1"></i> {{ $job->location }}
            <span class="mx-2">|</span>
            <i class="fa-solid fa-indian-rupee-sign text-gray-600 mr-1"></i> {{ $job->salary ?? 'N/A' }}
          </p>
          <div class="flex items-center justify-between mt-2">
            <div class="text-yellow-500 text-sm">⭐⭐⭐⭐☆</div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
              <a href="{{ url('/job/' . $job->id) }}">View/Apply</a>
            </button>
          </div>
        </div>
      </div>
      @empty
      <p class="text-gray-500 text-center">No jobs found.</p>
      @endforelse
    </div>

    <div class="right p-6 bg-white shadow-lg rounded-lg w-full max-w-md">
      <h2 class="text-xl font-bold mb-4">Trending Job News</h2>
      <div class="space-y-4">
        <div class="flex items-start space-x-4 border-b pb-4">
          <img
            src="{{url('image/avatar1.jpg')}}"
            alt="Avatar"
            class="w-10 h-10 rounded-full" />
          <div>
            <h3 class="font-semibold">Exciting New Tech Openings</h3>
            <p class="text-sm text-gray-600">
              The tech industry is booming with new job opportunities in AI
              and cybersecurity.
            </p>
            <span class="text-xs text-gray-500">Posted by John Doe</span>
          </div>
        </div>

        <div class="flex items-start space-x-4 border-b pb-4">
          <img
            src="{{url('image/avatar1.jpg')}}"
            alt="Avatar"
            class="w-10 h-10 rounded-full" />
          <div>
            <h3 class="font-semibold">CA final students to get major relief as ICAI to conduct exams thrice a year from 2025</h3>
            <p class="text-sm text-gray-600">
              The tech industry is booming with new job opportunities in AI
              and cybersecurity.
            </p>
            <span class="text-xs text-gray-500">Posted by John Doe</span>
          </div>
        </div>

        <div class="flex items-start space-x-4 border-b pb-4">
          <img
            src="{{url('image/avatar1.jpg')}}"
            alt="Avatar"
            class="w-10 h-10 rounded-full" />
          <div>
            <h3 class="font-semibold">Remote Work Trends in 2025</h3>
            <p class="text-sm text-gray-600">
              More companies are adopting remote work policies, opening up
              global job markets.
            </p>
            <span class="text-xs text-gray-500">Posted by Jane Smith</span>
          </div>
        </div>

        <div class="flex items-start space-x-4">
          <img
            src="{{url('image/avatar1.jpg')}}"
            alt="Avatar"
            class="w-10 h-10 rounded-full" />
          <div>
            <h3 class="font-semibold">High-Demand Skills for 2025</h3>
            <p class="text-sm text-gray-600">
              Learn about the top skills that employers are looking for in the
              coming years.
            </p>
            <span class="text-xs text-gray-500">Posted by Mark Johnson</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-blue-800 text-white py-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-6">
      <div>
        <h3 class="text-lg font-bold mb-3">About</h3>
        <p class="text-sm opacity-80">
          At CareerHub, we believe that the right job can change a life, and
          the right talent can transform a business. Our mission is to bridge
          the gap between skilled professionals and top employers, creating
          opportunities that drive success. Whether you're seeking your dream
          job or the perfect candidate, we make the search simple, smart, and
          seamless. Your career journey starts here!
        </p>
        <div class="flex space-x-4 mt-3">
          <a href="twitter.com" class="text-white text-lg"><i class="fab fa-twitter"></i></a>
          <a href="facebook.com" class="text-white text-lg"><i class="fab fa-facebook"></i></a>
          <a href="instagram.com" class="text-white text-lg"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <div>
        <h3 class="text-lg font-bold mb-3">Employers</h3>
        <ul class="text-sm opacity-80 space-y-2">
          <li><a href="#">How it works</a></li>
          <li><a href="{{url('/register')}}">Register</a></li>
          <li><a href="{{url('/postJob')}}">Post a Job</a></li>
          <li><a href="#">Advanced Skill Search</a></li>
          <li><a href="#">Recruiting Service</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-lg font-bold mb-3">Workers</h3>
        <ul class="text-sm opacity-80 space-y-2">
          <li><a href="#">How it works</a></li>
          <li><a href="{{url('/register')}}">Register</a></li>
          <li><a href="{{url('/postJob')}}">Post Your Skills</a></li>
          <li><a href="{{url('/details')}}">Job Search</a></li>
          <li><a href="{{url('/profile')}}">Employer Search</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-lg font-bold mb-3">Have a Question?</h3>
        <p class="text-sm opacity-80 flex items-center">
          <i class="fas fa-map-marker-alt mr-2"></i> 700001 Fake St. Cathedral
          Street, Kolkata, WestBengal, India
        </p>
        <p class="text-sm opacity-80 flex items-center mt-2">
          <i class="fas fa-phone-alt mr-2"></i> +91 39239292
        </p>
        <p class="text-sm opacity-80 flex items-center mt-2">
          <i class="fas fa-envelope mr-2"></i> careerhub@gmail.com
        </p>
      </div>
    </div>

    <div class="text-center text-sm mt-8 opacity-80">
      Copyright &copy; 2025 All rights reserved | This template is made with
      ❤️ by <a href="#" class="text-white font-bold">CareerHub</a>
    </div>
  </footer>

  <script src="{{url('frontend/js/javascript.js')}}"></script>
  <script>
    function resetFilters() {
      const form = document.querySelector('form');
      form.reset();

      // Manually clear query string in URL
      window.location.href = "{{ route('search.jobs') }}";
    }
  </script>

</body>

</html>