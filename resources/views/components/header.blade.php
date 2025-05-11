<header class="header">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('frontend/css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <div class="header-left">
        <a href="/" class="logo"><img src="{{ url('image/logo.png') }}" alt="Logo"></a>
    </div>

    <div class="header-right">
        @auth
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="login-btn">Logout</button>
            </form>
        @else
            <button class="login-btn" onclick="window.location.href='{{ url('/login') }}'">Login</button>
            <button class="login-btn" onclick="window.location.href='{{ url('/register') }}'">Register</button>
        @endauth

        <div class="dropdown">
            <button class="menu-btn" onclick="toggleDropdown()">☰</button>
            <div class="dropdown-content" id="dropdownMenu">
                <a href="#" id="myProfileLink"><i class="fa-solid fa-user"></i> My Profile</a>
                <a href="{{ url('/details') }}">Job Details</a>
                <a href="{{ url('/about') }}">About Us</a>
                <a href="{{ url('/terms') }}">Terms & Conditions</a>
                <a href="{{ url('/blog') }}">Blogs</a>
                <a href="{{ url('/faq') }}">FAQs</a>
            </div>
        </div>
    </div>

    @auth
        <script>
            window.userRole = {{ Auth::user()->is_employer ? '1' : '0' }};
        </script>
    @else
        <script>
            window.userRole = null;
        </script>
    @endauth

    <script>
        function toggleDropdown() {
            const menu = document.getElementById("dropdownMenu");
            menu.classList.toggle("show");
        }

        document.getElementById('myProfileLink').addEventListener('click', function (e) {
            e.preventDefault();
            if (window.userRole === null) {
                window.location.href = '/login';
            } else if (window.userRole == 1) {
                window.location.href = '/postJob';
            } else {
                window.location.href = '/profile';
            }
        });

        // Optional: Hide dropdown when clicking outside
        window.addEventListener('click', function (e) {
            if (!e.target.matches('.menu-btn')) {
                const dropdowns = document.getElementsByClassName("dropdown-content");
                for (let i = 0; i < dropdowns.length; i++) {
                    const openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        });
    </script>
</header>
