@extends('3i_school.layouts.user_dashboard_master')

@section('title')
	E-Learning Platform
@stop

@push('styles')


@endpush

@section('content')

	<!-- Main content Start -->
	<div class="container">
		<div class="row">
			<div class="col-6">

                @if (File::exists(public_path("media/users/".Auth::user()-> photo||null)))
                    <img src="{{ asset('media/users/' . Auth::user()-> photo) }}" alt="Avatar" class="image" style="max-width: 60%;"/>
                @else
                    <img src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="Avatar" class="image" style="max-width: 60%; ">
                @endif
				<h4 class="mt-4">{{Auth::user()-> name}}</h4>
			</div>
			<div class="col-6">
				<h1>General Information</h1>
				<ul class="check-square mt-5 mb-20">
				<li><h4>Name : {{Auth::user()-> name}}</h4></li>
				<li><h4>Email ID : {{Auth::user()-> email}}</h4></li>
				<li><h4>Phone Number : {{Auth::user()-> phone}}</h4></li>

				</ul>
				<a class="readon" href="profilesettings">Change Profile</a>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-6">
				<h1>Additional Information</h1>
				<ul class="check-square mt-2 mb-20">
					<li><h4>Gender : {{Auth::user()-> gender}}</h4></li>
					<li><h4>Education Completed : {{Auth::user()-> education}}</h4></li>
					<li><h4>Department/Institute/School : {{Auth::user()-> institute}}</h4></li>
					<li>
						<h4>Year of Birth : {{Auth::user()-> dob}}</h4>
					</li>
					<li><h4>Country : {{Auth::user()-> country}}</h4></li>
					<a class="readon" href="profilesettingsadditional">Update Additional Information</a>
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


