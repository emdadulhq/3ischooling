
@extends('admin.layouts.admin-master')

@section('title')
Dashboard
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Update Quiz</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Update Quiz</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Update Quiz</h2>

							@if($errors->any())
							<p class="alert alert-warning">{{$errors->first()}}
								<button class="close" data-dismiss="alert">&times;</button>
							</p>
							@endif
							@if(Session::has('success'))
							<p class="alert alert-success">{{Session::get('success')}}
								<button class="close"  data-dismiss="alert">&times;</button>
							</p>
							@endif

							<form action="{{ route('admin.gquiz.update',$quizById->id) }}" method="POST" enctype="multipart/form-data">
								@csrf
								@method('POST')
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Title</label>
											<input type="text"  class="form-control" name="title" value="{{ $quizById->title }}" placeholder="Set Choice" required>
											@if($errors->has('title'))
											<p class="alert alert-warning">{{$errors->first('title')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Link</label>
											<input type="text"  class="form-control" name="link" value="{{ $quizById->link }}" placeholder="Set Choice" required>
											@if($errors->has('link'))
											<p class="alert alert-warning">{{$errors->first('link')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="CategoryName">Details</label>
											<textarea class="form-control" name="question" placeholder="Enter Question" required>{!! $quizById->details !!}</textarea>
											@if($errors->has('question'))
											<p class="alert alert-warning">{{$errors->first('question')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<input class="btn btn-primary" type="submit" value="Update">
									<a class="btn btn-default" href="{{ route('admin.gquiz') }}">Back</a>

								</div>
							</div>


						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>
		<hr>

	</div>
</main>

@stop

@push('scripts')

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'question' );
</script>

@endpush

