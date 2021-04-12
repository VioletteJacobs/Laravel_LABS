	{{-- <!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts"> --}}

<!-- Post item -->
@foreach ($postsValidate as $item)
<div class="post-item">
	<div class="post-thumbnail">
		<img src="{{asset("storage/img/blog/".$item->src)}}" alt=""  class="w-100">
		
		
		<div class="post-date">
			
			@if ($item->created_at == NULL)
			
			<h2>12</h2>
			<h3>January 1995</h3>
			
			@else
			
			<h2>{{$item->created_at->format("d")}}</h2>
			<h3>{{$item->created_at->format("m y")}}</h3>
			
			@endif
		</div>
	</div>
	
	<div class="post-content">
		<h2 class="post-title">{{$item->title}}</h2>
		<div class="post-meta">
			<a id="styleMeta" href="/filterc/{{$item->id}}">{{$item->categories->category}}</a>
			
			
			@foreach ($item->tags->shuffle()->take(2) as $tage)
			@if ($loop->iteration == 1)
			<a  id="styleMeta" href="/filtertag/{{$item->id}}">{{$tage->tag }}</a>
			@else
			<a  href="/filtertag/{{$item->id}}"> , {{$tage->tag }}</a>
			
			
			@endif
			@endforeach
			
			
			<a id="styleMeta" href="/post/{{$item->id}}"> {{count($commentsvalidate->where("post_id", $item->id))}} Comments</a>
		</div>
		<p>{{Str::limit($item->content, 350)}} ... </p>
		<a href="/post/{{$item->id}}" class="read-more">Read More</a>
	</div>
</div>
@endforeach

<!-- Pagination -->
<div class="text-center">
	{{$post->fragment('posts')->links('vendor.pagination.bootstrap-4') }}
</div>
{{-- </div> --}}
<!-- Sidebar area -->
{{-- <div class="col-md-4 col-sm-5 sidebar">
	
	@include('partials.front.blog.search')
	@include('partials.front.blog.category')
	@include('partials.front.blog.tags')
	
</div>
</div>
</div>
</div> --}}
<!-- page section end-->