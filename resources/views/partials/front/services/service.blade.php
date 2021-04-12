<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{!!$titreUnService!!}</h2>
        </div>
        <div class="row">
            @foreach ($services as $item)
                
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
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="text-center">
            {{$services->fragment('services')->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>
<!-- services section end -->