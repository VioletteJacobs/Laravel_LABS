<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>{{$newsletter->title}}</h2>
            </div>
            <div class="col-md-9">
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