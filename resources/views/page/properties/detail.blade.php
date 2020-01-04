@extends('frontland.layouts.app')

@section('content')

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="upper-info-box">
            <div class="row">
                <div class="about-property col-lg-8 col-md-12 col-sm-12">
                    <h2>Single House Near Orland Park,..</h2>
                    <div class="location"><i class="la la-map-marker"></i> Orland Park, IL 35785, Chicago, United State</div>
                    <ul class="property-info clearfix">
                        <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                        <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                        <li><i class="flaticon-car"></i> 2 Garage</li>
                        <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                    </ul>
                </div>
                <div class="price-column col-lg-4 col-md-12 col-sm-12">
                    <span class="title">Start From</span>
                    <div class="price">Rp 13,65,000</div>
                    <span class="status">For Sale</span>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="property-detail">
                    <div class="upper-box">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href="{{ asset('frontland/images/resource/property-detail.jpg') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('frontland/images/resource/property-detail.jpg') }}" alt=""></a></li>

                                <li><a href="{{ asset('frontland/images/resource/property-detail-2.jpg') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('frontland/images/resource/property-detail-2.jpg') }}" alt=""></a></li>

                                <li><a href="{{ asset('frontland/images/resource/property-detail-3.jpg') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('frontland/images/resource/property-detail-3.jpg') }}" alt=""></a></li>

                                <li><a href="{{ asset('frontland/images/resource/property-detail-4.jpg') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('frontland/images/resource/property-detail-4.jpg') }}" alt=""></a></li>

                                <li><a href="{{ asset('frontland/images/resource/property-detail-5.jpg') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('frontland/images/resource/property-detail-5.jpg') }}" alt=""></a></li>
                            </ul>
                            
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li><img src="{{ asset('frontland/images/resource/property-thumb-9.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('frontland/images/resource/property-thumb-5.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('frontland/images/resource/property-thumb-8.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('frontland/images/resource/property-thumb-7.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('frontland/images/resource/property-thumb-6.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                    </div>

                    <div class="lower-content">
                        <h3>Descripation</h3>
                        <p>Fantastic One Bedroom Facing East In This Amazing Trump Place Doorman Building. There Is A Large Kitchen, Washer And Dryer, Great Light And Plenty Of Closet Space. In Addition, There Are Amazing Custom Made ‘Built Ins’ In The Living Room Providing Plenty Of Storage. The Building Has A Gym, Pool, Children’s Room, Valet Services, Full Time Concierge And Doorman.</p>
                        <blockquote>Main bath has been remodeled including a large shower with a tiled sitting bench. Back yard patio includes no-maintenance cover with built in lights. extra storage inside and out.</blockquote>
                        <p>Short sale approved at Rp 440,000!! home with remodeled kitchen, upgraded cabinets and counterto1ps, open floorplan with spacious layout including a huge separate family room. New windows and newer roof, new airconditioning, fully permitted additonal square footage to the original home. This is a beauty. Huge master with separate sitting/dressing area that would make a perfect nursery.Bonus walk in storage closet in family room.</p>
                    </div>

                    <!-- Property Features -->
                    <div class="property-features">
                        <h3>Essential Information</h3>
                        <ul class="list-style-one">
                            <li>Price: Rp 500,000,0</li>
                            <li>For: Sale</li>
                            <li>Property Types: Resident</li>
                            <li>Area: 1000SQFT</li>
                            <li>Country: USA </li>
                            <li>City: Sterling</li>
                            <li>Garages: 3 </li>
                            <li>Bedrooms: 6 </li>
                            <li>Bathrooms: 4</li>
                        </ul>
                    </div>

                    <!-- Property Features -->
                    <div class="property-features">
                        <h3>Home Amenities</h3>
                        <ul class="list-style-one">
                            <li>Air Conditioning</li>
                            <li>Alarm System</li>
                            <li>Basketball court</li>
                            <li>Bedding</li>
                            <li>Dishes</li>
                            <li>Dishwasher</li>
                            <li>Doorman</li>
                            <li>Elevator</li>
                            <li>Fireplace</li>
                            <li>Garden</li>
                            <li>Gym</li>
                            <li>Hair Dryer</li>
                            <li>Heating System</li>
                            <li>High Ceiling</li>
                            <li>Hot Tub</li>
                            <li>Microwave</li>
                            <li>Iron</li>
                            <li>Laundry</li>
                            <li>Oven</li>
                            <li>Parking</li>
                            <li>Pool</li>
                        </ul>
                    </div>

                    <!-- Flooring Tabs -->
                    <div class="flooring-tabs tabs-box">
                        <div class="clearfix">
                            <h3>Flooring Plans</h3>
                            <ul class="tab-buttons">
                                <li data-tab="#groud-floor" class="tab-btn active-btn">Grand Floor</li>
                                <li data-tab="#first-floor" class="tab-btn">First Floor</li>
                                <li data-tab="#second-floor" class="tab-btn">Second Floor</li>
                            </ul>                
                        </div>

                        <div class="tabs-content">
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="groud-floor">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontland/images/resource/house-map.jpg') }}" alt=""></figure>
                                </div>
                            </div>

                            <!--Tab -->
                            <div class="tab" id="first-floor">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontland/images/resource/house-map.jpg') }}" alt=""></figure>
                                </div>
                            </div>

                            <!--Tab -->
                            <div class="tab" id="second-floor">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontland/images/resource/house-map.jpg') }}" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nearest Places -->
                    <div class="nearest-places">
                        <h3>Near By Place</h3>
                        <div class="outer-box clearfix">
                            <div class="places-column">
                                <ul class="places-list">
                                    <li>
                                        <strong>City Center</strong>
                                        <div class="text"><b>City Stars Mall</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                    </li>

                                    <li>
                                        <strong>School</strong>
                                        <div class="text"><b>Polar Secondary School,</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                    </li>

                                    <li>
                                        <strong>Restaurant</strong>
                                        <div class="text"><b>Spectra Resturant & Cafe, </b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                        <div class="text"><b>Mojesty Resturant, </b>Carrer De Verso Street, Lundon, UK<span>2.5 km</span></div>
                                    </li>

                                    <li>
                                        <strong>Bank</strong>
                                        <div class="text"><b>United Bank</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                    </li>

                                    <li>
                                        <strong>Airport</strong>
                                        <div class="text"><b>Lundon International Airport</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                    </li>

                                    <li>
                                        <strong>Bar</strong>
                                        <div class="text"><b>Verna Plaza Bar</b>Verso Street, Lundon, UK <span>2.5 km</span></div>
                                    </li>
                                </ul>
                            </div>

                            <div class="map-column">
                                <div class="map-outer">
                                    <!--Map Canvas-->
                                    <div class="map-canvas"
                                        data-zoom="12"
                                        data-lat="-37.817085"
                                        data-lng="144.955631"
                                        data-type="roadmap"
                                        data-hue="#ffc400"
                                        data-title="Envato"
                                        data-icon-path="images/icons/map-marker.png"
                                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Box -->
                    <div class="review-area">
                        <!--Reviews Container-->
                        <div class="reviews-container">
                            <h3>Reviews For Costomer</h3>
                            <!--Reviews-->
                            <article class="review-box">
                                <div class="thumb-box">
                                    <figure class="thumb"><img src="{{ asset('frontland/images/resource/review-thumb-1.jpg') }}" alt=""></figure>
                                    <a href="#" class="reply-btn">Reply Now</a>
                                </div>
                                <div class="content-box">
                                    <div class="name">Monija Moro</div>
                                    <span class="date"><i class="la la-calendar"></i> 25 December, 2019</span>
                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                    <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit veniam voluptatem!.</div>
                                </div>
                            </article>
                            
                            <!--Reviews-->
                            <article class="review-box reply">
                                <div class="thumb-box">
                                    <figure class="thumb"><img src="{{ asset('frontland/images/resource/review-thumb-2.jpg') }}" alt=""></figure>
                                    <a href="#" class="reply-btn theme-btn">Reply Now</a>
                                </div>
                                <div class="content-box">
                                    <div class="name">Mibano Rests</div>
                                    <span class="date"><i class="la la-calendar"></i> 25 December, 2019</span>
                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                    <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit veniam voluptatem!.</div>
                                </div>
                            </article>

                            <!--Reviews-->
                            <article class="review-box">
                                <div class="thumb-box">
                                    <figure class="thumb"><img src="{{ asset('frontland/images/resource/review-thumb-3.jpg') }}" alt=""></figure>
                                    <a href="#" class="reply-btn theme-btn">Reply Now</a>
                                </div>
                                <div class="content-box">
                                    <div class="name">Cojari Barna</div>
                                    <span class="date"><i class="la la-calendar"></i> 25 December, 2019</span>
                                    <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star-o"></span><span class="la la-star-o"></span></div>
                                    <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit veniam voluptatem!.</div>
                                </div>
                            </article>
                        </div>
                    </div>

                        <!-- Review Comment Form -->
                    <div class="review-comment-form"> 
                        <h3>Leave A Review</h3>
                        <form method="post" action="#">
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="username" placeholder="Full Name" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="number" placeholder="Email Address" required>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" placeholder="Massage"></textarea>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <div class="rating-box">
                                        <div class="text"> Your Rating:</div>
                                        <div class="rating"><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 text-right">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">

                    <!-- Categories -->
                    <div class="sidebar-widget search-properties">
                        <!-- Property Search Form -->
                        <div class="property-search-form style-three">
                        
                                <div class="row no-gutters">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                    <a href="{{url('booking')}}"><button type="submit" class="theme-btn btn-style-one"> Booking Now</button></a> 
                                    </div>
                                </div>
                            
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
                                    <a href="{{route('news')}}">
                                        <img src="{{ asset('frontland/images/resource/property-thumb-1.jpg') }}" alt="">
                                        <span class="status">Rent</span>
                                    </a>
                                </div>
                                <span class="location">Lundon, UK</span>
                                <h3><a href="{{route('news')}}">Laxury Balles Villa</a></h3>
                                <div class="price">Rp 760,000</div>
                            </article>

                            <!-- Post -->
                            <article class="post">
                                <div class="post-thumb">
                                    <a href="{{route('news')}}">
                                        <img src="{{ asset('frontland/images/resource/property-thumb-2.jpg') }}" alt="">
                                        <span class="status">Rent</span>
                                    </a>
                                </div>
                                <span class="location">Lundon, UK</span>
                                <h3><a href="{{route('news')}}">Laxury Balles Villa</a></h3>
                                <div class="price">Rp 760,000</div>
                            </article>

                            <!-- Post -->
                            <article class="post">
                                <div class="post-thumb">
                                    <a href="{{route('news')}}">
                                        <img src="{{ asset('frontland/images/resource/property-thumb-3.jpg') }}" alt="">
                                        <span class="status hot">hot</span>
                                    </a>
                                </div>
                                <span class="location">Lundon, UK</span>
                                <h3><a href="{{route('news')}}">Laxury Balles Villa</a></h3>
                                <div class="price">Rp 760,000</div>
                            </article>

                            <!-- Post -->
                            <article class="post">
                                <div class="post-thumb">
                                    <a href="{{route('news')}}">
                                        <img src="{{ asset('frontland/images/resource/property-thumb-4.jpg') }}" alt="">
                                        <span class="status">Rent</span>
                                    </a>
                                </div>
                                <span class="location">Lundon, UK</span>
                                <h3><a href="{{route('news')}}">Laxury Balles Villa</a></h3>
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