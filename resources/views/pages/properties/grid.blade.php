@extends('frontland.layouts.app')

@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-grid-view">
                        <div class="upper-box clearfix">
                            <div class="sec-title">
                                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                                <h2>PROPERTY</h2>
                            </div>

                            <ul class="filter-options">
                                <li><a href="{{url('properties/list')}}"><span class="la la-th-list"></span></a></li>
                                <li class="active"><a href="{{url('properties/grid')}}"><span class="la la-th-large"></span></a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <!-- Property Block -->
                            @foreach($properties as $property)
                            <div class="property-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                        <figure class="image"><img src="{{ Storage::url('property/'.$property->image) }}" alt=""></figure>
                                        @endif
                                        <span class="for">for {{ $property->purpose }}</span>
                                        @if ($property->featured)
                                        <span class="featured">FEATURED</span>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <ul class="tags">
                                            <!-- <li><a href="#">House</a>,</li> -->
                                        </ul>
                                        <h3><a href="{{ url('property',$property->slug) }}">{{ str_limit( $property->title, 25 ) }}</a></h3>
                                        <div class="lucation"><i class="la la-map-marker"></i>{{ $property->city }}, {{ $property->address }}</div>
                                        <ul class="property-info clearfix">
                                            <li><i class="flaticon-dimension"></i>{{ $property->area}} Sq-Ft</li>
                                            <li><i class="flaticon-bed"></i> {{ $property->bedroom }} Bedrooms</li>
                                            <li><i class="flaticon-car"></i> 2 Garage</li>
                                            <li><i class="flaticon-bathtub"></i> {{ $property->bathroom }} Bathroom</li>
                                        </ul>
                                        <div class="property-price clearfix">
                                            <div class="read-more"><a href="{{ url('property',$property->slug) }}" class="theme-btn">More Detail</a></div>
                                            <div class="price">Rp {{ number_format($property->price) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <!-- Pagination -->
                        <div class="styled-pagination">
                            {{ $properties->links() }}
                            <!-- <ul class="clearfix">
                                <li class="prev"><a href="#"><span>Prev</span></a></li>
                                <li><a href="#"><span>1</span></a></li>
                                <li class="next"><a href="#"><span>Next</span></a></li>
                            </ul> -->
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
                        <div class="sidebar-widget search-properties/detail">
                            <div class="sidebar-title"><h3>Search properties/detail</h3></div>
                            <!-- Property Search Form -->
                            <div class="property-search-form style-three">
                                <form method="get" action="{{ url('properties/grid') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row no-gutters">
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <input type="text" name="location" placeholder="Search location" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select-box" name="type">
                                                <option value="">Property Type</option>
                                                <option value="house">House</option>
                                                <option value="apartment">Apartments</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select-box" name="status">
                                                <option value="">Property Status</option>
                                                <option value="rent">For Rent</option>
                                                <option value="sale">For Sale</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="numeric" name="bed" placeholder="Search Total Bed" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="numeric" name="bath" placeholder="Search Total Bath" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="range-slider-one clearfix">
                                                <label>Price Filter</label>
                                                <div class="price-range-slider"></div>
                                                <div class="input"><input type="text" class="price-amount" name="price" readonly></div>
                                                <div class="title">Rp</div>
                                            </div>
                                        </div>
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
                            <div class="sidebar-title"><h3>Location properties</h3></div>
                            <ul class="cat-list">
                                @foreach($cities as $city)
                                    <li><a href="{{ route('property.city',$city->city_slug) }}">{{ $city->city }} <span></span></a></li>
                                @endforeach
                            </ul>
                        </div>



                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    @include('frontland/partials/footer')

@endsection
