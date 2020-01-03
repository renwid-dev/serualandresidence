<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Serua Land Residence</title>
<!-- Stylesheets -->
<link href="{{ asset('frontland/admin/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontland/admin/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontland/admin/css/responsive.css') }}" rel="stylesheet">

<link id="theme-color-file" href="{{ asset('frontland/css/color-themes/orange-theme.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
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