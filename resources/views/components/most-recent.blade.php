<!-- Most Recent Area -->
<div class="most-recent-area">
    <!-- Section Tittle -->
    <div class="small-tittle mb-20">
        <h4>Most Recent</h4>
    </div>
    <!-- Details -->
    <div class="most-recent mb-40">
        @foreach($mostRecentd as $mostR)
        <div class="most-recent-img">
            <img  src="{{asset('storage/'.$mostR->image_path)}}" alt="">
            <div class="most-recent-cap">
                <span class="bgbeg">{{$mostR->category->name}}</span>
                <h4><a href="latest_news.html">{{$mostR->title}} <br>
                        Outfits to Wear This.</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div>

        @endforeach

    </div>

    <!-- Single -->

    @foreach($mostRecent as $mostp)
       <div class="most-recent-single">
        <div class="most-recent-images">
            <img  src="{{asset('storage/'.$mostp->image_path)}}" width="85px" height="79px" alt="">
        </div>
        <div class="most-recent-capt">
            <h4><a href="{{route('article.details',$mostp->slug)}}">{{$mostp->title}}</a></h4>
            <p>Jhon  |  2 hours ago</p>
        </div>
    </div>
    @endforeach
</div>
