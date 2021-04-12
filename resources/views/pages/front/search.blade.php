@extends('template.second')
@section('content')

	
	
@if($posts->isNotEmpty())
	<h1 class="mt-5">Voici les résultats : </h1>
	@foreach ($posts as $post)
	<div class="post-item">
		<div class="post-thumbnail">
			<img src="{{asset("storage/img/blog/".$post->src)}}" alt="">
			<div class="post-date">
				@if ($post->created_at == NULL)
					<h2>12</h2>
					<h3>January 1995</h3>
				@else
					<h2>{{$post->created_at->format("d")}}</h2>
					<h3>{{$post->created_at->format("m Y")}}</h3>
					
				@endif
			</div>
		</div>

		<div class="post-content">
			<h2 class="post-title">{{$post->title}}</h2>
			<div class="post-meta">
				<a  id="styleMeta" href="/filterc/{{$post->id}}">{{$post->categories->category}}</a>

				@foreach ($post->tags->shuffle()->take(2) as $tage)
				@if ($loop->iteration == 1)
					<a  id="styleMeta" href="/filtertag/{{$post->id}}">{{$tage->tag }}</a>
				@else
					<a  href="/filtertag/{{$post->id}}"> , {{$tage->tag }}</a>
					
				@endif
				@endforeach


			</div>
			<p>{{Str::limit($post->content, 850)}} ... </p>
			<a href="/post/{{$post->id}}" class="read-more">Read More</a>
		</div>
	</div>
	@endforeach
@else 
	<div>
		<h2>Aucun post ne contient le mot clé que vous avez recherché. Désolée.</h2>
	</div>
@endif
@endsection
