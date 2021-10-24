
@extends('admin.layouts.admin-master')

@section('title')
Quizzes
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">60 Minite Quiz</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>60 Minite Quiz</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Add New Quiz</h2>

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

							<form action="{{ route('admin.store') }}" method="POST" >
								@csrf


								<div class="form-group">
									<label for="subject">Subject</label>
									<br>

									<input class="py-5" name="subject" type="radio" value="Bangla" id="Bangla">
									<label
									for="Bangla">Bangla</label>
									<input name="subject" type="radio" value="English" id="English"> <label
									for="English">English</label>
									<input name="subject" type="radio" value="Mathematics" id="Mathematics"> <label
									for="Mathematics">Mathematics</label>
									<input name="subject" type="radio" value="Science" id="Science"> <label
									for="Science">Science</label>
									<input name="subject" type="radio" value="ICT" id="ICT"> <label
									for="ICT">ICT</label>
									<input name="subject" type="radio" value="Business" id="Business"> <label
									for="Business">Business</label>
									<input name="subject" type="radio" value="Geography" id="Geography"> <label
									for="Geography">Geography</label>
									<input name="subject" type="radio" value="Religion" id="Religion"> <label
									for="Religion">Religion</label>

									@if($errors->has('subject'))
									<p class="alert alert-warning">{{$errors->first('subject')}}
										<button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif
								</div>

								<div class="form-group">
									<label for="">Question</label>

									<input name="question" class="form-control" value="{{ old('question') }}"
									type="text">
									@if($errors->has('question'))
									<p class="alert alert-warning">{{$errors->first('question')}} 
										<button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif
								</div>

								<div class="form-group">
									<label for="">Choice 1</label>
									<input name="choice1" class="form-control" value="{{ old('choice1') }}"
									type="text">
									@if($errors->has('choice1'))
									<p class="alert alert-warning">{{$errors->first('choice1')}}
										<button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif
								</div>

								<div class="form-group">
									<label for="">Choice 2</label>
									<input name="choice2" class="form-control" value="{{ old('choice2') }}"
									type="text">
									@if($errors->has('choice2'))
									<p class="alert alert-warning">{{$errors->first('choice2')}}
										<button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif
								</div>

								<div class="form-group">
									<label for="">Choice 3</label>
									<input name="choice3" class="form-control" value="{{ old('choice3') }}"
									type="text">
									@if($errors->has('choice3'))
									<p class="alert alert-warning">{{$errors->first('choice3')}} 
										<button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif
								</div>

								<div class="form-group">
									<label for="">Choice 4</label>
									<input name="choice4" class="form-control" value="{{ old('choice4') }}"
									type="text">
									@if($errors->has('choice4'))
									<p class="alert alert-warning">{{$errors->first('choice4')}} 
										<button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif
								</div>


								<div class="form-group">
									<label for="">Answer</label>
									<br>

									<input name="answer" type="radio" value="choice1" id="c1"> <label
									for="c1">Choice 1</label>
									<input name="answer" type="radio" value="choice2" id="c2"> <label
									for="c2">Choice 2</label>
									<input name="answer" type="radio" value="choice3" id="c3"> <label
									for="c3">Choice 3</label>
									<input name="answer" type="radio" value="choice4" id="c4"> <label
									for="c4">Choice 4</label>


								</div>


								@if($errors->has('answer'))
								<p class="alert alert-warning">{{$errors->first('answer')}} <button class="close" data-dismiss="alert">&times;</button>
								</p>
								@endif
							</div>

							<div class="form-group">
								<input class="btn btn-primary" type="submit" value="Add">

							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>
		<hr>



		<div class="container">
			<h2 style="text-align: center;">All Question</strong></h2>

			<div class="">
				<form method="get" action="" class="ansform">

					<div class="">
						<!-- <p></p> -->
						<input type="hidden" name="questionId" id="question" value="">

						<input type="hidden" name="true_answer"  value="">
						<input type="hidden" name="true_answer"  value="">

						<table class="table table-striped">
							<thead >
								<tr>
									<th>#</th>
									<th>Subject</th>
									<th>Question</th>
									<th>Choice1</th>
									<th>Choice2</th>
									<th>Choice3</th>
									<th>Choice4</th>
									<th>Amswer</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody >
								@foreach ($quizlist as $lquiz)
								<tr>
									<td>{{ $loop ->index +1 }}</td>
									<td>{{ $lquiz->subject }}</td>
									<td>{{ $lquiz->question }}</td>
									<td>{{ $lquiz->choice1 }}</td>
									<td>{{ $lquiz->choice2 }}</td>
									<td>{{ $lquiz->choice3 }}</td>
									<td>{{ $lquiz->choice4 }}</td>
									<td>{{ $lquiz->answer }}</td>

									<td class="d-table">
										<a class="btn btn-sm" data-toggle="modal" id=""  href="#view"><i class="fa fa-book"></i></a>
										<a class="btn btn-sm " data-toggle="modal" href="#edit"><i class="fa fa-edit"></i></a>
										<a class="btn btn-sm " href="#"><i class="fa fa-trash"></i></a>
									</td>

								</tr>
								@endforeach
							</table>
						</div>

					</form>
					<div id="view" class="modal fade">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h2 style="text-align: center;"> Question</h2>
									<button class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">

									<table class="table-striped ">
										<tr>
											<td>1.</td>
											<td>Hyper Tag Markup Language </td>
										</tr>
										<tr>
											<td>2.</td>
											<td>Hyper Text Markup Language </td>
										</tr>
										<tr>
											<td>3.</td>
											<td>Hyperlinks Text Mark Language </td>
										</tr>
										<tr>
											<td>4.</td>
											<td>Hyperlinking Text Marking Language </td>
										</tr>


									</table>
								</div>

							</div>
						</div>
					</div>


					<div id="edit" class="modal fade">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h2 style="text-align: center;"> Edit Question </h2> 
									<button class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">

									<table class="table-striped ">
										<table class="table bg-success">
											<tbody>
												<div class="form-group">
													<tr class="danger">
														<td><strong>Question : </strong></td>
														<td><input type="text" class="form-control" name="question" value="" ></td>

													</tr>
												</div>

												<div class="form-group">
													<tr class="bg-success">
														<td><strong>Choice1 : </strong></td>
														<td><input name="choice1" class="form-control"  value="" type="text" ></td>
													</tr>
												</div>

												<div class="form-group">
													<tr class="danger">
														<td><strong>Choice2 : </strong></td>
														<td><input name="choice2" class="form-control" value="" type="text" ></td>
													</tr>
												</div>

												<div class="form-group">
													<tr class="bg-success">
														<td><strong>Choice3 : </strong></td>
														<td><input name="choice3" class="form-control" value="" type="text" ></td>
													</tr>
												</div>

												<div class="form-group">
													<tr class="warning">
														<td><strong>Choice4 : </strong></td>
														<td><input name="choice4" class="form-control" value="" type="text" ></td>
													</tr>
												</div>

												<div class="form-group">
													<tr class="bg-success">
														<td><strong>Answer : </strong></td>
														<td><input name="answer" class="form-control" value="" type="text" ></td>
													</tr>
												</div>
											</tbody>
										</table>
										<button type="Submit" class="btn btn-success btn-block">Save</button>

									</table>
								</div>

							</div>
						</div>
					</div>
				</div><br>

			</div>
		</main>
		<div class="ttr-overlay"></div>

		<!-- External JavaScripts -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
		<script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ asset('assets/vendors/counter/waypoints-min.js') }}"></script>
		<script src="{{ asset('assets/vendors/counter/counterup.min.js') }}"></script>
		<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
		<script src="{{ asset('assets/vendors/masonry/masonry.js') }}"></script>
		<script src="{{ asset('assets/vendors/masonry/filter.js') }}"></script>
		<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
		<script src="{{ asset('assets/vendors/scroll/scrollbar.min.js') }}"></script>
		<script src="{{ asset('assets/js/functions.js') }}"></script>
		<script src="{{ asset('assets/vendors/chart/chart.min.js') }}"></script>
		<script src="{{ asset('assets/js/admin.js') }}"></script>
		<script src="{{ asset('assets/vendors/switcher/switcher.js') }}"></script>
	</body>


	</html>
