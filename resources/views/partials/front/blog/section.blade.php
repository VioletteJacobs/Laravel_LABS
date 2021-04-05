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
							<p>{{$item->content}}</p>
							<a href="blog-post.html" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach

					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($category->shuffle() as $item)
							<li><a href="#">{{$item->category}}</a></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tag->shuffle() as $item)
							<li><a href="">{{$item->tag}}</a></li>
							@endforeach

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->