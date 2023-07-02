<!-- loder -->
<div class="loader-wrapper">
	<div class="loader"></div>
	<div class="loder-section left-section"></div>
	<div class="loder-section right-section"></div>
</div>
<!--==================================================-->
<!-- Start print shop Main Menu -->
<!--==================================================-->
<div id="sticky-header" class="print_shop_nav_manu style-two">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-2">
				<div class="logo">
					<a class="logo_img" href="{{url('/')}}" title="print_shop">
						<img src="{{asset('main')}}/images/logo_mavereck.png" alt="" />
					</a>
					<a class="main_sticky" href="{{url('/')}}" title="print_shop">
						<img src="{{asset('main')}}/images/logo_black1.png" alt="astute" />
					</a>
				</div>
			</div>
			<div class="col-lg-7">
				<nav class="print_shop_menu">
					<ul class="nav_scroll_menu">
						<li><a href="{{url('/')}}">Home</a>
						</li>
						<li><a href="#" class="">Women</a>
							<ul class="sub-menu">
								<div id="navbar">
									<ul class="nav">
										<li class=""><a href="{{url('gallery/shirts')}}">Shirts</a></li>
										<li><a href="{{url('gallery/skirts')}}">Skirts</a></li>
										<li><a href="{{url('gallery/t_shirts')}}">T_Shirts</a></li>
										<li><a href="{{url('gallery/pt_shorts')}}">PT Shorts</a></li>
										<li><a href="{{url('gallery/pt_tragallery')}}">PT Track Pants</a></li>
									</ul>
									<ul class="nav">
										<li><a href="{{url('gallery/belts')}}">Belts</a></li>
										<li><a href="{{url('gallery/ties')}}">Ties</a></li>
										<li><a href="{{url('gallery/logos')}}">Logos</a></li>
										<li><a href="{{url('gallery/socks')}}">Socks</a></li>
										<li><a href="{{url('gallery/frocks')}}">Frocks</a></li>
									</ul>
								</div>
							</ul>
						</li>
						<li><a href="#" data-bs-toggle="modal" data-bs-target="#feedback_modal">Feedback</a></li>
						<li><a class="" href="{{url('/about')}}">About Us</a>
							<ul class="sub-menu-about">
								<div class="about_nav">
									<li><a href="{{url('/about')}}">About Us</a></li>
									<li><a href="{{url('/sitemap')}}">Sitemap</a></li>
								</div>
							</ul>
						</li>
						<li><a href="{{url('/contact')}}">Contact Us</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-2">
				@guest
				<button class="btn btn-light" type=""><a href="{{url('/signin')}}">Sign In</a></button>
				<button class="btn btn-light" type=""><a href="{{url('/signup')}}">Register</a></button>
				@endguest
				@auth
				<nav class="print_shop_menu col-lg-2 ">
					<ul class="nav_scroll_menu ">
						<li><a class="" href="#"><i class="bi bi-person-circle color_icon" style="font-size:30px !important"></i></a>
							<ul class="sub-menu-icon">
								<li>
									<a class="" href="#"><i class="bi bi-person-circle color_icon" style="font-size:30px !important"></i> {{ Auth::user()->name }}
								</li>
								<li>
									<a class="" href="{{ route('logout.customer') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<i class="bi bi-box-arrow-in-right"></i> {{ __('Sign Out') }}
									</a>
									<form id="logout-form" action="{{ route('logout.customer') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
							</ul>
						</li>
					</ul>
					@endauth
				</nav>
			</div>
			<div class="count_visitor col-lg-1">
				<span>Visitor: {{$counter??''}} </span>
			</div>
		</div>
	</div>
</div>

