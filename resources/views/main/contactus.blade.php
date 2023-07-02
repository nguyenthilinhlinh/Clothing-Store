@extends('layout.main.layout')
@section('title', 'Contact Us')
@section('contactus')
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
						<h1> Contact Us </h1>
					</div>
					<!-- breatcam menu -->
					<div class="breatcam-menu">
						<ul>
							<li><a href="{{url('/')}}"> Home </a></li>
							<li> Contact </li>
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

<!-- Contact 1 -->

<div class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="contact-us">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="print_shop-section-title text-center mb-60">
									<h3> Contact Form </h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="contact_from_box">
									<form id="contact_form" action="{{url('/contactform')}}" method="POST" id="dreamit-form">
										@csrf
										@method('PUT')
										<div class="row">
											<div class="col-lg-6">
												<div class="form_box mb-30">
													<input type="text" name="name" placeholder="Name:">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form_box  mb-30">
													<input type="text" name="phone" placeholder="Phone Number:">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form_box mb-30">
													<input type="text" name="email" placeholder="Email:">
												</div>
											</div>

											<div class="col-lg-12">
												<div class="form_box mb-30">
													<input type="text" name="subject" placeholder="Subject:">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="form_box mb-30">
													<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
												</div>
											</div>
										</div>
										<div class="contact-form">
											<button type="submit"> Contact Us <i class="bi bi-arrow-right"></i> </button>
										</div>
									</form>
									<div id="status"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 ">
				<div class="address-contact">
					<h1>Maverick Dresses</h1>
					</br>
					<span>Maverick Dresses is leading Uniform Manufacturers in the country. They supply many schools in country and they give them the best uniforms. They supply affordable school uniforms for girls and boys. When clients come, they cater to client’s vision. As a team of professionals they understand what clients want and deliver the best results.</span>
					</br>
					</br>
					<p><b><i class="bi bi-telephone-fill"></i> Phone: </b><a href="tel:800.123.4567">800.123.4567</a></p>
					<p><b><i class="bi bi-envelope-fill"></i> Email: </b><a href="mailto:www.@example.com">www.@example.com</a> </p>
					<p><a href="#localmap"><b><i class="bi bi-geo-alt-fill"></i> Address: </b>A26BT5 Building, SilverC Street, London, England.</a></p>
					<p></p>
				</div>
				<div class="branch-map">
					<div class="branch">
						<h3>Branch 1 - Main</h3>
						<p><a href="#localmap"><b><i class="bi bi-geo-alt-fill"></i> Address 1: </b>A26BT5 Building, SilverC Street, London, England.</a></p>
						<p><a href="tel:800.123.4567"><b><i class="bi bi-telephone-fill"></i> Phone 1: </b>800.123.4567</a></p>
						<p><b><i class="bi bi-clock-fill"></i> Hour: </b>8a.m - 6p.m <button class="btn-map" type="button" onclick="myMapIcon1()">Map <i class="bi bi-caret-down-fill"></i></button></p>
						<div class="map-section" id="localmap_branch1">
							<div class="container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.3859273384383!2d-0.07452360000000001!3d51.6161393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xebf75f47ab53a09a!2sSilver%20Street(101)%20Post%20Office!5e0!3m2!1svi!2s!4v1676036149208!5m2!1svi!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
					<div class="branch">
						<h3>Branch 2</h3>
						<p><a href="#localmap"><b><i class="bi bi-geo-alt-fill"></i> Address 2: </b>A26BT5 Building, SilverC Street, London, England.</a></p>
						<p><a href="tel:800.123.4567"><b><i class="bi bi-telephone-fill"></i> Phone 2: </b>800.123.4567</a></p>
						<p><b><i class="bi bi-clock-fill"></i> Hour: </b>8a.m - 6p.m <button class="btn-map" type="button" onclick="myMapIcon2()">Map <i class="bi bi-caret-down-fill"></i></button></p>
						<div class="map-section" id="localmap_branch2">
							<div class="container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.3859273384383!2d-0.07452360000000001!3d51.6161393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xebf75f47ab53a09a!2sSilver%20Street(101)%20Post%20Office!5e0!3m2!1svi!2s!4v1676036149208!5m2!1svi!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
					<div class="branch">
						<h3>Branch 3</h3>
						<p><a href="#localmap"><b><i class="bi bi-geo-alt-fill"></i> Address 3: </b>A26BT5 Building, SilverC Street, London, England.</a></p>
						<p><a href="tel:800.123.4567"><b><i class="bi bi-telephone-fill"></i> Phone 3: </b>800.123.4567</a></p>
						<p><b><i class="bi bi-clock-fill"></i> Hour: </b>8a.m - 6p.m <button class="btn-map" type="button" onclick="myMapIcon3()">Map <i class="bi bi-caret-down-fill"></i></button></p>
						<div class="map-section" id="localmap_branch3">
							<div class="container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.3859273384383!2d-0.07452360000000001!3d51.6161393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xebf75f47ab53a09a!2sSilver%20Street(101)%20Post%20Office!5e0!3m2!1svi!2s!4v1676036149208!5m2!1svi!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
					<div class="branch">
						<h3>Branch 4</h3>
						<p><a href="#localmap"><b><i class="bi bi-geo-alt-fill"></i> Address 4: </b>A26BT5 Building, SilverC Street, London, England.</a></p>
						<p><a href="tel:800.123.4567"><b><i class="bi bi-telephone-fill"></i> Phone 4: </b>800.123.4567</a></p>
						<p><b><i class="bi bi-clock-fill"></i> Hour: </b>8a.m - 6p.m <button class="btn-map" type="button" onclick="myMapIcon4()">Map <i class="bi bi-caret-down-fill"></i></button></p>
						<div class="map-section" id="localmap_branch4">
							<div class="container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.3859273384383!2d-0.07452360000000001!3d51.6161393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xebf75f47ab53a09a!2sSilver%20Street(101)%20Post%20Office!5e0!3m2!1svi!2s!4v1676036149208!5m2!1svi!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
					<div class="branch">
						<h3>Branch 5</h3>
						<p><a href="#localmap"><b><i class="bi bi-geo-alt-fill"></i> Address 5: </b>A26BT5 Building, SilverC Street, London, England.</a></p>
						<p><a href="tel:800.123.4567"><b><i class="bi bi-telephone-fill"></i> Phone 5: </b>800.123.4567</a></p>
						<p><b><i class="bi bi-clock-fill"></i> Hour: </b>8a.m - 6p.m <button class="btn-map" type="button" onclick="myMapIcon5()">Map <i class="bi bi-caret-down-fill"></i></button></p>
						<div class="map-section" id="localmap_branch5">
							<div class="container">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.3859273384383!2d-0.07452360000000001!3d51.6161393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xebf75f47ab53a09a!2sSilver%20Street(101)%20Post%20Office!5e0!3m2!1svi!2s!4v1676036149208!5m2!1svi!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- End Contact 1 -->
@endsection