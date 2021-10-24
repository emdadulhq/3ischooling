@extends('admin.layouts.admin-master')

@section('title')
Create Course
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
			<h4 class="breadcrumb-title">New Course</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>New Course</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Add New Course</h2>

                            {{-- @include('sweet::alert') --}}
							@include('validate')

							<form action="{{ route('admin.course.store') }}" method="POST" >
								@csrf

								<div class="form-group">
                                <label for="title">Course Title</label>
                                <input type="text" class="form-control" id="name" name="title" placeholder="Enter a Course Title" required>
                                </div>
								<div class="form-group">
                                <label for="name">Course Details</label>
                                <textarea name="details" class="form-control" id="details" placeholder="Course details here" style="width: 100%" rows="10" required></textarea>
                                </div>
								<div class="form-group">
                                <label for="name">Course Link</label>
                                <input type="text" class="form-control" id="link" name="link" placeholder="Paste course link here" required>
                                </div>
								<div class="form-group">
                                <label for="name">Course Category</label>
                                <select name="category" id="">
                                    <option value=""> </option>
                                    @foreach ($course_cate as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                                </div>
								<div class="form-group">
                                <label for="name">Additional Link (Optional)</label>
                                <input type="text" class="form-control" id="link1" name="link1" placeholder="Paste course link here" required>
                                </div>
								
								<div class="form-group">
                                <label for="name">Additional Link (Optional)</label>
                                <input type="text" class="form-control" id="link3" name="link2" placeholder="Paste course link here" required>
                                </div>
								
								<div class="form-group">
                                <label for="name">Additional Link (Optional)</label>
                                <input type="text" class="form-control" id="link3" name="link3" placeholder="Paste course link here" required>
                                </div>
								<div class="form-group">
									<input class="btn btn-primary" id="add_btn" type="submit" value="Add">
                                    <a href="{{route('admin.course')}}" class="btn btn-success">Back to list</a>
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

