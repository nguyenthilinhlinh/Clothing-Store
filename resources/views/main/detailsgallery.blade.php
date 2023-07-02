@extends('layout.main.layout')
@section('title', 'details')
@section('detailsproducts')

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
						<h1> {{$pt->product_name}}</h1>
					</div>
					<!-- breatcam menu -->
					<div class="breatcam-menu">
						<ul>
							<li><a href="{{url('/')}}"> Home </a></li>
							<li> <a href="{{url('/')}}">Gallery</a> </li>
							<li> {{$pt->product_name}}</li>
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
<!-- Start print shop  Section  -->
<!--==================================================-->
<div class="shop-detials">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<!-- / tab -->
				<div class="tab style-three">

					<div class="tab_content">
						@foreach($detailsimg as $img)
						<div class="tabs_item">
							<img src="{{asset('storage/img/'.$img->file_path)}}">
						</div>
						<!-- / tabs_item -->

						@endforeach

						<ul class="tabs">
							@foreach($detailsimg as $img)
							<li><a href="#"><img width="100px" height="100px" src="{{asset('storage/img/'.$img->file_path)}}" alt=""></a></li>
							@endforeach
						</ul>

					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<!-- category title -->
				<div class="category-title">
					<h2>{{$pt -> product_name}}</h2>
				</div>
				<!-- category icon -->
				<div class="category-icon-list">
					<ul>
						<li><i class="bi bi-star-fill"></i></li>
						<li><i class="bi bi-star-fill"></i></li>
						<li><i class="bi bi-star-fill"></i></li>
						<li><i class="bi bi-star-fill"></i></li>
						<li><i class="bi bi-star"></i></li>
						<li class="category-text"> 4.5(10+ Reviews) </li>
					</ul>
				</div>
				<!-- category price -->
				<div class="category-price">
					<h1>{{$pt -> price}}</h1>
				</div>
				<!-- description -->
				<div class="category-description">
					<p>{{$pt -> description}}</p>
					<p>Dramatically reinvent adaptive bandwidth vis reliable infrastructures to the progressively iterate distributed interfaces for client-based. Intrinsicly are a plagiarize one-to-one value after adaptive initiatives via equity invested filds manufactured productsconvergence.
						
					</p>
				</div>
				<!-- category color -->
				<!-- <div class="category-color">
					<p> Colors <span>Black</span></p>
				</div> -->
				<table class="category-table">
					<tr>
						<!-- table data -->
						<td class="table-title"> Categories </td>
						<td class="table-text"> {{$cat->category_name}} </td>
					</tr>
				</table>
				<div class="category-count-button">
					<!-- product count -->
					<!-- product button -->
					<div class="category-button">
						<a href="{{url('/contact')}}">Contact Us <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
				<!-- category table -->
				 <!-- category table End -->
			</div>
			<div class="col-lg-12">
				<div class="appoinment-tab">
					<!-- / tab -->
					<div class="tab">
						<!-- / tabs -->
						<ul class="tabs">
							<li><a href="#">Description</a></li>
							<li><a href="#">Review (2)</a></li>
						</ul>
						<div class="tab_content">
							<!-- / tabs_item -->
							<div class="tabs_item">
								<!-- post comment -->
								<div class="post-comment-description">
									<p>{{$pt -> description}}</p>
									<!-- <p>Leverage existing competitive e-tailers for clicks-and-mortar materials. Continually pursue long-term high-impact innovation vis-a-vis low high-yield markets. Efficiently incentiv superior infrastructures without future-proof communities. Credibly whiteboard transparent resources before distinctive alignments. Progressively scale plug-and meta-services whereas standardized niches. Globally incentivize effective e-markets via intuitive architectures. Compellingly facilitate next-generation experiences vis-a-vis business core are in competencies. Globally enable synergistic platforms rather than high-payoff convergence. Progressively enhance low-risk high-yield scenarios without 24/365 imperatives. Top compellingly incentivize out-of-the-box</p>
									<p class="pt-2">Meta-services whereas standardized niches. Globally incentivize effective e-markets via intuitive architectures. Compellingly facilitate next-generation experiences vis-a-vis business core are in competencies. Globally enable synergistic platforms rather than high-payoff convergence. Progressively enhance low-risk high-yield scenarios without 24/365 imperatives. Top compellingly incentivize out-of-the-box convergence for synergistic benefits.</p> -->
								</div>
							</div>
							<!-- / tabs_item -->
							
							<!-- / tabs_item -->
							<div class="tabs_item">
								<!-- post comment -->
								<div class="post-comment">
									<div class="post-comment-thumb">
										<a href="blog-details.html"><img src="assets/images/resource/test5.png" alt=""></a>
									</div>
									<!-- comment icon -->
									<div class="comment-icon-list">
										<ul>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star-fill"></i></li>
											<li><i class="bi bi-star"></i></li>
										</ul>
									</div>
									<div class="post-title">
										<h4>David Alexon <span class="left-date">October 01, 2022</span></h4>
									</div>
									<div class="posts-reply">
										<p>Appropriately syndicate integrated niches with virtual methods of emporeffective process improvements with high.</p>
										<span class="rights-reply"> <i class="bi bi-reply-fill"></i>Reply</span>
									</div>
								</div>
								<div class="product-details-respond">
									<div class="contact-form-box">
										<!-- sidebar title -->
										<div class="sidebar-title">
											<h2>Add a Review</h2>
										</div>
										<!-- sidebar description -->
										<div class="sidebar-description">
											<p>Your email address will not be published. Required fields are marked *</p>
										</div>
										<div class="sidebar-rating-list">
											<P class="sidebar-text">Your Ratings</P>
											<ul>
												<li><i class="bi bi-star"></i></li>
												<li><i class="bi bi-star"></i></li>
												<li><i class="bi bi-star"></i></li>
												<li><i class="bi bi-star"></i></li>
												<li><i class="bi bi-star"></i></li>
											</ul>
										</div>
										<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
											<div class="row">
												<div class="col-lg-6">
													<div class="from-box">
														<p class="form_text">Name*</p>
														<input type="text" placeholder="Full Name*">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="from-box">
														<p class="form_text">E-Mail*</p>
														<input type="text" placeholder="Enter E-Mail">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="from-box">
														<p class="form_text">Comment</p>
														<textarea name="massage" id="massage" cols="30" rows="10" placeholder="Write Comment"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="contact-form">
														<button type="submit"> Submit Now </button>
													</div>
												</div>
											</div>
										</form>
										<div id="status"></div>
									</div>
								</div>
							</div>
						</div> <!-- / tab_content -->
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="product-item-title">
					<h2>Related Products</h2>
				</div>
			</div>
			@foreach($relate as $r)
			<div class="col-lg-3 col-md-6">
				<div class="shop-single-box">
					<div class="shop-box-inner1">
						<!-- shop thumb -->
						<div class="shop-thumb">
							<img src="{{asset('storage/img/'.$r->images)}}" alt="">
							<!-- add to card -->
							<div class="shop-card">
								<a href="{{url('/details/'.$r->id)}}">Details</a>
							</div>
						</div>
						<!-- SHOP content -->
						<div class="shop-content">
							<!-- shop title -->
							<div class="shop-title">
								<h4>{{$r->product_name}}</h4>
								<h6>{{$r->price}}</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
</div>
<!--==================================================-->
<!-- End print shop  Section -->
<!--==================================================-->
<!--==================================================-->
@endsection