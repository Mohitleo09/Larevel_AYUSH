<style>
    /* CSS for the pending-notification badge */
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

    /* Ensure the nav-item is positioned relative to contain the absolute positioning of the badge */
    .nav-item {
        position: relative;
    }

    /* Adjustments for the logo */
    .navbar-brand .logo {
        max-height: 40px; /* Adjust as needed */
        width: auto;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        padding: 0 15px; /* Adjust padding as needed */
    }

    .navbar-toggler {
        margin-right: 15px; /* Adjust margin as needed */
    }
</style>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="#" onclick="location.reload();" class="navbar-brand d-flex align-items-center text-center py-0 px-7 px-lg-7">
        <img src="home/image/logo.jpg" alt="Logo" class="logo">
        <h1 class="m-0 text-primary">AYUSH User</h1>
    </a>
    <button type="button" class="navbar-toggler me-5" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            {{-- <a href="{{ route('mentorhome') }}" class="nav-item nav-link">Home</a> --}}
            <li class="nav-item"><a class="nav-link">Home</a></li>

            
            <a href="#footer" class="nav-item nav-link">About</a>




            {{-- <a href="{{ route('mentoradd') }}" class="nav-item nav-link">Add details</a> --}}

            {{-- @if(auth()->user()->user_type == 'mentor')
                        <li class="nav-item">
                            <a href="{{ route('mentoradd') }}" class="nav-item nav-link">Add Mentor</a>
                        </li>

                        @elseif(auth()->user()->user_type == 'investor')
                        <li class="nav-item">
                            <a href="{{ route('investoradd') }}" class="nav-item nav-link">Add Investor</a>
                        </li>


                        @elseif(auth()->user()->user_type == 'incubator')
                        <li class="nav-item">
                            <a href="{{ route('incubatoradd') }}"class="nav-item nav-link">Add Incubator</a>
                        </li>

                    @endif --}}

                    {{-- <a href="{{ url('/chatify/') }}" class="nav-item nav-link">
                        <i class="fa fa-envelope-o"></i>
                        <div class="pending-notification">{{$unseencounter}}</div>    
                        Chat
                    </a> --}}


                    {{-- <a href="{{ url('/chatify/') }}" class="nav-item nav-link">
                        <i class="fa fa-envelope-o"></i>
                        @if($unseenCount > 0)
                            <div class="pending-notification">{{ $unseenCount }}</div>
                        @endif
                        Chat
                    </a>
                     --}}

                     <a  class="nav-item nav-link">
                        <i class="fa fa-envelope-o"></i>
                        @if(isset($unseenCount) && $unseenCount > 0)
                            <div class="pending-notification">{{ $unseenCount }}</div>
                        @endif
                        Chat
                    </a>
                    
                    
                    
                    {{-- <a href="" class="nav-item nav-link">Chat</a> --}}
                        
            {{-- <div>
                <a href="Events.html" class="nav-item nav-link">Explore Events</a>
                </div>  --}}
            </div>
            <a href="#footer" class="nav-item nav-link">CONTACT</a>
        </div> 
        
        <div class="nav-item dropdown">
            <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" style="color: #ffffff;" data-bs-toggle="dropdown">User</a>
                <div class="dropdown-menu rounded-0 m-0">
                    {{-- <a href="update_profile.php" class="dropdown-item">Edit</a> --}}
                    {{-- <a class="dropdown-item" href="{{ route('edit_profile', ['id' => Auth::user()->id]) }}">Edit Profile</a> --}}
                    <a href="{{ route('logout') }}" class="dropdown-item">Login</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Sign Up</button> <!-- Admin Login -->
                    </form>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- <button type="submit" class="dropdown-item">Sign up</button> <!-- Logout option --> --}}
                    </form>

                </div>
            </div>
    </div>
</nav>
<!-- Navbar End -->