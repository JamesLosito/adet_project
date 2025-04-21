<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Brand/Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo me-2">
            <span class="fw-bold text-dark">METRO ESSENCE</span>
        </a>

        <!-- Toggler (Mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/welcome') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ '/perfumes' }}">PERFUMES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ '/bestseller' }}">BEST SELLER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/about') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/contact') }}">CONTACT</a>
                </li>
            </ul>

            <!-- Right-side auth -->
            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                    <a class="btn btn-outline-dark" href="{{ route('login') }}">Sign In</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                        {{ Auth::user()->first_name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<style>
    .logo {
        height: 40px;
        width: auto;
    }

    .navbar-nav .nav-link {
        font-weight: 500;
        font-size: 0.95rem;
        text-transform: uppercase;
    }

    .btn-outline-dark {
        font-weight: 500;
        padding: 6px 16px;
        border-radius: 30px;
    }
</style>