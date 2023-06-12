<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-2">
            <a href="{{url('coba')}}">
                <img class="slogo" src="{{asset('img/logo2.png')}}" alt="">
            </a>
        </div>
        
        <ul class="sidebar-menu mt-3">
                <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('coba') }}">General Dashboard</a>
                    </li>
                    <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('dashboard-ecommerce-dashboard') }}">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
                @if(Auth::user()->id_status != 1 && Auth::user()->id_status != 3)
            <li class="menu-header" hidden>Data User</li>
            <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}" hidden>
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fa-solid fa-user-secret"></i><span>Data Admin</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('layout-default-layout') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('layout-default-layout') }}">Default Layout</a>
                    </li>
                    <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('transparent-sidebar') }}">Transparent Sidebar</a>
                    </li>
                    <li class="{{ Request::is('layout-top-navigation') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('layout-top-navigation') }}">Top Navigation</a>
                    </li>
                </ul>
            </li>
                <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}" hidden>
                    <a href="#"
                       class="nav-link has-dropdown"
                       data-toggle="dropdown"><i class="fa-solid fa-user"></i><span>Data Balita</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::is('anak') ? 'active' : '' }}">
                            <a class="nav-link"
                               href="{{ url('/admin/anak') }}">Data Anak</a>
                        </li>
                        <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                            <a class="nav-link"
                               href="{{ url('transparent-sidebar') }}">Transparent Sidebar</a>
                        </li>
                        <li class="{{ Request::is('layout-top-navigation') ? 'active' : '' }}">
                            <a class="nav-link"
                               href="{{ url('layout-top-navigation') }}">Top Navigation</a>
                        </li>
                    </ul>
                </li>
                @else
                    <li class="menu-header">Data User</li>
                    <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}">
                        <a href="#"
                           class="nav-link has-dropdown"
                           data-toggle="dropdown"><i class="fa-solid fa-user-secret"></i><span>Data Admin</span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ Request::is('layout-default-layout') ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ url('/admin/admin') }}">Admin</a>
                                   
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {{ $type_menu === 'layout' ? 'active' : '' }}">
                        <a href="#"
                           class="nav-link has-dropdown"
                           data-toggle="dropdown"><i class="fa-solid fa-user"></i><span>Data Balita</span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ Request::is('1') ? 'active' : '' }}">
                                <a class="nav-link"
                                href="{{ url('/admin/anak') }}">Data Anak</a>
                            </li>
                            <li class="{{ Request::is('2') ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ url('/admin/progress') }}">Progress Anak</a>
                            </li>
                            <li class="{{ Request::is('3') ? 'active' : '' }}">
                                <a class="nav-link"
                                   href="{{ url('layout-top-navigation') }}">Comming soon</a>
                            </li>
                        </ul>
                    </li>
                    @endif

{{--            <li class="{{ Request::is('blank-page') ? 'active' : '' }}">--}}
{{--                <a class="nav-link"--}}
{{--                    href="{{ url('blank-page') }}"><i class="far fa-square"></i> <span>Blank Page</span></a>--}}
{{--            </li>--}}
        </ul>
    </aside>
</div>
