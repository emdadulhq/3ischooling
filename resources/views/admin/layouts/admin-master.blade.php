<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="3iSchooling : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="3iSchooling : Education HTML Template" />
	<meta property="og:description" content="3iSchooling : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/Logo-2.png') }}" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>3iSchooling @yield('title')</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
	<script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
	<script src="{{ asset('assets/js/respond.min.js') }}"></script>
<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/calendar/fullcalendar.css') }}">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}">
    <!-- DATATABLES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/datatables.min.css') }}">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/shortcodes/shortcodes.css')}}">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dashboard.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.css')}}">

	@stack('styles')


</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
			@include('admin.partials.header')

	<!-- Left sidebar menu start -->
	@include('admin.partials.menubar')

	<!-- Left sidebar menu end -->
    @include('sweetalert::alert')
	<!--Main container start -->
	@yield('content')

	<div class="ttr-overlay"></div>

		<!-- External JavaScripts -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
	<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/vendors/counter/waypoints-min.js') }}"></script>
	<script src="{{ asset('assets/vendors/counter/counterup.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
	<script src="{{ asset('assets/vendors/masonry/masonry.js') }}"></script>
	<script src="{{ asset('assets/vendors/masonry/filter.js') }}"></script>
	<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/vendors/scroll/scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="{{ asset('assets/vendors/chart/chart.min.js') }}"></script>
	<script src="{{ asset('assets/js/admin.js') }}"></script>
	<script src="{{ asset('assets/admin/js/datatables.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/custom.js') }}"></script>
	<script src="{{ asset('assets/vendors/calendar/moment.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/calendar/fullcalendar.js') }}"></script>
	<script src="{{ asset('assets/vendors/switcher/switcher.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@stack('scripts')

</body>


</html>
