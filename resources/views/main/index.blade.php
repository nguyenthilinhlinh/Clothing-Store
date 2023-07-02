@extends('layout.main.layout')
@section('title', 'Home')
@section('infor')

<!--==================================================-->
<!-- Start print shop hero section -->
<!--==================================================-->
<style>
.centered {
  position:relative !important;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container {
  position: relative;
  text-align: center;
  color: back;
  font-size: 40px
}

</style>
<div>
<form action="{{ asset('search/') }}" class="header__search__form">
			<form action="{{ url('search') }}" role="search" method="get" type="get" class="header_search">
				<div class="container header_search_div">
					<div class="form-inline">
						<div class="input-group" data-widget="sidebar-search">
							<input class="form-control form-control-sidebar" name="query" type="search" placeholder="Search product" aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-sidebar" type="submit">
									<i class="fas fa-search fa-fw"></i>
								</button>
							</div>
						</div>
					</div>
					<!--  -->
					<!-- <div class="row">
						<div class="col-12">
							<div class="header__search-content">
								<input type="search" name="query" placeholder="Search product"><i class="bi bi-search"></i>

								<button type="submit"> Search </button>
							</div>
						</div>
					</div> -->
					<!--  -->
				</div>
			</form>
			<!-- end header search -->
</div>
<div class="hero-section d-flex align-items-center" style="margin-top:50px;">

	<div class="container">
		<!-- header search -->
		
			<div class="row hero-bg align-items-center">
				<div class="col-lg-12 col-md-12">
					<div class="print_shop-section-title text-center container">
						
					<div class="centered">
					<img src="{{asset('main')}}/images/mvrd_logo_m.png" width="5%" height="25%" alt="">
					<h1> <span> Maverick Dresses </span></h1>
						<h3>Leading Uniform Manufacturers</h3>
						
						<p> </p>
					</div>
					</div>
				</div> -->
				<div class="row grid-container col-lg-12 col-md-12" >
				<img class="grid-item" src="{{asset('main')}}/images/slider/hinh1.png" alt="">
				<img class="grid-item" src="{{asset('main')}}/images/slider/hinh3.png" alt="">
				</div>
				<div class="hero-shape">
					<div class="hero-shape-thumb bounce-animate">
						<img src="{{asset('main')}}/images/slider/ball2.png" alt="">
					</div>
					<div class="hero-shape-thumb2 dance">
						<img src="{{asset('main')}}/images/slider/ball1.png" alt="">
					</div>
					<div class="hero-shape-thumb3 bounce-animate2">
						<img src="{{asset('main')}}/images/slider/cross1.png" alt="">
					</div>
					<div class="hero-shape-thumb4 bounce-animate3">
						<img src="{{asset('main')}}/images/slider/cross2.png" alt="">
					</div>
					<div class="hero-shape-thumb5 bounce-animate4">
						<img src="{{asset('main')}}/images/slider/dots.png" alt="">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!--==================================================-->
<!--End print shop hero Section  -->
<!--==================================================-->
@endsection
<!--==================================================-->

<!--==================================================-->
@section('portfolio')
<!--==================================================-->
<!-- Start print shop Portfolio Section  -->
<!--==================================================-->
<div class="portfolio-serction">
	<div class="container">
		<div class="row pricing-bg">
			<div class="col-lg-12">
				<div class="print_shop-section-title text-center">
					<h5> Our Picks For You</h5>
					<h1> Choose The Best Product For </h1>
					<h1> <span>your </span> </h1>
					<p> get ready to shop with uniforms </p>
				</div>
			</div>
			<!-- deamnd shape -->
			<div class="pricing-shape bounce-animate">
				<img src="{{asset('main')}}/images/slider/ball2.png" alt="">
			</div>
		</div>
		<div class="pricing-shape4 bounce-animate4">
			<img src="{{asset('main')}}/images/slider/ball1.png" alt="">
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="portfolio-list owl-carousel">
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/shirt.png" alt="" class="img-width-height">
							<!-- port-number-->
							<div class="post-number">
								<span>1</span>
							</div>
							<!-- port content -->
							<div class="port-content">
								<h5><a href="{{url('gallery/shirts')}}">Shirts</a></h5>
								<a href="{{url('gallery/shirts')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/skirts.png" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>2</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/skirts')}}">Skirts</a></h5>
								<a href="{{url('gallery/skirts')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/frock.png" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>3</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/frocks')}}">Frock </a></h5>
								<a href="{{url('gallery/frocks')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/T-shirts.png" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>4</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/t_shirts')}}"> P.T. T-shirts </a></h5>
								<a href="{{url('gallery/t_shirts')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/T-shorts.jpg" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>5</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/pt_shorts')}}"> P.T Shorts </a></h5>
								<a href="{{url('gallery/pt_shorts')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/track_pants.png" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>6</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/track_pants')}}">P.T Track pants </a></h5>
								<a href="{{url('gallery/track_pants')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/belts.png" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>7</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/belts')}}">Belts </a></h5>
								<a href="{{url('gallery/belts')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/tie.jpg" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>8</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/ties')}}">Ties</a></h5>
								<a href="{{url('gallery/ties')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/logo-design.png" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>9</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/logos')}}">Logos</a></h5>
								<a href="{{url('gallery/logos')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio-single-box">
						<div class="portfolio-thumb">
							<img src="{{asset('main')}}/images/resource/socks.png" alt="" class="img-width-height">
							<!-- post number -->
							<div class="post-number">
								<span>10</span>
							</div>
							<!-- port -->
							<div class="port-content">
								<h5><a href="{{url('gallery/socks')}}">Socks</a></h5>
								<a href="{{url('gallery/socks')}}"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--==================================================-->
<!-- End print shop portfolio Section  -->
<!--==================================================-->
@endsection
<!--==================================================-->

<!--==================================================-->
@section('testimonial')
<!--==================================================-->
<!-- Start print shop Testimonial Section  -->
<!--==================================================-->
<div id="testimonial-section" class="testimonial-section">
	<div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
		<div class="row testi-bg">
			<section id="section-quote">
				<!--Left Bubble Images-->
				<div class="container-pe-quote left">
					<div class="pp-quote li-quote-1" data-textquote="quote-text-1">
						<div class="img animated bounce"></div>
					</div>
					<div class="pp-quote li-quote-2" data-textquote="quote-text-2">
						<div class="img animated bounce"></div>
					</div>
					<div class="pp-quote li-quote-3" data-textquote="quote-text-3">
						<div class="img animated bounce"></div>
					</div>
				</div>
				<!--Left Bubble Images-->

				<!--Center Testimonials-->
				<div class="container-quote carousel-on">
					<!--Testimonial 2-->
					<div class="quote quote-text-4 show" data-ppquote="li-quote-4">
						<div class="pp"></div>
						<p>For those of you hosting this Christmas, read on; it’s time to polish up the cutlery, bring out the china plates and brush up on our top tips on…</p>
						<!-- container info -->
						<div class="container-info">
							<div class="name">Daniel Ward - <span> Customer</span> </div>
							<!-- testi rating  -->
							<div class="testi-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
							<!-- testi-icon -->
							<div class="testi-icon">
								<i class="bi bi-quote"></i>
							</div>
						</div>
					</div>

					<!--Testimonial 1-->
					<div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
						<div class="pp"></div>
						<p>For those of you hosting this Christmas, read on; it’s time to polish up the cutlery, bring out the china plates and brush up on our top tips on…</p>
						<!-- container info -->
						<div class="container-info">
							<div class="name">John Abraham - <span> Customer</span> </div>
							<!-- testi rating  -->
							<div class="testi-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
							<!-- testi-icon -->
							<div class="testi-icon">
								<i class="bi bi-quote"></i>
							</div>
						</div>
					</div>
					<!--Testimonial 2-->
					<div class="quote quote-text-4 show" data-ppquote="li-quote-4">
						<div class="pp"></div>
						<p>For those of you hosting this Christmas, read on; it’s time to polish up the cutlery, bring out the china plates and brush up on our top tips on…</p>
						<!-- container info -->
						<div class="container-info">
							<div class="name">Daniel Ward - <span> Customer</span> </div>
							<!-- testi rating  -->
							<div class="testi-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
							<!-- testi-icon -->
							<div class="testi-icon">
								<i class="bi bi-quote"></i>
							</div>
						</div>
					</div>
					<!--Testimonial 3-->
					<div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
						<div class="pp"></div>
						<p>For those of you hosting this Christmas, read on; it’s time to polish up the cutlery, bring out the china plates and brush up on our top tips on…</p>
						<!-- container info -->
						<div class="container-info">
							<div class="name">Mary Lous - <span> Photographer</span> </div>
							<!-- testi rating  -->
							<div class="testi-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
							<!-- testi-icon -->
							<div class="testi-icon">
								<i class="bi bi-quote"></i>
							</div>
						</div>
					</div>
					<!--Testimonial 6-->
					<div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
						<div class="pp"></div>
						<p>For those of you hosting this Christmas, read on; it’s time to polish up the cutlery, bring out the china plates and brush up on our top tips on…</p>
						<!-- container info -->
						<div class="container-info">
							<div class="name">Jenny Parker - <span> Marketing</span> </div>
							<!-- testi rating  -->
							<div class="testi-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
							<!-- testi-icon -->
							<div class="testi-icon">
								<i class="bi bi-quote"></i>
							</div>
						</div>
					</div>
					<!--Testimonial 7-->
					<div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
						<div class="pp"></div>
						<p>For those of you hosting this Christmas, read on; it’s time to polish up the cutlery, bring out the china plates and brush up on our top tips on…</p>
						<!-- container info -->
						<div class="container-info">
							<div class="name">Alan Spider - <span> Art Direction</span> </div>
							<!-- testi rating  -->
							<div class="testi-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
						</div>
						<!-- testi-icon -->
						<div class="testi-icon">
							<i class="bi bi-quote"></i>
						</div>
					</div>
					<!--  -->
					@foreach($feedbacks as $fb)
					<!--Testimonial 0 demo-->
					<div class="quote quote-text-6 hide-bottom" data-ppquote="li-quote-6">
						<div class="pp"></div>
						<p>{{$fb->content}}</p>
						<!-- container info -->
						<div class="container-info">
							<div class="name">{{$fb->customer_name}} - <span> Customer</span> </div>
							<!-- testi rating  -->
							<div class="testi-rating">
								<ul>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
							</div>
							<!-- testi-icon -->
							<div class="testi-icon">
								<i class="bi bi-quote"></i>
							</div>
						</div>
					</div>
					@endforeach
					<!--  -->

				</div>
				<!--Right Bubble Images-->
				<div class="container-pe-quote right">
					<div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
						<div class="img animated bounce"></div>
					</div>
					<div class="pp-quote li-quote-5" data-textquote="quote-text-5">
						<div class="img animated bounce"></div>
					</div>
				</div>
			</section>
			<!-- testi shapes -->
			<div class="setsi-shape">
				<img src="{{asset('main')}}/images/resource/circle.png" alt="">
			</div>
			<div class="setsi-shape2 bounce-animate2">
				<img src="{{asset('main')}}/images/slider/ball2.png" alt="">
			</div>
			<div class="setsi-shape3 bounce-animate">
				<img src="{{asset('main')}}/images/resource/ball2.png" alt="">
			</div>
			<div class="setsi-shape4 bounce-animate4">
				<img src="{{asset('main')}}/images/slider/cross2.png" alt="">
			</div>
			<div class="setsi-shape5 bounce-animate3">
				<img src="{{asset('main')}}/images/slider/cross1.png" alt="">
			</div>
			<div class="setsi-shape6 bounce-animate">
				<img src="{{asset('main')}}/images/resource/ball2.png" alt="">
			</div>
			<div class="setsi-shape7 bounce-animate5">
				<img src="{{asset('main')}}/images/resource/cross3.png" alt="">
			</div>
			<!-- feedback -->
			<div class="setsi-shape8 bounce-animate6">
				<img src="{{asset('main')}}/images/resource/cross3.png" alt="">
			</div>
			<!-- end feedback -->
		</div>
	</div>
</div>
<style>
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container {
  position: relative;
  text-align: center;
  color: back;
  font-size: 40px
}

</style>
<!--==================================================-->
<!-- End print shop Testimonial Section -->
<!--==================================================-->
@endsection