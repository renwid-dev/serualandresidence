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
                                <li>by <span>{{$post->user->name}}</span></li>
                                <li>{{$post->created_at->diffForHumans()}}</li>
                                @foreach($post->categories as $key => $category)
                                <li>{{ $category->name }}</li>
                                @endforeach
                            </ul>
                            <h3>{{ $post->title }}</h3>
                            <p>{!! $post->body !!}</p>
                        </div>

                        <!-- Post Share Option -->
                        <div class="post-share-options clearfix">
                            <div class="pull-left clearfix">
                                <span class="icon la la-tags"></span>
                                <ul class="tags">
                                @foreach($post->tags as $key => $tag)
                                    <li><a href="{{ route('blog.tags',$tag->slug) }}">{{ $tag->name}},</a></li>
                                @endforeach
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

                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

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

    @include('frontland/partials/client')

    @include('frontland/partials/footer')

@endsection