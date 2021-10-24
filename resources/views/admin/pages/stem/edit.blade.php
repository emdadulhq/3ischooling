@extends('admin.layouts.admin-master')

@section('title')
STEM Course Edit
@stop

@push('styles')
<style>
.form-check-label {
	text-transform: capitalize;
}
</style>
@endpush

@section('content')
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Edit STEM Course</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Edit STEM Course</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Update Current Course</h2>

                            {{-- @include('sweet::alert') --}}
							@include('validate')

							<form action="{{ route('admin.stem.update', $course_edit->id) }}" method="POST" >
								@csrf

								<div class="form-group">
                                <label for="title">Course Title</label>
                                <input type="text" class="form-control" id="name" value="{{$course_edit->title}}" name="title" placeholder="Enter a Course Title" required>
                                </div>
								<div class="form-group">
                                <label for="name">Course Details</label>
                                <textarea name="details" class="form-control" id="details" placeholder="Course details here" style="width: 100%" rows="10" required>{{$course_edit->details}}</textarea>
                                </div>
								<div class="form-group">
                                <label for="name">Course Link</label>
                                <input type="text" class="form-control" id="link" name="link" value="{{$course_edit->link}}" placeholder="Paste course link here" required>
                                </div>
								

								<div class="form-group">
                                <label for="name">Additional Link (Optional)</label>
                                <input type="text" class="form-control" id="link1" name="link1" value="{{$course_edit->link1}}" placeholder="Paste course link here" required>
                                </div>
								<div class="form-group">
                                <label for="name">Additional Link (Optional)</label>
                                <input type="text" class="form-control" id="link2" name="link2" value="{{$course_edit->link2}}" placeholder="Paste course link here" required>
                                </div>
								<div class="form-group">
                                <label for="name">Additional Link (Optional)</label>
                                <input type="text" class="form-control" id="link3" name="link3" value="{{$course_edit->link3}}" placeholder="Paste course link here" required>
                                </div>
								<div class="form-group">
									<input class="btn btn-primary" id="add_btn" type="submit" value="Update">
                                    <a href="{{route('admin.stem')}}" class="btn btn-success">Back to list</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</div>
	<hr>
</main>
@stop

