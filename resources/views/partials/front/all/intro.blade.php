<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>{{Str::after(url()->current(), "http://127.0.0.1:8000/")}}</h2>
            <div class="page-links">
                <a href="{{$intro[0]->home_href}}">{{$intro[0]->home}}</a>
                <span>{{Str::after(url()->current(), "http://127.0.0.1:8000/")}}</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->