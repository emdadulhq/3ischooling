@extends('3i_school.layouts.user_dashboard_master')

@section('title')
	E-Learning Platform
@stop

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/profile_dashboard.css">

@endpush

@section('content')

	<!-- Main content Start -->
	<div class="container">
		<div class="row">
			<div class="col-6">
				<img src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="Avatar" class="image" style="max-width: 60%; ">
				<h4 class="mt-4">{{Auth::user()-> name}}</h4>
			</div>
			<div class="col-6">
				<h1>General Information</h1>
				<ul class="check-square mt-5 mb-20">
				<li><h4>First Name : </h4></li>
				<li><h4>Last Name : </h4></li>
				
				<li><h4>Email ID : </h4></li>
				<li><h4>Phone Number : </h4></li>
				
				</ul>
				<a class="readon" href="">Change Profile</a>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-6">
				<h1>Additional Information</h1>
				<ul class="check-square mt-2 mb-20">
					<li><h4>Gender : </h4></li>
					<li><h4>Education Completed : </h4></li>
					<li><h4>Department/Institute/School : </h4></li>
					<li><h4>Year of Birth : </h4></li>
					<li><h4>Country : </h4></li>
					<a class="readon" href="">Change Additional Information</a>
				</ul>
			</div>
			<div class="col-6 mt-10">
				
			</div>
		</div>
	</div>


  </main>
</div>
  <!-- page-content" -->
@stop


