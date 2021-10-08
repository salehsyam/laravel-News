<div class="recent-articles pt-80 pb-80">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Trending  News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        @foreach($trendNews as $trend)
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img  src="{{asset('storage/'.$trend->image_path)}}" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="#" > <h4><a href="latest_news.html">{{$trend->titile}}</a></h4></a></h4>
                                <P>{{$trend->created_at->format('d M,Y')}}</P>
                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>

                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
