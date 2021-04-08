<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container" id="team">
        <div class="section-title">
            <h2>{!!$titleThree!!}</h2>
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
        </div>
    </div>
</div>
<!-- Team Section end-->