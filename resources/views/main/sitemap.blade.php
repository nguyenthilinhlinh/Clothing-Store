@extends('layout.main.layout')
@section('title', 'Site Map')
@section('sitemap')
<!-- Start print shop breatcam section  -->
<!--==================================================-->
<div class="breatcam-section d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breatcam-content text-center">
					<!-- breadcumb title -->
					<div class="breatcam-title">
						<h1> Site Map </h1>
					</div>
					<!-- breatcam menu -->
					<div class="breatcam-menu">
						<ul>
							<li><a href="{{url('/')}}"> Home </a></li>
							<li> Sitemap </li>
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
<!-- Start print shop Team Section  -->
<!--==================================================-->
<div class="sitemap-section">
	<div class="container">
		<div class="print_shop-section-title">
			<div class="row col-12">
				<!--  -->
				<div class="col w-50 sitemap-size">
					<ul class="border-bottom ">
						<li class="border-bottom "><a href="{{url('/')}}"><i class="bi bi-caret-right-fill"></i> Home</a>
							<ul class="sitemap-tab">
								<li class=" border-top border-bottom"><a href="#"><i class="bi bi-caret-right"></i> Gallery</a></li>
								<li class=" border-bottom "><a href="{{url('/feedback')}}"><i class="bi bi-caret-right"></i> Feedback</a></li>
								<li class="  border-bottom"><a class="" href="{{url('/about')}}"><i class="bi bi-caret-right"></i> About Us</a></li>
								<li class="  border-bottom"><a href="{{url('/contact')}}"><i class="bi bi-caret-right"></i> Contact Us</a></li>
							</ul>
						</li>
						<li class=" "><a href="#"><i class="bi bi-caret-right-fill"></i> Gallery</a>
							<ul class="sitemap-tab">
								<li class=" border-top border-bottom"><a href="{{url('gallery/shirts')}}"><i class="bi bi-caret-right"></i> Shirts</a></li>
								<li class=" border-bottom "><a href="{{url('gallery/skirts')}}"><i class="bi bi-caret-right"></i> Skirts</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/t_shirts')}}"><i class="bi bi-caret-right"></i> T_Shirts</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/pt_shorts')}}"><i class="bi bi-caret-right"></i> PT Shorts</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/pt_tragallery')}}"><i class="bi bi-caret-right"></i> PT Track Pants</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/belts')}}"><i class="bi bi-caret-right"></i> Belts</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/ties')}}"><i class="bi bi-caret-right"></i> Ties</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/logos')}}"><i class="bi bi-caret-right"></i> Logos</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/socks')}}"><i class="bi bi-caret-right"></i> Socks</a></li>
								<li class="  border-bottom"><a href="{{url('gallery/frocks')}}"><i class="bi bi-caret-right"></i> Frocks</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col w-50 sitemap-size">
					<ul class="">
						<li class=" border-bottom "><a href="{{url('/feedback')}}"><i class="bi bi-caret-right-fill"></i> Feedback</a></li>
						<li class=""><a class="" href="{{url('/about')}}"><i class="bi bi-caret-right-fill"></i> About Us</a>
							<ul class="sitemap-tab">
								<li class="border-top border-bottom "><a href="{{url('/about')}}"><i class="bi bi-caret-right"></i> About Us</a></li>
								<li class=" border-bottom "><a href="{{url('/sitemap')}}"><i class="bi bi-caret-right"></i> Sitemap</a></li>
							</ul>
						</li>
						<li class=" border-bottom "><a href="{{url('/contact')}}"><i class="bi bi-caret-right-fill"></i> Contact Us</a></li>
					</ul>
				</div>
				<!--  -->
				<!-- <div class="col w-50">
					<ul class="list-group ">
						<li class="list-group-item list-group-item-action"><a href="{{url('/')}}">Home</a></li>
						<li class="list-group-item list-group-item-action"><a href="#">Gallery</a>
							<ul class="list-group list-group-numbered">
								<li class="list-group-item list-group-item-action"><a href="{{url('gallery/shirts')}}">Shirts</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/skirts')}}">Skirts</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/t_shirts')}}">T_Shirts</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/pt_shorts')}}">PT Shorts</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/pt_tragallery')}}">PT Track Pants</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/belts')}}">Belts</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/ties')}}">Ties</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/logos')}}">Logos</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/socks')}}">Socks</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('gallery/frocks')}}">Frocks</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col w-50">
					<ul class="list-group ">
						<li class="list-group-item list-group-item-action "><a href="{{url('/feedback')}}">Feedback</a></li>
						<li class="list-group-item list-group-item-action "><a class="" href="{{url('/about')}}">About Us</a>
							<ul class="list-group list-group-numbered">
								<li class="list-group-item list-group-item-action "><a href="{{url('/about')}}">About Us</a></li>
								<li class="list-group-item list-group-item-action "><a href="{{url('/sitemap')}}">Sitemap</a></li>
							</ul>
						</li>
						<li class="list-group-item list-group-item-action "><a href="{{url('/contact')}}">Contact Us</a></li>
					</ul>
				</div> -->
				<!--  -->
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End print shop Team Section -->
<!--==================================================-->

@endsection