
<!-- ======= Header ======= -->

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/logiswift" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('img/logo1.png')}}" alt="">
{{--            <h1>LogiSwift</h1>--}}
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
{{--                <li><a href="/logiswift" class="active">Home</a></li>--}}
{{--                <li><a href="/services">Services</a></li>--}}
                <li><a href="/logiswift" class="{{ request()->is('logiswift') ? 'active' : '' }}">Home</a></li>
                <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
                <li class="dropdown {{ request()->is('orders*') ? 'active' : '' }}"><a href="#"><span>Order</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        @if(Auth::user()->id_status != 3)
                        <li><a href="/order" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pick Up</a></li>
{{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="/order" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Drop Off</a></li>
                        @else
                            <li><a href="/order" data-bs-target="#staticBackdrop">Pick Up</a></li>
                            <li><a href="/order" data-bs-target="#staticBackdrop">Drop Off</a></li>
                        @endif
                    </ul>
                </li>
                <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                @if(Auth::user()->id_status != 3)
                    <li><a class="get-a-quote" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login/Register</a></li>
                @else
                    <li class="dropdown {{ request()->is('orders*') ? 'active' : '' }}"><a href="#"><span class="logged">Selamat Datang! {{Auth::user()->nama}}<i class="bi bi-chevron-down dropdown-indicator"></i></span> </a>
                        <ul>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">your Order</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Settings</a></li>
                            <li><a class="alert-danger" href="{{route('logout-user')}}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->



