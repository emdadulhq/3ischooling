@extends('admin.layouts.admin-master')

@section('title')
Create News
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
			<h4 class="breadcrumb-title">New News</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>New News</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Add New News</h2>

                            {{-- @include('sweet::alert') --}}
							@include('validate')

							<form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
								@csrf

								<div class="form-group">
                                <label for="title">News Title</label>
                                <input type="text" class="form-control" id="name" name="title" placeholder="Enter a News Title" required>
                                </div>
								<div class="form-group">
                                <label for="name">News Details</label>
                                <textarea name="details" class="form-control" id="details" placeholder="News details here" style="width: 100%" rows="10" required></textarea>
                                </div>


                                {{-- <div class="form-group">
                                    <label for="">Photo</label>
                                    <input name="ftd_img" class="form-control" value="{{ old('ftd_img') }}" type="file">
                                </div> --}}



                                <div class="form-group">
                                    <h5 for="">Featured Image </h5><hr>
                                    <label style="font-size: 70px; cursor: pointer;" for="ftd_img"><i class="fa
                                    fa-camera" aria-hidden="true"></i></label>
                                    <input style="display: none;" name="ftd_img" class="" id="ftd_img" type="file">
                                    <img style="max-width: 100%; display: block;" id="post_ftd_img_load" src="" alt="">
                                </div>
								<div class="form-group">
                                <label for="name">News Tag</label>
                                <select name="tag" id="">
                                    <option value=""> </option>
                                    @foreach ($news_tag as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                                </div>

								<div class="form-group">
									<input class="btn btn-primary" id="add_btn" type="submit" value="Add">
                                    <a href="{{route('admin.news')}}" class="btn btn-success">Back to list</a>
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

