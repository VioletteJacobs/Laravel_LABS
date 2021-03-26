<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$titrewelcome[3]->title}}</h2>
        </div>
        <div class="row">
            @foreach ($team as $item)
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{$item->photo}}" alt="">
                    <h2>{{$item->firstname}} {{$item->name}}</h2>
                    <h3>{{$item->fonction}}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->