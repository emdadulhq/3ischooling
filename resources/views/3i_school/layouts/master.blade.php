<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<meta name="description" content="">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('3i_school') }}/assets/images/logo.png">
	<!-- Bootstrap v4.4.1 css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/font-awesome.min.css">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/animate.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/owl.carousel.css">
	<!-- off canvas css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/off-canvas.css">
	<!-- flaticon css  -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/fonts/flaticon.css">
	<!-- Main Menu css -->
	<link rel="stylesheet" href="{{ asset('3i_school') }}/assets/css/scmenu-main.css">
	<!-- spacing css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/sc-spacing.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/style.css">
	<!-- This stylesheet dynamically changed from style.less -->
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/responsive.css">

	@stack('styles')

	<!--[Text Sliider]><![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<!--[Text Sliider]><![endif]-->

	<title> 3i Schooling -  @yield('title')</title>

</head>
<body class="defult-home">

	<!--Preloader area start here-->
	<!-- <section class="loader_first">
		<div class="circular-spinner"></div>
	</section> -->
	<!--Preloader area End here-->


	<!--Full width header Start-->
	<div class="full-width-header header-style1 home1-modifiy">

		<!--Header Start-->
		@include('3i_school.partials.header')
		<!--Header End-->

	</div>
	<!--Full width header End-->

	@yield('content')

	<!-- Footer Secton Start -->
	@include('3i_school.partials.footer')
	<!-- Footer Secton End -->

	<!-- start scrollUp  -->
	<div id="scrollUp">
		<i class="fa fa-angle-up"></i>
	</div>
	<!-- End scrollUp  -->

	<!-- Search Modal Start -->
	<div aria-hidden="true" id="search-modal" class="modal fade search-modal" role="dialog" tabindex="-1">

		<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			<i class="flaticon-close"></i>
		</button>


		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="search-block clearfix">
					<form>
						<div class="form-group">
							<input class="form-control" placeholder="Search Here..." type="text">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Search Modal End -->

	<!-- Text Slider -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="{{ asset('3i_school') }}/assets/js/text_slider.js"></script>

	<!-- modernizr js -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>
	<!-- jquery latest version -->
	<script src="{{ asset('3i_school') }}/assets/js/jquery.min.js"></script>
	<!-- Bootstrap v4.4.1 js -->
	<script src="{{ asset('3i_school') }}/assets/js/bootstrap.min.js"></script>
	<!-- Menu js -->
	<script src="{{ asset('3i_school') }}/assets/js/scmenu-main.js"></script>
	<!-- owl.carousel js -->
	<script src="{{ asset('3i_school') }}/assets/js/owl.carousel.min.js"></script>
	<!-- isotope.pkgd.min js -->
	<script src="{{ asset('3i_school') }}/assets/js/isotope.pkgd.min.js"></script>
	<!-- imagesloaded.pkgd.min js -->
	<script src="{{ asset('3i_school') }}/assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- wow js -->
	<script src="{{ asset('3i_school') }}/assets/js/wow.min.js"></script>
	<script src="{{ asset('3i_school') }}/assets/js/jquery.counterup.min.js"></script>
	<!-- counter top js -->
	<script src="{{ asset('3i_school') }}/assets/js/waypoints.min.js"></script>
	<!-- plugins js -->
	<script src="{{ asset('3i_school') }}/assets/js/plugins.js"></script>
	<!-- contact form js -->
	<script src="{{ asset('3i_school') }}/assets/js/contact.form.js"></script>
	<!-- main js -->
	<script src="{{ asset('3i_school') }}/assets/js/main.js"></script>
	<script src="{{ asset('3i_school') }}/assets/js/script1.js"></script>
	<script src="{{ asset('3i_school') }}/assets/js/script.js"></script>

	{{-- <script type="text/javascript">
				$(document).ready(function () {

		    //Disable cut copy paste

		    $(document).bind('cut copy paste', function (e) {

		        e.preventDefault();

		    });

		    //Disable mouse right click

		    $(document).on("contextmenu",function(e){

		        return false;

		    });

		});
	</script> --}}

	@stack('scripts')

</body>


</html>
