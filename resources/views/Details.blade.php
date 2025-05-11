<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->job_title }} - Job Details</title>
    <link rel="stylesheet" href="{{ url('frontend/css/details.css') }}">
</head>
<body>
    <x-header />

    <section class="job-details">
        <div class="container">
            <div class="job-header">
                <h1 class="job-title">{{ $job->job_title }}</h1>
                <div class="company-info">
                    <h2>Company: <span class="company-name">{{ $job->organisation_name }}</span></h2>
                    @if($job->company_logo)
                        <img src="{{ asset('storage/' . $job->company_logo) }}" alt="{{ $job->organisation_name }} Logo" class="company-logo">
                    @endif
                    <p>Location: <span class="location">{{ $job->location }}</span></p>
                    <p>Posted on: <span class="post-date">{{ \Carbon\Carbon::parse($job->created_at)->format('M d, Y') }}</span></p>
                </div>
            </div>

            <div class="job-description">
                <h3>Job Description</h3>
                <p>{{ $job->description }}</p>

                <h4>Responsibilities:</h4>
                <ul>
                    @foreach(explode('|', $job->designation) as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>

                <h4>Requirements:</h4>
                <ul>
                    @foreach(explode('|', $job->qualifications) as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="job-application">
                <h3>Salary & Benefits</h3>
                <p>Salary Range: {{ $job->salary_range }}</p>
                <p>Benefits: {{ $job->benefits }}</p>

                @if(Auth::check() && Auth::user()->is_employer == 0)
                    <form action="{{ route('apply.job', $job->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="apply-btn">Apply Now</button>
                    </form>
                @elseif(!Auth::check())
                    <div class="apply-btn">
                        <a href="{{ url('/login') }}" class="btn">Apply Now</a>
                    </div>
                @endif
            </div>

            <div class="contact-info">
                <h4>For More Information:</h4>
                <p>Contact HR: <a href="mailto:{{ $job->hr_email }}">{{ $job->hr_email }}</a></p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 CareerHub. All Rights Reserved.</p>
        <div class="footer-links">
            <a href="{{ url('/') }}">Home Page</a>
            <a href="{{ url('/terms') }}">Terms & Conditions</a>
            <a href="{{ url('/faq') }}">FAQs</a>
        </div>
    </footer>
</body>
</html>
