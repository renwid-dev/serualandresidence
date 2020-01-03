<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Mirrored from expert-themes.com/html/ourland/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2019 06:27:30 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Serua Land Residence | @yield('title')</title>
<!-- Stylesheets -->
<link href="{{ asset('frontland/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontland/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('frontland/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('frontland/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('frontland/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontland/css/responsive.css') }}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{ asset('frontland/css/color-switcher-design.css') }}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('frontland/css/color-themes/orange-theme.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('frontland/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('frontland/images/favicon.png') }}" type="image/x-icon">
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
    
    @include('frontland/partials/header')
    
    {{-- MAIN CONTENT --}}  
     @yield('content')
    
</div>
<!--End pagewrapper-->

<script src="{{ asset('frontland/js/jquery.js') }}"></script> 
<script src="{{ asset('frontland/js/popper.min.js') }}"></script>
<script src="{{ asset('frontland/js/bootstrap.min.js') }}"></script>
<!--Revolution Slider-->
<script src="{{ asset('frontland/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('frontland/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('frontland/js/main-slider-script.js') }}"></script>
<!--End Revolution Slider-->
<script src="{{ asset('frontland/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontland/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('frontland/js/owl.js') }}"></script>
<script src="{{ asset('frontland/js/wow.js') }}"></script>
<script src="{{ asset('frontland/js/isotope.js') }}"></script>
<script src="{{ asset('frontland/js/appear.js') }}"></script>
<script src="{{ asset('frontland/js/script.js') }}"></script>
<!-- Color Setting -->
<script src="{{ asset('frontland/js/color-settings.js') }}"></script>
<script src="{{ asset('frontland/js/popper.min.js') }}"></script>
<script src="{{ asset('frontland/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontland/js/validate.js') }}"></script>
<script src="{{ asset('frontland/js/map-script.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJyIBI88fFMi5YJ8khAsPX7ouMsIZPorc"></script>


</body>

</html>