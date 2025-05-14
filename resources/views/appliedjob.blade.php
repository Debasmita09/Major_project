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
            <a href="{{ url('/') }}" class="logo"><img src="{{ url('image/logo.png') }}"></a>
        </div>
        <header>
            <h5>CareerHub Details Page</h5>
            <div class="container">

                <div class="first_column">
                    <x-sidebar />

                </div>
                <div class="second_column">
                    <h2>Applied Jobs</h2><br><br>
                    @foreach($applications as $i => $application)
                    <div class="table-row">
                        <div class="table-cell first-cell">
                            <p>{{ $i + 1 }}</p>
                        </div>
                        <div class="table-cell">
                            <p>{{ $application->job->job_title }}</p>
                        </div>
                        <div class="table-cell">
                            <p>{{ $application->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="table-cell">
                            <p>{{ $application->status }}</p>
                        </div>
                    </div>
                    @endforeach
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