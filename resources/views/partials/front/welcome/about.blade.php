	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($services->shuffle()->take(3) as $item)
					<!-- single card -->
					<div class="col-md-4 col-sm-6" height="352">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$item->icons->name}}"></i>
							</div>
							<h2>{{$item->title}}</h2>
							<p >{{Str::limit($item->p, 50)}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{!!$titreUnWelcome!!}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$about[0]->para_left}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$about[0]->para_right}}}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="{{$about[0]->btn_href}}" class="site-btn">{{$about[0]->btn_content}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{asset("storage/img/".$about[0]->img)}}" width="750" height="332" alt="">
							<a href="{{$about[0]->video_href}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->