<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        @if (URL::current() == route('/'))
            <a class="navbar-brand" href="{{ route('/') }}" style="color: white">CasvaLabs</a>
        @else
            <a class="navbar-brand find-mentor-navbrand" href="{{ route('/') }}">CasvaLabs</a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (!Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">

                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Users</a>
                    </li>
                @endif

                @if (!Auth::user())
                    <div class="d-flex auth-nav-btn">

                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                        <a class="nav-link sign-up-btn" href="{{ route('register') }}" style="text-align: center">Sign
                            Up</a>


                    </div>
                @else
                    <div class="d-flex">
                        <span class="nav-link" style="margin: auto;">{{ Auth::user()->first_name }}
                            {{ Auth::user()->last_name }}</span>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false"><img src="{{ asset('imgs/assets/title-logo.png') }}"
                                    style="width: 2rem" alt=""></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('logout') }}"> Log out</a></li>
                            </ul>
                        </li>
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>
