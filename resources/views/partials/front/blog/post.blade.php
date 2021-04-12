
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">

							<img src="{{asset("storage/img/blog/".$show->src)}}" alt="">
							<div class="post-date">
								@if ($show->created_at == NULL)
								<h2>12</h2>
								<h3>January 1995</h3>
								@else
								<h2>{{$show->created_at->format("d")}}</h2>
								<h3>{{$show->created_at->format("m Y")}}</h3>
									
								@endif
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$show->title}}</h2>
							<div class="post-meta">
								<a  id="styleMeta" href="/filterc/{{$show->id}}">{{$show->categories->category}}</a>
								@if (count($show->tags)>1)

									@foreach ($show->tags->random(2) as $tage)
										@if ($loop->iteration == 1)
										<a  id="styleMeta" href="/filtertag/{{$show->id}}">{{$tage->tag }}</a>
										@else
										<a  href="/filtertag/{{$show->id}}"> , {{$tage->tag }}</a>
											
										@endif
									@endforeach
										
		
									
								@endif

								<a id="styleMeta" href=""> {{$nbrcomments}} Comments</a>
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
										@if (Auth::check())
										<img src="{{asset('storage/img/'.$item->photo)}}" alt="">

										@else
										<img src="{{asset('storage/img/blog/user.jpeg')}}" alt="">

										@endif
									</div>
									<div class="commetn-text">

										@if ($item->created_at == NULL)
										<h3>{{$item->firstname}} {{$item->name}} | 12 janvier, 1995 </h3>
										@else
										<h3>{{$item->firstname}} {{$item->name}} | {{$item->created_at->format( "d M, Y")}} </h3>
										@endif

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
								<form class="form-class" action="/commentB" method="POST">
									@csrf
									<div class="row">
										@if (!Auth::check())
										<div class="col-sm-6">
											<input type="text" name="name" value="{{old("name")}}" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="firstname"  value="{{old("firstname")}}" placeholder="Your firstname">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email"  value="{{old("email")}}" placeholder="Your email">
										</div>
											
										@endif

										<div class="col-sm-12">
											<textarea name="content" value="{{old("content")}}" placeholder="Message"></textarea>
											<button class="site-btn" type="submit">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
