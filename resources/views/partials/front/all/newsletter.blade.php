<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>{{$newsletter[0]->title}}</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form">
                    <input type="text" placeholder="{{$newsletter[0]->inputPlaceHolder}}">
                    <button class="site-btn btn-2">{{$newsletter[0]->btn}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->