
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

							<form action="{{ route('question.update',$quizById->id) }}" method="POST" enctype="multipart/form-data">
								@csrf
								@method('PATCH')
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="CategoryName">Question</label>
											<textarea class="form-control" name="question" placeholder="Enter Question" required>{!! $quizById->question !!}</textarea>
											@if($errors->has('question'))
											<p class="alert alert-warning">{{$errors->first('question')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 1</label>
											<input type="text"  class="form-control" name="choice1" value="{{ $quizById->choice1 }}" placeholder="Set Choice" required>
											@if($errors->has('choice1'))
											<p class="alert alert-warning">{{$errors->first('choice1')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 2</label>
											<input type="text"  class="form-control" name="choice2" value="{{ $quizById->choice2 }}" placeholder="Set Choice" required>
											@if($errors->has('choice2'))
											<p class="alert alert-warning">{{$errors->first('choice2')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 3</label>
											<input type="text"  class="form-control" name="choice3" value="{{ $quizById->choice3 }}" placeholder="Set Choice" required>
											@if($errors->has('choice3'))
											<p class="alert alert-warning">{{$errors->first('choice3')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 4</label>
											<input type="text"  class="form-control" name="choice4" value="{{ $quizById->choice4 }}" placeholder="Set Choice" required>
											@if($errors->has('choice4'))
											<p class="alert alert-warning">{{$errors->first('choice4')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Answer</label>
											<br>

											<input name="answer" type="radio" value="1" id="choice1" {{ $quizById->answer =='choice1'  ? 'checked' : '' }}> <label
											for="c1">Choice 1</label>
											<input name="answer" type="radio" value="2" id="choice2" {{ $quizById->answer =='choice2'  ? 'checked' : '' }}> <label
											for="c2">Choice 2</label>
											<input name="answer" type="radio" value="3" id="choice3" {{ $quizById->answer =='choice3'  ? 'checked' : '' }}> <label
											for="c3">Choice 3</label>
											<input name="answer" type="radio" value="4" id="choice4" {{ $quizById->answer =='choice4'  ? 'checked' : '' }}> <label
											for="c4">Choice 4</label>

										</div>
									</div>

									@if($errors->has('answer'))
									<p class="alert alert-warning">{{$errors->first('answer')}} <button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif

								</div>
								<div class="form-group">
									<input class="btn btn-primary" type="submit" value="Update">
									<a class="btn btn-default" href="{{ route('question.index') }}">Back</a>

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

