<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title') | Maverick Dresses</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="vendor/swiper/swiper.min.css"> -->
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('main')}}/images/fav-icon/logo1.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/owl.carousel.min.css" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/animate.css" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/animated-text.css" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/all.min.css" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/theme-default.css" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/meanmenu.min.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/style.css" type="text/css" media="all" />
	<!-- Admin Style CSS -->
	<link rel="stylesheet" href="{{asset('admin')}}/css/style.admin.css" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/owl.transitions.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/venobox/venobox.css" type="text/css" media="all" />
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{asset('main')}}/css/responsive.css" type="text/css" media="all" />
	<!-- modernizr js -->
	<script src="{{asset('main')}}/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{asset('main')}}/cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">

</head>

<body class="bodymain">
	@include('layout.main.header')

	@yield('search')
	@yield('gallery')
	<!-- About Us -->
	@yield('about')
	<!-- company -->
	@yield('login')

	<!-- company register -->
	@yield('register')

	<!-- sitemap -->
	@yield('sitemap')

	<!-- Details Product -->
	@yield('detailsproducts')

	<!-- Contact Us -->
	@yield('contactus')


	<!-- Infor Shop  -->
	@yield('infor')

	<!-- Portfolio -->
	@yield('portfolio')
	<!--==================================================-->
	<!-- feedback -->
	@yield('feedback')
	<!-- testimonial -->
	@yield('testimonial')
	<!--==================================================-->
	<!-- demand section -->
	@yield('demand')

	<!--==================================================-->

	<!--==================================================-->
	<!-- Start print shop Blog Section  -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- End print shop Blog Section -->
	<!--==================================================-->

	<!-- Footer -->
	@include('layout.main.footer')
	<!--==================================================-->
	<!-- Start scrollup section  -->
	<!--==================================================-->
	<!-- scrollup section -->
	<div class="scroll-area">
		<div class="top-wrap">
			<div class="go-top-btn-wraper">
				<div class="go-top go-top-button">
					<i class="fas fa-arrow-up"></i>
					<i class="fas fa-arrow-up"></i>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- Start scrollup section Area -->
	<!--==================================================-->

	<!-- jquery js -->
	<script src="{{asset('main')}}/js/vendor/jquery-3.6.2.min.js"></script>
	<script src="{{asset('main')}}/js/vendor/jquery.custom.js"></script>
	<!-- vedox js -->
	<script src="{{asset('main')}}/vendor/jquery/jquery.validate.min.js"></script>
	<script src="{{asset('main')}}/vendor/swiper/swiper.min.js"></script>
	<!-- bootstrap js -->
	<script src="{{asset('main')}}/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script src="{{asset('main')}}/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script src="{{asset('main')}}/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script src="{{asset('main')}}/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script src="{{asset('main')}}/js/wow.js"></script>
	<!-- venobox js -->
	<script src="{{asset('main')}}/venobox/venobox.js"></script>
	<!-- ajax mail js -->
	<script src="{{asset('main')}}/js/ajax-mail.js"></script>
	<!--  animated-text js -->
	<script src="{{asset('main')}}/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script src="{{asset('main')}}/venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script src="{{asset('main')}}/js/isotope.pkgd.min.js"></script>
	<!-- jquery meanmenu js -->
	<script src="{{asset('main')}}/js/jquery.meanmenu.js"></script>
	<!-- jquery scrollup js -->
	<script src="{{asset('main')}}/js/jquery.scrollUp.js"></script>
	<!-- theme js -->
	<script src="{{asset('main')}}/js/theme.js"></script>
	<!-- visitor js -->
	<script src="{{asset('main')}}/js/visitor.js"></script>
	<!-- testimonial js -->
	<script src="{{asset('main')}}/js/testimonial.js"></script>
	<!-- scrolling.js -->
	<script src="{{asset('main')}}/js/scrolling.js"></script>
	<script type="text/javascript">
            $('#search').on('keyup',function(){
                $value = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to("search") }}',
                    data: {
                        'search': $value
                    },
                    success:function(data){
                        $('tbody').html(data);
                    }
                });
            })
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
</body>

<!-- Mirrored from html.dreamitsolution.net/print-king/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 03:36:34 GMT -->

</html>