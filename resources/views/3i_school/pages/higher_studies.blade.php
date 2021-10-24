@extends('3i_school.layouts.master')

@section('title')
	E-Learning Higher Studies
@stop

@push('styles')

@endpush

@section('content')

	<!-- Main content Start -->
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6">
				<img src="{{ asset('3i_school') }}/img/HigherStudies/ielts.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
				<h2 class="title mb-0 position-relative onwhitetitle">Career Counselling</h2>

				<p>Choosing a field of study or career is one of those nerve-wrecking, major decisions that mould the rest of your life. So, rest assured, almost everyone feels some sense of fear and confusion. What if all students received some expert help that gave them clarity and a more distinct objective?</p>

				<ul class="check-square  mb-20 ">
					<li><a class="onwhite" href="">In Person</a></li>
					<li><a class="onwhite" href="">Online</a></li>
				</ul>

				<a  class="readon" href="{{route('careercounselling')}}">Career Councelling  <i class="flaticon flaticon-right-arrow"></i></a>
			</div>
			<div class="col-12 col-sm-6">
				<img src="{{ asset('3i_school') }}/img/HigherStudies/ielts.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
				<h2 class="title mb-0 position-relative onwhitetitle">IELTS</h2>

				<p>The International English Language Testing System, or IELTS, is an international standardized test of English language proficiency for non-native English language speakers. It is jointly managed by the British Council, IDP: IELTS Australia and Cambridge Assessment English, and was established in 1989.</p>

				<ul class="check-square  mb-20 ">
					<li><a class="onwhite" href="">Listening</a></li>
					<li><a class="onwhite" href="">Speaking</a></li>
					<li><a class="onwhite" href="">Reading</a></li>
					<li><a class="onwhite" href="">Writting</a></li>
				</ul>

				<a  class="readon" href="{{route('ielts')}}">IELTS  <i class="flaticon flaticon-right-arrow"></i></a>
			</div>

			<div class="col-12 col-sm-6">
				<img src="{{ asset('3i_school') }}/img/HigherStudies/gre.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
				<h2 class="title mb-0 position-relative onwhitetitle">GRE</h2>
				<p>The Graduate Record Examinations is a standardized test that is an admissions requirement for many graduate schools in the United States and Canada and few in other countries. The GRE is owned and administered by Educational Testing Service.</p>

				<ul class="check-square  mb-20 ">
					<li><a class="onwhite" href="">Analytical Writing Section</a></li>
					<li><a class="onwhite" href="">Verbal Reasoning Section</a></li>
					<li><a class="onwhite" href="">Quantitative Reasoning Section</a></li>

				</ul>
				<a  class="readon" href="{{route('gre')}}">GRE<i class="flaticon flaticon-right-arrow"></i></a>
			</div>

			<div class="col-12 col-sm-6">
				<img src="{{ asset('3i_school') }}/img/HigherStudies/aptitude.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
				<h2 class="title mb-0 position-relative onwhitetitle">Aptitude Test</h2>
				<p>An aptitude test is an exam used to determine an individual's skill or propensity to succeed in a given activity. Aptitude tests assume that individuals have inherent strengths and weaknesses, and have a natural inclination toward success or failure in specific areas based on their innate characteristics.</p>

				<ul class="check-square  mb-20 ">
					<li><a class="onwhite" href="">Analytical Writing Section</a></li>
					<li><a class="onwhite" href="">Verbal Reasoning Section</a></li>
					<li><a class="onwhite" href="">Quantitative Reasoning Section</a></li>

				</ul>
				<a  class="readon" href="{{route('aptitude')}}">Aptitude Test<i class="flaticon flaticon-right-arrow"></i></a>
			</div>

			<div class="col-12 col-sm-6">
				<img src="{{ asset('3i_school') }}/img/HigherStudies/consultation.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
				<h2 class="title mb-0 position-relative onwhitetitle">Consultation</h2>
				<p>3i School is committed towards providing impeccable services to students and helping them realize their dream of studying abroad. With the same intent, our Dhaka Center is committed to provide best in class career counselling and assistance to cater to the needs of aspirants aiming to build a successful career overseas. We provide end-to-end assistance to students and help them get into the ideal university according to their profile. Our trained team of professionals is dedicated towards reaching new pinnacles of success and creating more success stories.</p>

				<ul class="check-square  mb-20 ">
					<li><a class="onwhite" href="">USA</a></li>
					<li><a class="onwhite" href="">Canada</a></li>
					<li><a class="onwhite" href="">Germany</a></li>
					<li><a class="onwhite" href="">See More</a></li>
				</ul>
				<a  class="readon" href="{{route('consultation')}}">Consultation<i class="flaticon flaticon-right-arrow"></i></a>
			</div>
		</div>
	</div>
	<!-- Main content End -->

@stop


