@extends('frontland.layouts.app')

@section('content')

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="upper-info-box">
            <div class="row">
                <div class="about-property col-lg-8 col-md-12 col-sm-12">
                    <h2>{{ $property->title }}</h2>
                    <div class="location"><i class="la la-map-marker"></i> {{ $property->city }}, {{ $property->address }}</div>
                    <ul class="property-info clearfix">
                        <li><i class="flaticon-dimension"></i>{{ $property->area }} Sq-Ft</li>
                        <li><i class="flaticon-bed"></i>{{ $property->bedroom }} Bedroom</li>
                        <li><i class="flaticon-car"></i>2 Garage</li>
                        <li><i class="flaticon-bathtub"></i>{{ $property->bathroom }} Bathroom</li>
                    </ul>
                </div>
                <div class="price-column col-lg-4 col-md-12 col-sm-12">
                    <span class="title">Start From</span>
                    <div class="price">Rp {{ number_format($property->price) }}</div>
                    <span class="status">For {{ $property->purpose }}</span>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="property-detail">
                    <div class="upper-box">
                        <div class="carousel-outer">
                        @foreach($property->gallery as $gallery)
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><a href="{{Storage::url('property/gallery/'.$gallery->name)}}" class="lightbox-image" title="Image Caption Here"><img src="{{Storage::url('property/gallery/'.$gallery->name)}}" alt=""></a></li>
                            </ul>
                            
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li><img src="{{Storage::url('property/gallery/'.$gallery->name)}}" alt=""></li>
                            </ul>
                        @endforeach
                        </div>
                    </div>

                    <div class="lower-content">
                        <h3>Descripation</h3>
                        <p>{!! $property->description !!}</p>
                    </div>

                    <!-- Property Features -->
                    @if($property->features)
                    <div class="property-features">
                        <h3>Feature</h3>
                        <ul class="list-style-one">
                        @foreach($property->features as $feature)
                            <li>{{ $feature->name}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Flooring & Video -->
                    <div class="flooring-tabs tabs-box">
                        <div class="clearfix">
                            <h3>Flooring Plans</h3>
                            <ul class="tab-buttons">
                                <li data-tab="#groud-floor" class="tab-btn active-btn">Floor Plan</li>
                                <li data-tab="#first-floor" class="tab-btn">Video</li>
                            </ul>                
                        </div>

                        <div class="tabs-content">
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="groud-floor">
                                <div class="image-box">
                                @if(Storage::disk('public')->exists('property/'.$property->floor_plan) && $property->floor_plan)
                                    <figure class="image"><img src="{{Storage::url('property/'.$property->floor_plan)}}" alt=""></figure>
                                @endif
                                </div>
                            </div>

                            <!--Tab -->
                            <div class="tab" id="first-floor">
                                <div class="image-box">
                                @if($videoembed)
                                    <figure class="image">{!! $videoembed !!}</figure>
                                @endif
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
                                    {!! $property->nearby !!}
                                </ul>
                            </div>

                            <div class="map-column">
                                <div class="map-outer">
                                    <!--Map Canvas-->
                                    <div class="map-canvas"
                                        data-zoom="12"
                                        data-lat="{{ $property->location_latitude }}"
                                        data-lng="{{ $property->location_longitude }}"
                                        data-type="roadmap"
                                        data-hue="#ffc400"
                                        data-title="Envato"
                                        data-icon-path="images/icons/map-marker.png"
                                        data-content="{{ $property->city }}, {{ $property->address }}">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <a href="{{url('booking',$property->slug)}}"><button type="submit" class="theme-btn btn-style-one"> Booking Now</button></a> 
                                    </div>
                                </div>
                            
                        </div>
                        <!-- End Form -->
                    </div>

                        <!-- Categories -->
                    <div class="sidebar-widget categories">
                        <div class="sidebar-title"><h3>Location Properties</h3></div>
                        <ul class="cat-list">
                            @foreach($cities as $city)
                                <li><a href="{{ route('property.city',$city->city_slug) }}">{{ $city->city }} <span></span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Recent Properties -->
                    <div class="sidebar-widget recent-properties">
                        <div class="sidebar-title"><h3>Recent Properties</h3></div>
                        <div class="widget-content">
                            <!-- Post -->
                            @foreach($properties as $property)
                            <article class="post">
                                <div class="post-thumb">
                                @if($property->image)
                                    <a href="{{ route('property.show',$property->slug) }}">
                                        <img src="{{Storage::url('property/'.$property->image)}}" alt="">
                                        <span class="status">{{ $property->purpose }}</span>
                                    </a>
                                @endif
                                </div>
                                <span class="flaticon-bed"> {{ $property->bedroom }} Bedrooms</span>
                                <h3><a href="{{ route('property.show',$property->slug) }}">{{ str_limit( $property->title, 18 ) }}</a></h3>
                                <div class="price">Rp {{ number_format($property->price) }}</div>
                            </article>
                            @endforeach

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