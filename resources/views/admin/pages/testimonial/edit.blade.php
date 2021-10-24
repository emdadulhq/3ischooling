@extends('admin.layouts.admin-master')

@section('title')
Course Edit
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
			<h4 class="breadcrumb-title">Edit Course</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Edit Course</li>
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

							<form class="row" action="{{ route('admin.teacher.update', $teacher_edit->id) }}" method="POST" enctype="multipart/form-data">
								@csrf

								<div class="form-group col-md-6">
                                    <label for="title">Teachers Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$teacher_edit->name}}" placeholder="Enter a Teacher Name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="title">Department</label>
                                    <input type="text" class="form-control" id="department" name="department" value="{{$teacher_edit->department}}" placeholder="Enter a Department Name" required>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <label class="visually-hidden" for="email">Email Address</label>
                                        <div class="input-group">
                                        <div class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" class="form-control" id="email" name="email" value="{{$teacher_edit->email}}" placeholder="Email Address">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">

                                        <label class="visually-hidden" for="phone">Phone Number</label>
                                        <div class="input-group">
                                        <div class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{$teacher_edit->phone}}" placeholder="Phone Number">
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="visually-hidden" for="">Social Links</label>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 40px;" ><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" class="form-control" id="link_fb" name="link_fb" value="{{$teacher_edit->link_fb}}" placeholder="Fafcebook Profile Link">
                                        </div>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 40px;" ><i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" class="form-control" id="link_tw" name="link_tw" value="{{$teacher_edit->link_tw}}" placeholder="Twitter Profile Link">
                                        </div>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 40px;" ><i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" class="form-control" id="link_li" name="link_li" value="{{$teacher_edit->link_li}}" placeholder="LinkedIn Profile Link">
                                        </div>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 40px;" ><i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                        <input type="text" class="form-control" id="link_in" name="link_in" value="{{$teacher_edit->link_in}}" placeholder="Instagram Profile Link">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="visually-hidden" for="">Skills</label>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 85px;" >Bangla
                                        </div>
                                        <input type="text" class="form-control" id="skill_bn" name="skill_bn" value="{{$teacher_edit->skill_bn}}" placeholder="Input Bangla Skills % Value in number within 100">
                                        </div>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 85px;" >English
                                        </div>
                                        <input type="text" class="form-control" id="skill_en" name="skill_en" value="{{$teacher_edit->skill_en}}" placeholder="Input English Skills % Value in number within 100">
                                        </div>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 85px;" >Speaking
                                        </div>
                                        <input type="text" class="form-control" id="skill_sp" name="skill_sp" value="{{$teacher_edit->skill_sp}}" placeholder="Input Speaking Skills % Value in number within 100">
                                        </div>
                                        <div class="input-group">
                                        <div class="input-group-text" style="width: 85px;" >Writing
                                        </div>
                                        <input type="text" class="form-control" id="skill_wr" name="skill_wr" value="{{$teacher_edit->skill_wr}}" placeholder="Input Writing Skills % Value in number within 100">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h5 for="">Profile Image </h5><hr>
                                        <label style="font-size: 70px; cursor: pointer; display: inline;" style="font-size: 70px; cursor: pointer;" for="ftd_img_edit"><i class="fa
                                            fa-camera" aria-hidden="true"></i><img style="max-width: 200px;" id="post_ftd_img_edit_load" src="{{ URL::to('/') }}/media/teacher/{{ $teacher_edit-> photo }}" alt=""></label>
                                                <input name="old_photo" class="form-control" value="{{$teacher_edit->photo}}" type="hidden">
                                                <input style="display: none;" name="new_photo" class="form-control" id="ftd_img_edit" value="" type="file">


                                    </div>

                                    <div class="form-group col-md-12">
                                    <label for="about">About Details</label>
                                    <textarea name="about" class="form-control" id="about" placeholder="Teachers about details" style="width: 100%" rows="10" required>{{$teacher_edit->about}}</textarea>
                                    </div>


								<div class="form-group">
									<input class="btn btn-primary" id="add_btn" type="submit" value="Update">
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

