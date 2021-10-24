@extends('3i_school.layouts.master')

@section('title')
Job & Career 
@stop

@section('content')
<div class="container pb-3">
	<h1 class="text-center  sub-title position-relative onwhitetitle pb-3">Job & Career</h1>
	<div class="row">
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">Job Assesments</h2>
			<p>
				Job Assesments.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">Contains Assesments</li>
			</ul>
			<p>
				Mock Heading.
			</p>

			<a  class="readon" href="{{ route('60_minutes.quiz') }}u"> Job Assesments <i class="flaticon flaticon-right-arrow"></i></a>
		</div>
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">Career Assesments</h2>
			<p>
				Career Assesments.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">Contains Assesments</li>
			</ul>
			<p>
				Mock Heading.
			</p>

			<a  class="readon" href="{{ route('60_minutes.quiz') }}u">Career Assesments<i class="flaticon flaticon-right-arrow"></i></a>
		</div>
		<p></p>
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">Career Counselling</h2>
			<p>
				Career Counselling.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">We offer career counselling</li>
			</ul>
			<p>
				Mock Heading.
			</p>

			<a  class="readon" href="{{ route('60_minutes.quiz') }}u">Career Counselling<i class="flaticon flaticon-right-arrow"></i></a>
		</div>
	</div>


</div>



@stop
