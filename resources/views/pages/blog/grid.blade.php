@extends('frontland.layouts.app')

@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-grid-view">
                        <div class="row">
                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ url('news/detail') }}"><img src="{{ asset('frontland/images/resource/news-1.jpg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="info">
                                            <li>by <span>Anoma</span></li>
                                            <li>JANUARY 14, 2019</li>
                                        </ul>
                                        <h3><a href="{{ url('news/detail') }}">Dazzling retreat resort with roof Modern Design</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ url('news/detail') }}"><img src="{{ asset('frontland/images/resource/news-2.jpg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="info">
                                            <li>by <span>Anoma</span></li>
                                            <li>JANUARY 14, 2019</li>
                                        </ul>
                                        <h3><a href="{{ url('news/detail') }}">Independent apartment with modern design</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ url('news/detail') }}"><img src="{{ asset('frontland/images/resource/news-3.jpg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="info">
                                            <li>by <span>Anoma</span></li>
                                            <li>JANUARY 14, 2019</li>
                                        </ul>
                                        <h3><a href="{{ url('news/detail') }}">Modron apartment adjacent to CEO park</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ url('news/detail') }}"><img src="{{ asset('frontland/images/resource/news-8.jpg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="info">
                                            <li>by <span>Anoma</span></li>
                                            <li>JANUARY 14, 2019</li>
                                        </ul>
                                        <h3><a href="{{ url('news/detail') }}">Resources that we thought you may find useful </a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ url('news/detail') }}"><img src="{{ asset('frontland/images/resource/news-9.jpg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="info">
                                            <li>by <span>Anoma</span></li>
                                            <li>JANUARY 14, 2019</li>
                                        </ul>
                                        <h3><a href="{{ url('news/detail') }}">Learn the truth about Real Estate industry</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block -->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{ url('news/detail') }}"><img src="{{ asset('frontland/images/resource/news-10.jpg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="info">
                                            <li>by <span>Anoma</span></li>
                                            <li>JANUARY 14, 2019</li>
                                        </ul>
                                        <h3><a href="{{ url('news/detail') }}">Skills that you can learn in the Real Estate market</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <li class="prev"><a href="#"><span>Prev</span></a></li>
                                <li><a href="#"><span>1</span></a></li>
                                <li class="active"><a href="#"><span>2</span></a></li>
                                <li><a href="#"><span>3</span></a></li>
                                <li><a href="#"><span>4</span></a></li>
                                <li class="next"><a href="#"><span>Next</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!--search box-->
                        <div class="sidebar-widget sort-by">
                            <select class="custom-select-box">
                                <option>Sort By</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Industrial</option>
                                <option>Apartments</option>
                            </select>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget search-properties">
                            <div class="sidebar-title"><h3>Search Properties</h3></div>
                            <!-- Property Search Form -->
                            <div class="property-search-form style-three">
                                <form method="post" action="https://expert-themes.com/html/ourland/index.html">
                                    <div class="row no-gutters">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Location</option>
                                                <option>New York</option>
                                                <option>Los Angeles</option>
                                                <option>Chicago</option>
                                                <option>Houston</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Property Type</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Industrial</option>
                                                <option>Apartments</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Property Status</option>
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Any Bedrooms</option>
                                                <option>01 Bedroom</option>
                                                <option>02 Bedrooms</option>
                                                <option>03 Bedrooms</option>
                                                <option>04 Bedrooms</option>
                                                <option>05 Bedrooms</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Any Bathrooms</option>
                                                <option>01 Bathroom</option>
                                                <option>02 Bathrooms</option>
                                                <option>03 Bathrooms</option>
                                                <option>04 Bathrooms</option>
                                                <option>05 Bathrooms</option>
                                            </select>
                                        </div>

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="range-slider-one clearfix">
                                                <label>Price Filter</label>
                                                <div class="price-range-slider"></div>
                                                <div class="input"><input type="text" class="price-amount" name="field-name" readonly></div>
                                                <div class="title">Rp</div>
                                            </div>
                                        </div>


                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Form -->
                        </div>

                         <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Category Properties</h3></div>
                            <ul class="cat-list">
                                <li><a href="#">Apartments <span>22</span></a></li>
                                <li><a href="#">Villas <span>45</span></a></li>
                                <li><a href="#">Open Houses <span>62</span></a></li>
                                <li><a href="#">Offices <span>70</span></a></li>
                                <li><a href="#">Residentals <span>90</span></a></li>
                                <li><a href="#">Co-Working <span>65</span></a></li>
                                <li><a href="#">Flat <span>48</span></a></li>
                                <li><a href="#">Cottage <span>24</span></a></li>
                            </ul>
                        </div>

                        <!-- Recent Properties -->
                        <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title"><h3>Recent Properties</h3></div>
                            <div class="widget-content">
                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ url('news/detail') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-1.jpg') }}" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ url('news/detail') }}">Laxury Balles Villa</a></h3>
                                    <div class="price">Rp 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ url('news/detail') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-2.jpg') }}" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ url('news/detail') }}">Laxury Balles Villa</a></h3>
                                    <div class="price">Rp 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ url('news/detail') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-3.jpg') }}" alt="">
                                            <span class="status hot">hot</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ url('news/detail') }}">Laxury Balles Villa</a></h3>
                                    <div class="price">Rp 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ url('news/detail') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-4.jpg') }}" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ url('news/detail') }}">Laxury Balles Villa</a></h3>
                                    <div class="price">Rp 760,000</div>
                                </article>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    @include('frontland/partials/footer')

@endsection