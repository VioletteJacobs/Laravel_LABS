<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container" id="team">
        <div class="section-title">
            <h2>{{$titrewelcome[3]->title}}</h2>
        </div>
        <div class="row">
            @foreach ($team->where('id', "!=", 1)->random(2) as $user)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{asset('storage/img/team/'.$user->photo)}}" alt="" height="440px" width="360px">
                        <h2>{{$user->firstname}} {{$user->name}}</h2>
                        <h3>{{$user->fonction}}</h3>
                    </div>
                </div>
                @if ($loop->iteration == 1)
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{asset('storage/img/team/'.$team[0]->photo)}}" alt="" height="440px" width="360px">
                            <h2>{{$team[0]->firstname}} {{$user->name}}</h2>
                            <h3>{{$team[0]->fonction}}</h3>
                        </div>
                    </div>
                @endif
            @endforeach
            {{-- <?php $i=0; ?>
            @foreach ($teamRight->shuffle() as $item)
            @if ($i<1)
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset("storage/img/team/".$item->photo)}}" alt="">
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
                    <img src="{{asset("storage/img/team/".$Ceo[0]->photo)}}" alt="">
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
            @endforeach --}}
        </div>
    </div>
</div>
<!-- Team Section end-->