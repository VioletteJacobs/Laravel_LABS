<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{asset("storage/img/".$logo->url)}}" alt="" width= "548" height="148px"><!-- Logo -->
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carrousel as $item)
        <div class="item  hero-item" data-bg="{{asset("storage/img/".$item->url)}}">
            <p class="text-center">{{$item->span}}</p>
        </div>
            
        @endforeach
    </div>
</div>
<!-- Intro Section -->