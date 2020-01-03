<!-- Main Header-->
<header class="main-header header-style-three">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <div class="text"><span>Welcome</span> to Serua Land Residence - Making Business Better</div>
                </div>
                <div class="top-right clearfix">
                    <ul class="clearfix">
                        <li><a href="#">Login</a></li>
                        <!-- <li><a href="#">Register</a></li> -->
                    </ul>
                    <div class="btn-box">
                        <a href="#" class="theme-btn btn-style-two">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

        <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                
                <div class="logo-outer">
                    <div class="logo"><a href="{{url('/')}}"><img src="{{asset('frontland/images/logo-1.png')}}" alt="" title=""></a></div>
                </div>
                
                <div class="upper-right clearfix">
                    
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="la la-envelope-o"></span></div>
                        <ul>
                            <li><span>Email:</span></li>
                            <li>support@serualandresidence.com</li>
                        </ul>

                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="la la-phone"></span></div>
                        <ul>
                            <li><span>Phone:</span></li>
                            <li>(+62) 21 123 123</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="la la-home"></span></div>
                        <ul>
                            <li><span>Address:</span></li>
                            <li>Jl Tebet Raya - Jakarta Selatan</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Upper -->


    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="main-box clearfix">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-dark">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu"></span>
                            </button>
                        </div>
                        
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{ url('/') }}">Home</a></li>
                                <li class="dropdown"><a href="{{ url('/') }}">About</a></li>
                                <li class="dropdown"><a href="{{ url('properties/grid') }}">Properties</a></li>
                                <li class="dropdown"><a href="{{ url('news/grid') }}">Blog</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>              
                        </div>
                    </nav><!-- Main Menu End-->
                        
                    <!-- Main Menu End-->
                    <div class="outer-box">
                        <div class="btn-box">
                            <a href="{{ route('booking') }}" class="theme-btn btn-style-four">Booking Now</a>
                        </div>

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="la la-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="{{ url('properties/grid') }}">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="la la-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ url('/') }}" title=""><img src="{{asset('frontland/images/logo-1.png')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current dropdown"><a href="{{ url('/') }}">Home</a></li>
                            <li class="dropdown"><a href="{{ url('/') }}">About</a></li>
                            <li class="dropdown"><a href="{{ url('properties/grid') }}">Properties</a></li>
                            <li class="dropdown"><a href="{{ url('news/grid') }}">Blog</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul> 
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<!--End Main Header -->