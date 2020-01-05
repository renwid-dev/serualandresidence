@extends('frontland.layouts.app')

@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="upper-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('frontland/images/resource/blog-detail.jpg')}}" alt=""></figure>
                            </div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span>Admin</span></li>
                                <li>JANUARY 14, 2019</li>
                                <li>COMMENTS 03</li>
                            </ul>
                            <h3>Resources that we thought you may find useful</h3>
                            <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge.</p>
                            <h4>Why it matter?</h4>
                            <p>The look and feel of a space is created by the way the various items in that room are positioned. If you put them in the wrong place you can instantly diminish the overall appearance of the area, regardless of whether the items individually are stylish and on-trend.</p>
                            <p> Good placement, however, will have the opposite effect, to the point where even less attractive furniture located correctly around the room can produce amazing results.</p>
                            <blockquote>To be successful in real estate, you must always and consistently put your clients’ best interests first. When you do, your personal needs will be realized beyond your greatest expectations.</blockquote>
                            <div class="two-column">
                                <div class="row">
                                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                        <figure class="image"><img src="{{ asset('frontland/images/resource/post-image-1.jpg')}}" alt=""></figure>
                                    </div>

                                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                        <p>We do what is best for our clients, in order to get full satisfaction and perfection. Our primary goal is to make thing work and make them happy on the eve of a Nantucket voyage, I regarded those marble tablets, and by the murky light of that darkened, doleful day read the fate of the whalemen who had gone before me.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Share Option -->
                        <div class="post-share-options clearfix">
                            <div class="pull-left clearfix">
                                <span class="icon la la-tags"></span>
                                <ul class="tags">
                                    <li><a href="#">Apartment,</a>,</li>
                                    <li><a href="#">Condo,</a>,</li>
                                    <li><a href="#">Multi Family,</a></li>
                                    <li><a href="#">Villa</a></li>
                                </ul>
                            </div>
                            <div class="pull-right clearfix">
                                <ul class="social-icon clearfix">
                                    <li><a href="#"><i class="la la-facebook"></i></a></li>
                                    <li><a href="#"><i class="la la-twitter"></i></a></li>
                                    <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="#"><i class="la la-pinterest"></i></a></li>
                                </ul>
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
                                        <figure class="thumb"><img src="{{ asset('frontland/images/resource/review-thumb-1.jpg')}}" alt=""></figure>
                                        <a href="#" class="reply-btn">Reply Now</a>
                                    </div>
                                    <div class="content-box">
                                        <div class="name">Monija Moro</div>
                                        <span class="date"><i class="la la-calendar"></i> 29 December, 2019</span>
                                        <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit veniam voluptatem!.</div>
                                    </div>
                                </article>
                                
                                <!--Reviews-->
                                <article class="review-box reply">
                                    <div class="thumb-box">
                                        <figure class="thumb"><img src="{{ asset('frontland/images/resource/review-thumb-2.jpg')}}" alt=""></figure>
                                        <a href="#" class="reply-btn theme-btn">Reply Now</a>
                                    </div>
                                    <div class="content-box">
                                        <div class="name">Mibano Rests</div>
                                        <span class="date"><i class="la la-calendar"></i> 29 December, 2019</span>
                                        <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit veniam voluptatem!.</div>
                                    </div>
                                </article>

                                <!--Reviews-->
                                <article class="review-box">
                                    <div class="thumb-box">
                                        <figure class="thumb"><img src="{{ asset('frontland/images/resource/review-thumb-3.jpg')}}" alt=""></figure>
                                        <a href="#" class="reply-btn theme-btn">Reply Now</a>
                                    </div>
                                    <div class="content-box">
                                        <div class="name">Cojari Barna</div>
                                        <span class="date"><i class="la la-calendar"></i> 29 December, 2019</span>
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

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-right">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Post Review</button>
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
                                        <a href="{{ route('news') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-1.jpg') }}" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ route('news') }}">Laxury Balles Villa</a></h3>
                                    <div class="price">Rp 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ route('news') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-2.jpg') }}" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ route('news') }}">Laxury Balles Villa</a></h3>
                                    <div class="price">Rp 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ route('news') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-3.jpg') }}" alt="">
                                            <span class="status hot">hot</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ route('news') }}">Laxury Balles Villa</a></h3>
                                    <div class="price">Rp 760,000</div>
                                </article>

                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ route('news') }}">
                                            <img src="{{ asset('frontland/images/resource/property-thumb-4.jpg') }}" alt="">
                                            <span class="status">Rent</span>
                                        </a>
                                    </div>
                                    <span class="location">Lundon, UK</span>
                                    <h3><a href="{{ route('news') }}">Laxury Balles Villa</a></h3>
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

    @include('frontland/partials/client')

    @include('frontland/partials/footer')

@endsection