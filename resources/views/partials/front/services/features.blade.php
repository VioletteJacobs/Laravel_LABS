<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$titresService[1]->title}} features</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 features">
                <?php $i=0; ?>
            @foreach ($services->shuffle() as $item)
            @if ($i<3)
                
            <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{$item->title}}</h2>
                        <p>{{$item->p}}</p>
                    </div>
                    <div class="icon">
                        <i class="{{$item->icons->name}}"></i>
                    </div>
                </div>
                <?php $i++; ?>
                @endif
            @endforeach

            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>



            <div class="row">
                <div class="col-md-4 col-sm-4 features">
                <?php $i=0; ?>
                @foreach ($services->shuffle() as $item)
                @if ($i<3)
                    
                <!-- feature item -->
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$item->title}} </h2>
                            <p>{{$item->p}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$item->icons->name}}"></i>
                        </div>
                    </div>
                    <?php $i++; ?>
                    @endif
                @endforeach
    
                </div>
                
        </div>
        <div class="text-center mt100">
            <a href="/blog" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->