@extends('layout.main.layout')
@section('title', 'AboutUs')
@section('about')
<!--==================================================-->
<!-- Start print shop breatcam section  -->
<!--==================================================-->
<div class="breatcam-section d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breatcam-content text-center">
					<!-- breadcumb title -->
					<div class="breatcam-title">
						<h1>ABOUT US </h1>
					</div>
					<!-- breatcam menu -->
					<div class="breatcam-menu">
						<ul>
							<li><a href="{{url('/')}}"> Home </a></li>
							<li> About </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End print shop breatcam section -->
<!--==================================================--> 

<!--==================================================-->
<!-- Start print shop About Section  -->
<!--==================================================-->
<div class="about-serction style-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6 pl-0 pr-25">
				<div class="about-thumb">
					<img src="{{asset('main')}}//images/resource/about.png" alt="">
					<!-- about shape -->
					<div class="about-shape bounce-animate">
						<img src="{{asset('main')}}//images/resource/ab-shape.png" alt="">
					</div>
				</div>	
			</div>
			<div class="col-lg-6 col-md-6 pl-35 pr-0">
				<div class="print_shop-section-title">
					<h2> ABOUT US</h2>
					<h1> leading Uniform  <span>Manufacturers </span></h1>
					<h1> in the country </h1>
					
				<!-- about check -->
				<div class="about-check">
					<p><i class="bi bi-check-lg"></i> We supply many schools in country and they give them the best uniforms. </p>
				</div>
				<!-- about check -->
				<div class="about-check">
					<p><i class="bi bi-check-lg"></i>  We supply affordable school uniforms for girls and boys </p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End print shop About Section  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start print shop Service Section  -->
<!--==================================================-->
<div class="service-section">
	<div class="container">
		<div class="row service-bg">
			<div class="col-lg-12">
				<div class="print_shop-section-title text-center">
					<h5> WE ARE Professional </h5>
					<h1> Awesome Service For Printing</h1>
					<h1> <span> And Design </span></h1>
					<p>Professionally pursue economically sound services resource sucking potentialities. Authoritat morph with premier catalysts for change awesome services for you. </p>
				</div>
			</div>
			<!-- service shape -->
			<div class="service-shape bounce-animate3">
				<img src="{{asset('main')}}//images/slider/cross2.png" alt="">
			</div>
			<div class="service-shape2 dance2">
				<img src="{{asset('main')}}//images/slider/ball1.png" alt="">
			</div>
			<div class="service-shape3 bounce-animate">
				<img src="{{asset('main')}}//images/slider/cross1.png" alt="">
			</div>
			<div class="service-shape4 bounce-animate">
				<img src="{{asset('main')}}//images/resource/ball1.png" alt="">
			</div>
			<div class="service-shape5 bounce-animate4">
				<img src="{{asset('main')}}//images/resource/ball2.png" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="single-service-box">
					<!-- service icon -->
					<div class="service-icon">
						<img src="{{asset('main')}}//images/resource/service-icon2.png" alt="">
					</div>
					<!-- service content -->
					<div class="service-content">
						<h3>Design & Branding</h3>
						<p>Professionally pursue economically sou services resource sucking pote services for your business. </p>
					</div>
					<!-- service button -->
					<div class="service-button">
						<a href="#"> Read More <i class="bi bi-arrow-right"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-service-box">
					<!-- service icon -->
					<div class="service-icon">
						<img src="{{asset('main')}}//images/resource/service-icon1.png" alt="">
					</div>
					<!-- service content -->
					<div class="service-content">
						<h3>Printing Services</h3>
						<p>Professionally pursue economically sou services resource sucking pote services for your business. </p>
					</div>
					<!-- service button -->
					<div class="service-button">
						<a href="#"> Read More <i class="bi bi-arrow-right"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-service-box">
					<!-- service icon -->
					<div class="service-icon">
						<img src="{{asset('main')}}//images/resource/service-icon3.png" alt="">
					</div>
					<!-- service content -->
					<div class="service-content">
						<h3>3D Printing Service</h3>
						<p>Professionally pursue economically sou services resource sucking pote services for your business. </p>
					</div>
					<!-- service button -->
					<div class="service-button">
						<a href="#"> Read More <i class="bi bi-arrow-right"></i> </a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-service-box">
					<!-- service icon -->
					<div class="service-icon">
						<img src="{{asset('main')}}//images/resource/service-icon4.png" alt="">
					</div>
					<!-- service content -->
					<div class="service-content">
						<h3>Printing Services</h3>
						<p>Professionally pursue economically sou services resource sucking pote services for your business. </p>
					</div>
					<!-- service button -->
					<div class="service-button">
						<a href="#"> Read More <i class="bi bi-arrow-right"></i> </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End print shop Service Section  -->
<!--==================================================-->
@endsection