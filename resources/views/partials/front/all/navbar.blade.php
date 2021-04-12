<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="{{asset("storage/img/".$logo->url)}}" alt="" weith= "30px" height= "30px"><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{Route::getCurrentRoute()->uri() == '/' ? 'active' : null}}"><a href="/" class="text-capitalize">{{$nav[0]->content}}</a></li>
            <li class="{{Route::getCurrentRoute()->uri() == 'services' ? 'active' : null}}"><a href="/services" class="text-capitalize">{{$nav[1]->content}}</a></li>
            <li class="{{Route::getCurrentRoute()->uri() == 'blog' ? 'active' : null}}"><a href="/blog" class="text-capitalize">{{$nav[2]->content}}</a></li>
            <li class="{{Route::getCurrentRoute()->uri() == 'contact' ? 'active' : null}}"><a href="/contacter" class="text-capitalize">{{$nav[3]->content}}</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->