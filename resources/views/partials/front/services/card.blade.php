<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            @foreach ($posts as $item)
            <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/blog/blog-2.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$item->title}}</h2>
                        <p>{{Str::limit($item->content, 80)}} ...</p>
                    </div>
                </div>
            </div>
                
            @endforeach
            {{-- <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/card-2.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-md-4 col-sm-12">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="img/card-3.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- services card section end-->