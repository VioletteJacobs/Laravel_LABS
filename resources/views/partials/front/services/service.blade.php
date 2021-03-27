<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{{$titresService[0]->title}}</h2>
        </div>
        <div class="row">
            @foreach ($services as $item)
                
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$item->icon}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$item->title}}</h2>
                        <p>{{$item->p}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services section end -->