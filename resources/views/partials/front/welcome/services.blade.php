<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{!!$titleTwo!!}</h2>
        </div>
        <div class="row">
            {{-- iteration for de random of 9 --}}
            <?php $i=0; ?>
            @foreach ($services->shuffle() as $item)
            @if ($i<9)
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$item->icons->name}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$item->title}}</h2>
                        <p>{{$item->p}}</p>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            @endif
            @if ($loop -> iteration%3==0)
            </div>
            <div class="row">
            @endif
            @endforeach
        </div>
        <div class="text-center">
            <a href="/services" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->