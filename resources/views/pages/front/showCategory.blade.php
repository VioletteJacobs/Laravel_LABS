@extends('template.second')

@section('content')



					@if ($postsCategory->isNotEmpty())
					<h1 class="mt-5 text-center">Voici les résultats : </h1>
					<br>
                    @foreach ($postsCategory as $item)
                    <div class="post-item">
						<div class="post-thumbnail">
							<img src="{{asset("storage/img/blog/".$item->src)}}"  height="269" alt="">
							<div class="post-date">
								@if ($item->created_at == NULL)
								<h2>12</h2>
								<h3>January 1995</h3>
								@else
								<h2>{{$item->created_at->format("d")}}</h2>
								<h3>{{$item->created_at->format("m Y")}}</h3>
									
								@endif
							</div>
						</div>

						<div class="post-content">
							<h2 class="post-title">{{$item->title}}</h2>
							<div class="post-meta">
								<a  id="styleMeta" href="/filterc/{{$item->id}}">{{$item->categories->category}}</a>

								@foreach ($item->tags->shuffle()->take(2) as $tage)
								@if ($loop->iteration == 1)
								<a  id="styleMeta" href="/filtertag/{{$item->id}}">{{$tage->tag }}</a>
								@else
								<a  href="/filtertag/{{$item->id}}"> , {{$tage->tag }}</a>
									
								@endif
								@endforeach

								{{-- <a id="styleMeta" href=""> {{$nbrcomments}} Comments</a> --}}
							</div>
							<p>{{Str::limit($item->content, 350)}} ... </p>
							<a href="/post/{{$item->id}}" class="read-more">Read More</a>
						</div>
					</div>
                    @endforeach
						
					@else
					<h1 class="text-center">Pas de résultats pour cette recherche</h1>
						
					@endif








@endsection
