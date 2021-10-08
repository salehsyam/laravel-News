<div class="trending-area fix pt-25 gray-bg">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="slider-active">
                    @foreach($slider8 as $slider )
                        <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img  src="{{asset('storage/'.$slider->image_path)}}" width="750px" height="645px" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{$slider->category->name}}</span>
                                            <h2><a href="{{ route('article.details',$slider->slug) }}" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{$slider->title}}</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by {{$slider->user->name}}   -  {{$slider->created_at->format('d M,Y')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Right content -->
                <div class="col-lg-4">
                    <!-- Trending Top -->
                    <div class="row">
                        @foreach($slider4 as $slid)
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img  src="{{asset('storage/'.$slid->image_path)}}" alt="">
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgb">{{$slid->category->name}}</span>
                                        <h2><a href="{{ route('article.details',$slid->slug) }}">{{$slid->title}}</a></h2>
                                        <p>by {{$slid->user->name}}   -  {{$slid->created_at->format('d M,Y')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
