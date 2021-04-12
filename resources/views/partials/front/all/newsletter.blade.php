<!-- newsletter section -->
<div class="newsletter-section spad" id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>{{$newsletter->title}}</h2>
            </div>
            <div class="col-md-9">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                {{-- message d'erreur validate --}}
                @if ($errors->any()) 
                    <div class="alert alert-danger"> 
                        <ul> 
                            @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                            @endforeach 
                        </ul> 
                    </div> 
                @endif
                <!-- newsletter form -->
                <form class="nl-form" action="/newsletter" method="post">
                    @csrf
                    <input type="text" placeholder="{{$newsletter->inputPlaceHolder}}" name="email">
                    <button class="site-btn btn-2">{{$newsletter->btn}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->