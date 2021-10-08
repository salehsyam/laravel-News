<div class="row">
    <div class="col-lg-12">
        <div class="weekly2-news-active d-flex">
            <!-- Single -->

            @foreach($mostPopular as $m_article)

            <div class="weekly2-single">
                <div class="weekly2-img">
                    <img  src="{{asset('storage/'.$m_article->image_path)}}"  alt="">
                </div>
                <div class="weekly2-caption">
                    <h4><a href="#">{{$m_article->title}}</a></h4>
                    <p>Jhon  |  2 hours ago</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
