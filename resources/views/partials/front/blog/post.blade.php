	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">


					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">

							<img src="{{asset('storage/img/blog/'.$show->src)}}" alt="">
							<div class="post-date">
								<h2>{{$show->day}}</h2>
								<h3>{{$show->month}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$show->title}}</h2>
							<div class="post-meta">
								<a href="">{{$show->categories->category}}</a>

								@foreach ($show->tags as $tage)
								<a href="">{{$tage->tag }}</a>
								@endforeach

								<a href=""> {{$nbrcomments}} Comments</a>
							</div>

							<p>{!!$show->content!!}</p>  
						</div>


						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								{{-- {{dd($show->users)}} --}}
								<img src="{{asset('storage/img/team/'.$show->users->photo)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$show->users->name}} {{$show->users->firstname}}, <span>Author</span></h2>
								<p>{{$show->users->description}}</p>
							</div>
						</div>


						<!-- Post Comments -->
						<div class="comments">

							<h2>Comments ({{$nbrcomments}})</h2>
							<ul class="comment-list">
								@foreach ($commentsvalidate as $item)
								<li>
									<div class="avatar">
										<img src="{{asset("storage/img/team/". $item->photo)}}" alt="">
									</div>
									<div class="commetn-text">
										<h3>{{$item->firstname}} {{$item->name}} | 03 nov, 2017 | Reply</h3>
										<p>{{$item->content}} </p>
									</div>
								</li>
								@endforeach
								
							</ul>
						</div>


						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="message" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-5 sidebar">

					@include('partials.front.blog.search')
					@include('partials.front.blog.category')
					@include('partials.front.blog.tags')
					
				</div>
			</div>
		</div>
	</div>