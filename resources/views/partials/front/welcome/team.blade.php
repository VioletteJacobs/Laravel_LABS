<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$titrewelcome[3]->title}}</h2>
        </div>
        <div class="row">
            <?php $i=0; ?>
            @foreach ($teamRight->shuffle() as $item)
            @if ($i<1)
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{$item->photo}}" alt="">
                    <h2>{{$item->firstname}} {{$item->name}}</h2>
                    <h3>{{$item->fonction}}</h3>
                </div>
            </div>
            <?php $i++; ?> 
            @endif 
            @endforeach
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{$Ceo[0]->photo}}" alt="">
                    <h2>{{$Ceo[0]->name}} {{$Ceo[0]->firstname}}</h2>
                    <h3>{{$Ceo[0]->fonction}}</h3>
                </div>
            </div>
            <?php $i=0; ?>
            @foreach ($teamLeft->shuffle() as $item)
            @if ($i<1 )
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{$item->photo}}" alt="">
                    <h2>{{$item->firstname}} {{$item->name}}</h2>
                    <h3>{{$item->fonction}}</h3>
                </div>
            </div>
            <?php $i++; ?> 
            @endif 
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->