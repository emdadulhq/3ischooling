@extends('3i_school.layouts.master')

@section('title')
Job Preparation
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">CSE Job Assesments</h2>
			<p>
				CSE Job Assesments.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">Contains 20 Questions</li>
				<li class="onwhite">Time limits - 20 minutes</li>
			</ul>
			<p>
				Mock Heading.
			</p>

			<a  class="readon" href="{{ route('60_minutes.quiz') }}u">CSE Job Assesments <i class="flaticon flaticon-right-arrow"></i></a>
		</div>
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">EEE Job Assesments</h2>
			<p>
				EEE Job Assesments.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">Contains 20 Questions</li>
				<li class="onwhite">Time limits - 20 minutes</li>
			</ul>
			<p>
				Mock Heading.
			</p>

			<a  class="readon" href="{{ route('60_minutes.quiz') }}u">EEE Job Assesments<i class="flaticon flaticon-right-arrow"></i></a>
		</div>
		<p></p>
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">Bank Job Assesments</h2>
			<p>
				CSE Job Assesments.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">Contains 60 Questions</li>
				<li class="onwhite">Time limits - 60 minutes</li>
			</ul>
			<p>
				Mock Heading.
			</p>

			<a  class="readon" href="{{ route('60_minutes.quiz') }}u">Bank Job Assesments<i class="flaticon flaticon-right-arrow"></i></a>
		</div>
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">BCS Assesments</h2>
			<p>
				EEE Job Assesments.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">Contains 60 Questions</li>
				<li class="onwhite">Time limits - 60 minutes</li>
			</ul>
			<p>
				Mock Heading.
			</p>

			<a  class="readon" href="{{ route('60_minutes.quiz') }}u">BCS Assesments<i class="flaticon flaticon-right-arrow"></i></a>
		</div>
	</div>


</div>



@stop
