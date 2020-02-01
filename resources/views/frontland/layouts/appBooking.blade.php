<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Serua Land Residence @yield('title')</title>
<!-- Stylesheets -->
<link href="{{ asset('frontland/admin/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontland/admin/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontland/admin/css/responsive.css') }}" rel="stylesheet">

<link id="theme-color-file" href="{{ asset('frontland/css/color-themes/orange-theme.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('frontland/admin/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('frontland/admin/images/favicon.png') }}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
<div class="preloader"></div>

<!-- Header Span -->
<span class="header-span"></span>

<!-- Main Header-->
<header class="main-header">
    <div class="main-box clearfix">
        <!-- Logo Box -->
        <div class="logo-box">
            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('frontland/images/logo-1.png')}}" alt="" title=""></a></div>
        </div>

        <!-- Upper Right-->
        <div class="upper-right">
            <ul class="clearfix">
                <li class="dropdown option-box">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="{{ Storage::url('users/'.$profile->image) }}" class="thumb">My Account</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('user/dashboard')}}">Dashboard</a>
                        <!-- <a class="dropdown-item" href="{{url('user/message')}}">Messages</a> -->
                        <a class="dropdown-item" href="{{url('dashboard/booking/list')}}">Bookings</a>
                        <a class="dropdown-item" href="{{url('user/profile')}}">My profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="submit-property">
                    <a href="{{url('dashboard/booking/list')}}" class="theme-btn btn-style-one">Booking List<i class="pe-7s-up-arrow"></i></a>
                </li>
                <li class="nav-toggler">
                    <button class="toggler-btn nav-btn"><span class="bar bar-one"></span><span class="bar bar-two"></span><span class="bar bar-three"></span></button>
                </li>
            </ul>
        </div>
    </div>
    <!--End Header Lower-->
</header>
<!--End Main Header -->

 <!-- Hidden Bar -->
 <section class="hidden-bar">
    <div class="dashboard-inner">
        <div class="cross-icon"><span class="pe-7s-close-circle"></span></div>
        <ul class="navigation">
            <li><a href="{{url('user/dashboard')}}"><i class="pe-7s-mail"></i> Dashboard</a></li>
            <!-- <li><a href="{{url('user/message')}}"><i class="pe-7s-mail"></i> Messages <span class="tag">6</span></a></li> -->
            <li class="active"><a href="{{url('dashboard/booking/list')}}"><i class="pe-7s-up-arrow"></i>Booking List</a></li>
            <li><a href="{{url('user/profile')}}"><i class="pe-7s-user"></i>My Profile</a></li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</section>
<!--End Hidden Bar -->
    <!-- Content -->
    @yield('content')
    <!-- End Content -->
</div>

<script src="{{ asset('frontland/admin/js/jquery.js') }}"></script>
<script src="{{ asset('frontland/admin/js/popper.min.js') }}"></script>
<script src="{{ asset('frontland/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontland/admin/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontland/admin/js/wow.js') }}"></script>
<script src="{{ asset('frontland/admin/js/dropzone.js') }}"></script>
<script src="{{ asset('frontland/admin/js/appear.js') }}"></script>
<script src="{{ asset('frontland/admin/js/script.js') }}"></script>
</body>
</html>
