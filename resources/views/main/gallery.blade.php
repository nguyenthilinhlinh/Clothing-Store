@extends('layout.main.gallerylayout')
@section('title', $category_name)
@section('products')
<!--==================================================-->
<!-- Start print shop  Section  -->
<!--==================================================-->
<div class="tab_content">
	<div class="tabs_item1">
		<div class="row">
			@foreach($items as $item)
			<div class="col-lg-3 col-md-6">
				<div class="shop-single-box">
					<div class="shop-box-inner">
						<!-- shop thumb -->
						<div class="shop-thumb">
							<img width="200px"; height="310px" src="{{asset('storage/img/'.$item->images)}}" alt="">
							<!-- add to card -->
							<div class="shop-card">
								<a href="{{url('/details/'.$item->id)}}">Details</a>
							</div>
						</div>
						<!-- SHOP content -->
						<div class="shop-content">
							<!-- shop title -->
							<div class="shop-title">
								<h4>{{$item->product_name}} </h4>
								<p>{{$item->price}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<!--  -->
	<div class="tabs_item">
		<div class="row">
			@foreach($items as $item)
			<div class="col-lg-12">
				<div class="shop-details-single-box">
					<div class="shop-box-inner">
						<!-- shop thumb -->
						<div class="shop-thumbs">
							<img src="{{asset('storage/img/'.$item->images)}}" alt="">
						</div>
						<!-- SHOP content -->
						<div class="shop-content1">
							<!-- shop title -->
							<div class="shop-title">
								<h4> {{$item->product_name}} </h4>
								<h6>{{$item->price}}</h6>
							</div>
							<!-- shop description -->
							<div class="shop-description">
								<p>{{$item->description}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End print shop  Section -->
<!--==================================================-->
<!--==================================================-->
@endsection