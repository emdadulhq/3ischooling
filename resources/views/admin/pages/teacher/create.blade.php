@extends('admin.layouts.admin-master')

@section('title')
Create Teacher
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
			<h4 class="breadcrumb-title">New Teacher</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>New Teacher</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Add New Teacher</h2>

                            {{-- @include('sweet::alert') --}}
							@include('validate')

							<form class="row" action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
								@csrf

								<div class="form-group col-md-6">
                                <label for="title">Teachers Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Teacher Name" required>
                                </div>
								<div class="form-group col-md-6">
                                <label for="title">Department</label>
                                <input type="text" class="form-control" id="department" name="department" placeholder="Enter a Department Name" required>
                                </div>
								<div class="form-group col-md-6">

									<label class="visually-hidden" for="email">Email Address</label>
									<div class="input-group">
									<div class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
									</div>

                                </div>
								<div class="form-group col-md-6">

									<label class="visually-hidden" for="phone">Phone Number</label>
									<div class="input-group">
									<div class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
									</div>

                                </div>
								<div class="form-group col-md-6">
									<label class="visually-hidden" for="">Social Links</label>
									<div class="input-group">
									<div class="input-group-text" style="width: 40px;" ><i class="fa fa-facebook" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="link_fb" name="link_fb" placeholder="Fafcebook Profile Link">
									</div>
									<div class="input-group">
									<div class="input-group-text" style="width: 40px;" ><i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="link_tw" name="link_tw" placeholder="Twitter Profile Link">
									</div>
									<div class="input-group">
									<div class="input-group-text" style="width: 40px;" ><i class="fa fa-linkedin" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="link_li" name="link_li" placeholder="LinkedIn Profile Link">
									</div>
									<div class="input-group">
									<div class="input-group-text" style="width: 40px;" ><i class="fa fa-instagram" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="link_in" name="link_in" placeholder="Instagram Profile Link">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label class="visually-hidden" for="">Skills</label>
									<div class="input-group">
									<div class="input-group-text" style="width: 85px;" >Bangla
									</div>
									<input type="text" class="form-control" id="skill_bn" name="skill_bn" placeholder="Input Bangla Skills % Value in number within 100">
									</div>
									<div class="input-group">
									<div class="input-group-text" style="width: 85px;" >English
									</div>
									<input type="text" class="form-control" id="skill_en" name="skill_en" placeholder="Input English Skills % Value in number within 100">
									</div>
									<div class="input-group">
									<div class="input-group-text" style="width: 85px;" >Speaking
									</div>
									<input type="text" class="form-control" id="skill_sp" name="skill_sp" placeholder="Input Speaking Skills % Value in number within 100">
									</div>
									<div class="input-group">
									<div class="input-group-text" style="width: 85px;" >Writing
									</div>
									<input type="text" class="form-control" id="skill_wr" name="skill_wr" placeholder="Input Writing Skills % Value in number within 100">
									</div>
								</div>
                                <div class="form-group col-md-12">
                                    <h5 for="">Profile Image </h5><hr>
                                    <label style="font-size: 70px; cursor: pointer; display: inline;" for="ftd_img"><i class="fa
                                    fa-camera" aria-hidden="true"></i> <img style="max-width: 200px;" id="post_ftd_img_load" src="" alt=""> </label>
                                    <input style="display: none;" name="ftd_img" class="" id="ftd_img" type="file">
                                </div>

								<div class="form-group col-md-12">
                                <label for="about">About Details</label>
                                <textarea name="about" class="form-control" id="about" placeholder="Teachers about details" style="width: 100%" rows="10" required></textarea>
                                </div>


								<div class="form-group col-md-12">
									<input class="btn btn-primary" id="add_btn" type="submit" value="Add">
                                    <a href="{{route('admin.teacher')}}" class="btn btn-success">Back to list</a>
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

