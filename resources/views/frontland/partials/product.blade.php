<!-- Recent Section -->
<section class="property-search-section">
    <br>
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
            <h2>RECENT PROPERTIES</h2>
        </div>

        <div class="row">
            <!-- Property Block -->
            @foreach($properties as $property)
            <div class="property-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                        <figure class="image"><img src="{{ Storage::url('property/'.$property->image) }}" alt=""></figure>
                        @endif
                        <span class="for">for {{ $property->purpose }}</span>
                        @if ($property->featured)
                        <span class="featured">FEATURED</span>
                        @endif
                        <!-- <ul class="info clearfix">
                            <li><a href="#"><i class="la la-calendar-minus-o"></i>2 Years Ago</a></li>
                            <li><a href="#"><i class="la la-user-secret"></i>Ghaly Morca</a></li>
                        </ul> -->
                    </div>
                    <div class="lower-content">
                        <ul class="tags">
                            <li><a href="#">{{ ucfirst($property->type) }}</a></li>
                            <!-- <li><a href="#">Bar</a>,</li>
                            <li><a href="#">House</a>,</li> -->
                        </ul>
                        <h3><a href="{{ url('property',$property->slug) }}">{{ str_limit( $property->title, 25 ) }}</a></h3>
                        <div class="lucation"><i class="la la-map-marker"></i> {{ $property->city }}, {{ $property->address }}</div>
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

        <div class="load-more-btn text-center">
            <a href="{{url('properties/grid')}}" class="theme-btn btn-style-two">Load More</a>
        </div>
    </div>
</section>
<!--End Property Section -->