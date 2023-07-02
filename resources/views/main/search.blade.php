@extends('layout.main.layout')
@section('search')
    <section class="section">
        <!-- tab content -->
					<div class="tab_content">
						<!-- / tabs_item -->
						<div class="tabs_item">
							<div class="row">
								@foreach($categories as $ct)
								<div class="col-lg-3 col-md-6">
									<div class="shop-single-box">
										<div class="shop-box-inner">
											<!-- shop thumb -->
											<div class="shop-thumb">
												<a href="{{url('/.$ct->img_category')}}">
													<img class="img_h360_w100" src="{{asset('main/images/resource/'.$ct->img_category)}}" alt="">
													<!-- buy -->
													<div class="shop-card">
														<a href="{{url('/shirts')}}"><i class="bi bi-suit-heart"> </i> Details</a>
														<!-- <a href="{{url('/shirts')}}">buy</a> -->
													</div>
												</a>
											</div>
											<!-- SHOP content -->
											<div class="shop-content">
												<!-- shop social list -->
												<!-- <div class="shop-social-list">
													<ul>
														<li><a href="shop-details.html"><i class="bi bi-suit-heart"></i></a></li>
														<li><a href="shop-details.html"><i class="bi bi-cart3"></i></a></li>

													</ul>
												</div> -->
												<!-- shop title -->
												<div class="shop-title">
													<h4> {{$ct->category_name}} </h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
    </section>
@endsection