<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('frontend/css/register.css')}}">
    <title>CareerHub</title>
</head>

<body>
    <header class="header">
        <div class="header-left">
            <a href="{{ url('/') }}" class="logo"><img src="{{ url('image/logo.png') }}"></a>

        </div>
    </header>

    <form autocomplete="off" class="form" id="registerForm" type="submit">
        <p class="title">Register</p>
        <p class="message">Signup now to get full access to our app</p>

        <div class="form-group">
            <label>
                <input type="text" name="first_name" placeholder="First Name" required>

            </label>
            <label>
                <input type="text" name="last_name" placeholder="Last Name" required>

            </label>
        </div>

        <label>
            <input type="text" name="email" placeholder="Email" required>

        </label>

        <label>
            <input type="password" name="password" id="password" placeholder="password" required>
            <div class="icon" onclick="togglePassword('password', this)">
                <i class="fa fa-eye"></i>
            </div>
        </label>

        <label>
            <input type="password" id="passwordConfirm" placeholder="Confirm Password" required>
            <div class="icon" onclick="togglePassword('passwordConfirm', this)">
                <i class="fa fa-eye"></i>
            </div>
        </label>

        <label>
            <input type="tel" name="phone_number" placeholder="Contact Number" required>
        </label>


        <label style="display: flex; align-items: center; color: white;">
            <input type="checkbox" id="isRecruiter" name="is_employer" style=" width: 16px; height: 16px; margin-right: 10px;">
            Are you recruiter?
        </label>

        <button class="submit">Submit</button>

        <p class="signin">
            Already have an account ?
            <a href="{{url('/login')}}">Login</a><br><br>
            <a href="{{url('/')}}">Back to Home Page</a>
        </p>
    </form>

    <hr>
    <footer>
        <p>&copy; 2025 CareerHub. All Rights Reserved.</p>
        <div class="footer-links">

            <a href="{{url('/terms')}}">Terms & Conditions</a>
            <a href="{{url('/faq')}}">FAQs</a>
        </div>
    </footer>
    <script>
        function togglePassword(id, iconElement) {
            const input = document.getElementById(id);
            const icon = iconElement.querySelector('i');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }


        function validateFormData(data) {
            const nameRegex = /^[A-Za-z]+$/;
            const phoneRegex = /^\d{10}$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,10}$/;

            if (!nameRegex.test(data.first_name) || !nameRegex.test(data.last_name)) {
                return "First and last name should contain only letters.";
            }

            if (!emailRegex.test(data.email)) {
                return "Please enter a valid email address.";
            }

            if (!phoneRegex.test(data.phone_number)) {
                return "Phone number must be exactly 10 digits.";
            }

            if (!passwordRegex.test(data.password)) {
                return "Password must be 8-10 characters, include a capital letter, number, and special character.";
            }

            const confirmPassword = document.getElementById('passwordConfirm').value;
            if (data.password !== confirmPassword) {
                return "Passwords do not match.";
            }

            return null;
        }

        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault(); // Prevent form from submitting normally

            try {
                const formData = new FormData(this);
                const data = Object.fromEntries(formData.entries());
                const isEmployerCheckbox = document.getElementById('isRecruiter');
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                data.is_employer = isEmployerCheckbox.checked ? 1 : 0; // Laravel expects 1/0 for boolean usually
                const error = validateFormData(data);

                if (error) {
                    document.querySelector('.message').innerText = error;
                    return;
                }

                const response = await fetch('/register-users', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok) {
                    // Show success message if user created successfully
                    document.querySelector('.message').innerText = result.message || 'User created successfully!';

                    // Redirect the user to the appropriate URL based on is_employer value
                    if (result.redirect_url) {
                        setTimeout(() => {
                            window.location.href = result.redirect_url; // Redirect to /postJob or /profile
                        }, 1000);
                    }
                } else {
                    // Show error message if there was an issue
                    document.querySelector('.message').innerText = result.message || 'Something went wrong.';
                }
            } catch (error) {
                console.log('error occurred', error);
                document.querySelector('.message').innerText = 'An error occurred. Please try again.';
            }
        });
    </script>
</body>

</html>