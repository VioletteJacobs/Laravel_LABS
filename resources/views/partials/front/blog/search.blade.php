					<!-- Single widget -->
					<div class="widget-item">
						<form action="/search" class="search-form" method="GET">
							@csrf
							<input type="text" placeholder="Search" name="search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>