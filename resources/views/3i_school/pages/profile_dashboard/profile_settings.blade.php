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
                <form action="{{route('settings.update', Auth::user()-> id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
				<ul class="check-square mt-5 mb-20">
                    <li>
                        <h4>Name : </h4>
                        <input type="text" value="{{Auth::user()-> name}}" class="form-control" id="exampleInputEmail1" name="name" disabled>
                    </li>

                    <li>
                        <h4>Email ID : </h4>
                        <input type="text" value="{{Auth::user()-> email}}" class="form-control" id="exampleInputEmail1" name="email" disabled>
                    </li>
                    <li>
                        <h4>Phone Number : </h4>
                        <input type="text" value="{{Auth::user()-> phone}}" class="form-control" id="exampleInputEmail1" name="phone">
                    </li>
                    <li>
                        <h4>Phofile Photo : </h4>
                        <input name="old_photo" class="form-control" value="{{Auth::user()-> photo}}" type="hidden">
                        <input name="new_photo" class="form-control" id="ftd_img_edit" value="" type="file">
                    </li>

				</ul>
				<button type="submit" class="readon" href="">Update Profile</button>
            </form>
			</div>
		</div>

	</div>


  </main>
</div>
  <!-- page-content" -->
@stop


