<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CareerHub</title>
    <link rel="stylesheet" href="{{url('frontend/css/JobDetail.css')}}">
</head>

<body>
    <x-header />

    <h5>CareerHub Details Page</h5>
    <div class="container">
        <div id="jobMessage" class="alert"></div>

        <div class="first_column">
            <x-sidebar />

        </div>
        <div class="second_column">
            <form id="jobForm" enctype="multipart/form-data">
                @csrf
                <!-- Job Details Section -->
                <h2>Job Details</h2><br><br>

                <div class="form-group">
                    <label for="title">Title*</label>
                    <input type="text" name="job_title" placeholder="Job Title" required value="{{ $job->job_title ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="category">Category*</label>
                    <select name="category" class="form-control" required>
                    <option {{ (isset($job) && $job->category === 'Technical') ? 'selected' : '' }}>Technical</option>
                    <option {{ (isset($job) && $job->category === 'Non-Technical') ? 'selected' : '' }}>Non-Technical</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="designation">Designation*</label>
                    <select name="designation" class="form-control" required>
                    <option {{ (isset($job) && $job->designation === 'Software Developer') ? 'selected' : '' }}>Software Developer</option>
                        <option {{ (isset($job) && $job->designation === 'Web Developer') ? 'selected' : '' }}>Web Developer</option>
                        <option {{ (isset($job) && $job->designation === 'Accountant') ? 'selected' : '' }}>Accountant</option>
                        <option {{ (isset($job) && $job->designation === 'Field Sales') ? 'selected' : '' }}>Field Sales</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="job_type">Job Type*</label>
                    <select name="job_type" class="form-control" required>
                    <option {{ (isset($job) && $job->job_type === 'FullTime') ? 'selected' : '' }}>FullTime</option>
                        <option {{ (isset($job) && $job->job_type === 'PartTime') ? 'selected' : '' }}>PartTime</option>
                        <option {{ (isset($job) && $job->job_type === 'Internship') ? 'selected' : '' }}>Internship</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="salary">Salary*</label>
                    <input type="text" name="salary" required value="{{ $job->salary ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="city">City*</label>
                    <select name="city" class="form-control" required>
                    <option {{ (isset($job) && $job->city === 'Noida') ? 'selected' : '' }}>Noida</option>
                        <option {{ (isset($job) && $job->city === 'Kolkata') ? 'selected' : '' }}>Kolkata</option>
                        <option {{ (isset($job) && $job->city === 'Bangalore') ? 'selected' : '' }}>Bangalore</option>
                        <option {{ (isset($job) && $job->city === 'Hydrabad') ? 'selected' : '' }}>Hydrabad</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea name="job_description" required>{{ $job->job_description ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="benefits">Benefits</label>
                    <textarea name="benefits" required>{{ $job->benefits ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="qualifications">Qualifications</label>
                    <textarea name="qualifications" required>{{ $job->qualifications ?? '' }}</textarea>
                </div>

                <!-- Company Details Section -->
                <h2>Company Details</h2><br><br>

                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" name="organisation_name" required value="{{ $job->organisation_name ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" name="email" required value="{{ $job->email ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" required value="{{ $job->location ?? '' }}">
                </div>

                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" name="website" required value="{{ $job->website ?? '' }}">
                </div>

                <hr><br>
                <div class="form-group">
                    <label for="company_logo">Company Logo</label>
                    <input type="file" name="company_logo" accept=".jpg,.jpeg,.png,.webp">
                </div>

                <button class="post-job-btn" type="submit" name="save">
                    {{ isset($job) ? 'Update Job' : 'Post Job' }}
                </button>
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

    <!-- Script for AJAX POST/PUT submission -->
    <script>
        document.getElementById('jobForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const messageDiv = document.getElementById('jobMessage');

            const isEdit = "{{ isset($job) ? 'true' : 'false' }}" === 'true';
            const jobId = "{{ $job->id ?? '' }}";

            messageDiv.innerText = '';
            messageDiv.classList.remove('alert-success', 'alert-danger');

            const file = form.company_logo.files[0];
            if (file && file.size > 1024 * 1024) {
                messageDiv.innerText = 'Company logo must be less than 1MB.';
                messageDiv.classList.add('alert-danger');
                return;
            }

            try {
                const response = await fetch(isEdit ? `/job/${jobId}` : '{{ route("job.store") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: (() => {
                        if (isEdit) {
                            formData.append('_method', 'PUT');
                        }
                        return formData;
                    })()
                });

                const result = await response.json();

                if (response.ok) {
                    messageDiv.innerText = result.message || (isEdit ? 'Job updated successfully!' : 'Job posted successfully!');
                    messageDiv.classList.add('alert-success');
                    if (!isEdit) form.reset();
                } else {
                    messageDiv.innerText = result.message || 'Failed to submit job.';
                    messageDiv.classList.add('alert-danger');
                }
            } catch (error) {
                console.error('Error:', error);
                messageDiv.innerText = 'An unexpected error occurred.';
                messageDiv.classList.add('alert-danger');
            }
        });
    </script>

</body>

</html>