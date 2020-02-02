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
                            @foreach($posts as $post)
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        @if(Storage::disk('public')->exists('posts/'.$post->image) && $post->image)
                                        <figure class="image"><a href="{{ route('blog.show',$post->slug) }}"><img src="{{Storage::url('posts/'.$post->image)}}" alt=""></a></figure>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <ul class="info">
                                            <li>by <span>{{$post->user->name}}</span></li>
                                            <li>{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                        <h3><a href="{{ route('blog.show',$post->slug) }}">{{ $post->title }}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End News Block -->
                        </div>

                        <!-- Pagination -->
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <!-- <li class="prev"><a href="#"><span>Prev</span></a></li>
                                <li><a href="#"><span>1</span></a></li>
                                <li class="active"><a href="#"><span>2</span></a></li>
                                <li><a href="#"><span>3</span></a></li>
                                <li><a href="#"><span>4</span></a></li>
                                <li class="next"><a href="#"><span>Next</span></a></li> -->
                            </ul>
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

    @include('frontland/partials/footer')

@endsection