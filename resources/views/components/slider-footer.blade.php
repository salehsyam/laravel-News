<div class="weekly3-news-area pt-80 pb-130">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly3-news-active dot-style d-flex">
                                    @foreach($slider as $slider_a)
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="{{asset('storage/'.$slider_a->image_path)}}" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">{{$slider_a->title}}</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
