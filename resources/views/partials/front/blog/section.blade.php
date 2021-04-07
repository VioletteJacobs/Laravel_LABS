	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">

					<!-- Post item -->
					@foreach ($post as $item)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{asset("storage/img/".$item->src)}}" alt="">
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

					<!-- Pagination -->
					<div class="page-pagination">
						{{$post->fragment('posts')->links('vendor.pagination.bootstrap-4') }}
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">

					@include('partials.front.blog.search')
					@include('partials.front.blog.category')
					@include('partials.front.blog.tags')
					
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->