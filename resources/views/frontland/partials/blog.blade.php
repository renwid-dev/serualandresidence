<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">ALL ABOUT LATEST WILLIA UPDATES</span>
            <h2>NEWS & STORIES</h2>
        </div>

        <div class="row">
            <!-- News Block -->
            @foreach($posts as $post)
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                    @if(Storage::disk('public')->exists('posts/'.$post->image) && $post->image)
                        <figure class="image"><a href="{{ route('blog.show',$post->slug) }}"><img src="{{Storage::url('posts/'.$post->image)}}" alt=""></a></figure>
                        <div class="icon-box"><span class="icon la la-photo"></span></div>
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
        </div>
    </div>
</section>
<!--End News Section -->