<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{{$titrewelcome[1]->title}}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    @foreach ($testimonials as $item)
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>{{$item->span}}​‌</span>
                        <p>{{$item->p}}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="{{asset("storage/img/avatar/".$item->photo)}}" alt="">
                            </div>
                            <div class="client-name">
                                <h2>{{$item->firstname}} {{$item->name}}</h2>
                                <p>{{$item->fonction}}</p>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->