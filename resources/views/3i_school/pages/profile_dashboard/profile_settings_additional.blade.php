@extends('3i_school.layouts.user_dashboard_master')

@section('title')
	E-Learning Platform
@stop

@push('styles')


@endpush

@section('content')

	<!-- Main content Start -->
	<div class="container">
			<div class="row mt-4">
				<div class="col-6">
					<h1>Additional Information</h1>
                    <form action="{{route('additional.update', Auth::user()-> id)}}" method="POST">
                        @csrf
					<ul class="check-square mt-2 mb-20">
						<li>
							<h4>Gender : </h4>
						  	<select id="gender" name="gender" class="form-control" >
						    <option value="Male">Male</option>
						    <option value="Female">Female</option>
						  </select>
						</li>
						<li>
							<h4>Education Completed : </h4>
							<input type="text" value="{{Auth::user()-> education}}" class="form-control" id="exampleInputEmail1" name="education">
						</li>
						<li>
							<h4>Department/Institute/School : </h4>
							<input type="text" value="{{Auth::user()-> institute}}" class="form-control" id="exampleInputEmail1" name="institute">
						</li>
						<li>
							<h4>Year of Birth : </h4>
							<input type="date" value="{{Auth::user()-> dob}}" class="form-control" id="exampleInputEmail1" name="dob"></li>
						<li>
							<h4>Country : </h4>
							<input type="text" value="{{Auth::user()-> country}}" class="form-control" id="exampleInputEmail1" name="country">
						</li>
						<button type="submit" class="readon mt-3" href="">Update Additional Information</button>
					</ul>
                </form>
				</div>
				<div class="col-6 mt-10">

				</div>
			</div>

	</div>


  </main>
</div>
  <!-- page-content" -->
@stop


