<div class="youtube-area video-padding d-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-items-active">
                    @foreach($videos as $vid)
                    <div class="video-items text-center">
                        <video controls>
                            <source src="{{ asset('storage/'.$vid->video)}}" type="video/mp4">
                            {{$vid->title}}
                        </video>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="video-info">
            <div class="row">
                <div class="col-12">
                    <div class="testmonial-nav text-center">
                        @foreach($videos as $video)
                        <div class="single-video">
                            <video controls>
                                <source src="{{ asset('storage/'.$video->video)}}" type="video/mp4">
                                {{$video->title}}
                            </video>
                            <div class="video-intro">
                                <h4> {{$video->title}} - 2020 </h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