<!-- print_shop Mobile Menu  -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		<nav class="print_shop_menu">
			<ul class="nav_scroll">
				<li><a href="{{url('/')}}">Home</a>
				</li>
				<li><a href="{{url('/gallery')}}" class="">Gallery</a>
					<ul class="sub-menu">
						<div id="navbar">
							<li class=""><a href="{{url('gallery/shirts')}}">Shirts</a></li>
							<li><a href="{{url('gallery/skirts')}}">Skirts</a></li>
							<li><a href="{{url('gallery/t_shirts')}}">T_Shirts</a></li>
							<li><a href="{{url('gallery/pt_shorts')}}">PT Shorts</a></li>
							<li><a href="{{url('gallery/pt_tragallery')}}">PT Track Pants</a></li>

							<li><a href="{{url('gallery/belts')}}">Belts</a></li>
							<li><a href="{{url('gallery/ties')}}">Ties</a></li>
							<li><a href="{{url('gallery/logos')}}">Logos</a></li>
							<li><a href="{{url('gallery/socks')}}">Socks</a></li>
							<li><a href="{{url('gallery/frocks')}}">Frocks</a></li>

						</div>
					</ul>
				</li>
				<li><a href="{{url('/feedback')}}">Feedback</a></li>
				<li><a class="" href="{{url('/about')}}">About Us</a>
					<ul class="sub-menu-about">
						<div class="about_nav">
							<li><a href="{{url('/about')}}">About Us</a></li>
							<li><a href="{{url('/team')}}">Sitemap</a></li>
						</div>
					</ul>
				</li>
				<li><a href="{{url('/contact')}}">Contact Us</a></li>
			</ul>
			@guest
			<ul class="nav_scroll_menu">
				<li><a><i class="bi bi-person-circle color_icon" style="font-size:30px !important"></i></a>
					<ul class="sub-menu-icon">
						<li><a href="{{url('/signin')}}"><i class="bi bi-person-fill color_icon"></i> Sign In</a></li>
						<li><a href="{{url('/signup')}}"><i class="bi bi-pencil-square"></i> Register </a></li>
					</ul>
				</li>
			</ul>
			@endguest

			@auth

			<ul class="nav_scroll_menu">
				<li><a class="" href="{{url('/yourpage')}}"><i class="bi bi-person-circle color_icon" style="font-size:30px !important"></i></a>
					<ul class="sub-menu-icon">
						<li>
							<a class="" href="{{ route('logout.customer') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i class="bi bi-box-arrow-in-right"></i> {{ __('Sign Out') }}
							</a>
							<form id="logout-form" action="{{ route('logout.customer') }}" method="POST" class="d-none">
								@csrf
							</form>

						</li>
						<li>
							<a href="{{url('/yourpage')}}"><i class="bi bi-person-fill"></i> Personal </a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		@endauth
		<div class="count_visitor col-lg-1">
			<span>Visitor: </span>
			<span class="counter_visit"></span>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End print shop Main Menu -->
<!--==================================================-->

<!-- Modal Feedback -->
<form id="" action="{{url('/feedbackcustomer')}}" method="POST" id="">
	<div class="modal" id="feedback_modal">
		<div class="modal-dialog modal-lg" style='width:auto'>
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Feedback</h4>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				@csrf
				<div class="modal-body row">
					@method('PUT')
					<div class="row">
						@guest
						<div class="col-lg-12">
							<div class="form_box mb-30">
								<input type="text" name="fbname" placeholder="Name:">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form_box mb-30">
								<input type="text" name="fbemail" placeholder="Email:">
							</div>
						</div>
						<div class="col-lg-12 ">
							<div class="form_box mb-30">
								<input type="text" name="fbphone" placeholder="Phone Number:">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form_box mb-30">
								<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
							</div>
						</div>
						@endguest
						@auth
						<div class="col-lg-12">
							<div class="form_box mb-30">
								<input type="text" name="fbname" value="{{ Auth::user()->name }}" placeholder="Name:">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form_box mb-30">
								<input type="text" name="fbemail" placeholder="Email:" value="{{ Auth::user()->email }}">
							</div>
						</div>
						<div class="col-lg-12 ">
							<div class="form_box mb-30">
								<input type="text" name="fbphone" placeholder="Phone Number:">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form_box mb-30">
								<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
							</div>
						</div>
						@endauth
						<div class="col-lg-12">
							<div class="contact-form-btn mb-20 contact-form">
								<button type="submit"> Send Feedback <i class="bi bi-arrow-right"></i> </button>
							</div>
						</div>
					</div>
					@auth
					<input type="hidden" name="id" value="{{ Auth::user()->id }}">
					@endauth
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</form>