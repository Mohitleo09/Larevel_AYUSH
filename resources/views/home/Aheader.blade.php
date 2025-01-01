<style>
    /* Adjust logo and navbar brand to center align */
    .navbar-brand {
        display: flex;
        align-items: center;
        margin: auto;
        padding: 0 15px; /* Adjust padding as needed */
    }

    .navbar-brand h1 {
        font-size: 1.5rem;
        margin-left: 10px;
    }

    /* Center-align and set spacing */
    .navbar-nav {
        margin: 0 auto;
    }

    /* Adjust navbar layout and alignment */
    .navbar .collapse {
        display: flex;
        justify-content: center;
    }

    /* Adjustments for the logo */
    .navbar-brand .logo {
        max-height: 40px; /* Adjust as needed */
        width: auto;
    }

    /* Spacing for nav items */
    .navbar-nav .nav-item {
        margin-right: 20px;
    }

    /* Center dropdown menu */
    .dropdown-menu {
        right: 0;
        left: auto;
        text-align: center;
    }

    /* Badge position adjustment */
    .pending-notification {
        position: absolute;
        top: 5px;
        right: 10px;
        background-color: rgb(202, 150, 150);
        color: white;
        border-radius: 50%;
        padding: 5px 10px;
        font-size: 12px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="#" onclick="location.reload(); "class="navbar-brand d-flex align-items-center justify-content-center py-0 px-3 px-lg-4">
        <img src="home/image/logo.jpg" alt="Logo" class="logo">
        <h1 class="m-0 text-primary ms-2">AYUSH {{ Auth::user()->user_type }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <ul class="navbar-nav p-4 p-lg-0 align-items-center">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#footer" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#footer" class="nav-link">Contact</a></li>
        </ul>
        
        <div class="nav-item dropdown">
            <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" style="color: #ffffff;" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu rounded-0 m-0">
                <a class="dropdown-item" href="{{ route('edit_profile', ['id' => Auth::user()->id]) }}">Edit Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
