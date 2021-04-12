<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            @foreach ($posts as $item)
            <!-- Single Card -->
            <a href="/blog">
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{asset("storage/img/blog/".$item->src)}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$item->title}}</h2>
                            <p>{{Str::limit($item->content, 80)}} ...</p>
                        </div>
                    </div>
                </div>
            </a>
                
            @endforeach
           
        </div>
    </div>
</div>
<!-- services card section end-->