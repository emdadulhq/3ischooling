@extends('admin.layouts.admin-master')

@section('title')
News Edit
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
			<h4 class="breadcrumb-title">Edit News</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Edit News</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Update Current News</h2>

                            {{-- @include('sweet::alert') --}}
							@include('validate')

							<form action="{{ route('admin.news.update', $news_edit->id) }}" method="POST" enctype="multipart/form-data">
								@csrf

								<div class="form-group">
                                <label for="title">News Title</label>
                                <input type="text" class="form-control" id="name" value="{{$news_edit->title}}" name="title" placeholder="Enter a News Title" required>
                                </div>
								<div class="form-group">
                                <label for="name">News Details</label>
                                <textarea name="details" class="form-control" id="details" placeholder="News details here" style="width: 100%" rows="10" required>{{$news_edit->details}}</textarea>
                                </div>
								<div class="form-group">
                                    <h5 for="">Featured Image </h5><hr>
                                    <label style="font-size: 70px; cursor: pointer;" for="ftd_img_edit"><i class="fa
                                fa-camera" aria-hidden="true"></i></label>
                                    <input name="old_photo" class="form-control" value="{{$news_edit->ftd_img}}" type="hidden">
                                    <input style="display: none;" name="new_photo" class="form-control" id="ftd_img_edit" value="" type="file">
                                    <img style="max-width: 100%; display: block;" id="post_ftd_img_edit_load" src="{{ URL::to('/') }}/public/media/news/{{ $news_edit-> ftd_img }}" alt="">
                                </div>
								

								<div class="form-group">
									<input class="btn btn-primary" id="add_btn" type="submit" value="Update">
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

