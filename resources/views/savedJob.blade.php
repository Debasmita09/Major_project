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

    <h5>CareerHub Saved Jobs</h5>
    <div class="container">
        <div class="first_column">
            <x-sidebar />
        </div>
        <div class="second_column">
            <h2>My Posted Jobs</h2><br><br>

            <!-- Show a message if no jobs are found -->
            @if(isset($message))
            <p>{{ $message }}</p>
            @else
            <div class="table-box">
                <div class="table-row table-head">
                    <div class="table-cell first-cell">
                        <p>Job Title</p>
                    </div>
                    <div class="table-cell">
                        <p>City</p>
                    </div>
                    <div class="table-cell">
                        <p>Location</p>
                    </div>
                    <div class="table-cell">
                        <p>Salary</p>
                    </div>
                    <div class="table-cell">
                        <p>Designation</p>
                    </div>
                    <div class="table-cell" style="padding-right: 20px;">
                        <p>Edit</p>
                    </div>
                    <div class="table-cell" style="padding-right: 5px;">
                        <p>Delete</p>
                    </div>
                </div>

                @foreach ($savedJobs as $job)
                <div class="table-row">
                    <div class="table-cell first-cell">
                        <p>{{ $job->job_title }}</p>
                    </div>
                    <div class="table-cell">
                        <p>{{ $job->city }}</p>
                    </div>
                    <div class="table-cell">
                        <p>{{ $job->location }}</p>
                    </div>
                    <div class="table-cell">
                        <p>{{ $job->salary }}</p>
                    </div>
                    <div class="table-cell">
                        <p>{{ $job->designation }}</p>
                    </div>
                    <div class="table-cell">
                        <a href="{{ route('job.edit', $job->id) }}" class="icon-link" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                    <div class="table-cell">
                        <form action="{{ route('job.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="icon-button" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>

                </div>
                @endforeach
            </div>
            @endif
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