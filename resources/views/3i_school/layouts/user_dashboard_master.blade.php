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
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/profile_dashboard.css">
	<!--[Text Sliider]><![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<!--[Text Sliider]><![endif]-->

	<title> 3i Schooling -  @yield('title')</title>

</head>
<body class="defult-home">

	<!--Preloader area start here-->
	{{-- <section class="loader_first">
		<div class="circular-spinner"></div>
	</section> --}}
	<!--Preloader area End here-->


	<!--Full width header Start-->
	<div class="full-width-header header-style1 home1-modifiy">

		<!--Header Start-->
		@include('3i_school.partials.header')
		<!--Header End-->

	</div>
	<!--Full width header End-->
	
<!-- Sidebar -->
<!-- partial:index.partial.html -->
<div class="page-wrapper chiller-theme toggled mb-5">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">3i Schooling</a>
        <div id="close-sidebar">
          <i class="fa fa-window-close"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
         @if (File::exists(public_path("media/users/".Auth::user()-> photo||null)))
                <a href="profilemenu"> <img class="img-responsive img-rounded" src="{{ asset('media/users/' . Auth::user()-> photo) }}" alt="User picture"></a>
                @else
                <a href="profilemenu"> <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture"></a>
                @endif
        </div>
        <div class="user-info">
          <span class="user-name"> {{Auth::user()-> name}}
          </span>
          {{-- <span class="user-role">Administrator</span> --}}
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Dashboard</span>

            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="profilemenu">User Profile
                  </a>
                </li>
                <li>
                  <a href="profilesettings">Change General Information</a>
                </li>
                <li>
                  <a href="profilesettingsadditional">Change Additional Information
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-money"></i>
              <span>Transaction</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Add Currency</a>
                </li>
                <li>
                  <a href="#">View Available Currency</a>
                </li>
                <li>
                  <a href="#">View Previous Transactions</a>
                </li>

              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-arrow-left"></i>
              <span>Previous Results</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="profilepreviousresult">15 Minutes Quiz</a>
                </li>
                <li>
                  <a href="#">All Quiz</a>
                </li>

              </ul>
            </div>
          </li>
          <li class="">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Social Platform</span>
            </a>

          </li>
         <li class="header-menu">
            <span>Our Services</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Consultation</span>

            </a>
          </li>
          <li>
            <a href="{{route('admin.minquiz')}}">
              <i class="fa fa-folder"></i>
              <span>Take A Quiz!</span>
            </a>
          </li>
          <li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">




                <i class="fa fa-sign-out"></i>
                <span>Sign Out</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">



	
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script>



<script type="text/javascript">
  $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
</script>
	@stack('scripts')

</body>


</html>
