@extends('template.main')
@include('partials.front.blog.intro')
@section('content')
<div class="page-section spad">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <div>

                   <h1>Voici les résultats de votre recherche : </h1>

                    @foreach ($postarray as $item)
                    <div class="post-item">
						<div class="post-thumbnail">
							<img src="{{asset("storage/img/".$item->src)}}" alt="">
							<div class="post-date">
								<h2>{{$item->day}}</h2>
								<h3>{{$item->month}}</h3>
							</div>
						</div>

						<div class="post-content">
							<h2 class="post-title">{{$item->title}}</h2>
							<div class="post-meta">
								<a href="">{{$item->categories->category}}</a>


								@foreach ($item->tags as $tage)
								<a href="">{{$tage->tag }}</a>
								@endforeach

								{{-- <a href="">  {{$nbrcomments}} Comments</a> --}}
							</div>
							<p>{{Str::limit($item->content, 350)}} ... </p>
							<a href="/post/{{$item->id}}" class="read-more">Read More</a>
						</div>
					</div>

                    @endforeach

                </div>

            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">

                @include('partials.front.blog.search')
                @include('partials.front.blog.category')
                @include('partials.front.blog.tags')
                
            </div>
</div>
<!-- page section end-->





@endsection
