	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">


					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							{{-- <img src="img/blog/blog-1.jpg" alt=""> --}}
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
								{{-- {{dd($show->tags->tag)}}
								@foreach ($show->tags as $item)
								<a href="">{{$item->tag}}</a>
								@endforeach --}}
								<a href="">2 Comments</a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. </p>
							<p>Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem. </p>
						</div>


						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset('storage/img/team/'.$show->photo)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$show->users->name}} {{$show->users->firstname}}, <span>Author</span></h2>
								<p>{{$show->users->description}}</p>
							</div>
						</div>


						<!-- Post Comments -->
						<div class="comments">

							<h2>Comments (2)</h2>
							<ul class="comment-list">
								@foreach ($comments as $item)
								<li>
									<div class="avatar">
										<img src="img/avatar/01.jpg" alt="">
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