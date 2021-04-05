	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">

					<!-- Post item -->
					@foreach ($post as $item)
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="img/blog/blog-2.jpg" alt="">
							<div class="post-date">
								<h2>{{$item->day}}</h2>
								<h3>{{$item->month}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$item->title}}</h2>
							<div class="post-meta">
								<a href="">{{$item->categories->category}}</a>
								<a href="">Design, Inspiration</a>
								<a href="">2 Comments</a>
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