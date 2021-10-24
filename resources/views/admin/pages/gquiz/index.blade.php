
@extends('admin.layouts.admin-master')

@section('title')
Dashboard
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Quiz </h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Quiz from Google Form</li>
			</ul>
		</div>


		<div class="row">
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
						<a class="btn btn-sm" href="{{ route('admin.gquizcreate') }}"><i
							class="fa fa-plus"></i>&nbsp;&nbsp; Add</a>
						</div>
						@include('validate')

						<table id="quiztable" class="table table-striped">
							<thead >
								<tr>
									<th width="5%">#</th>
									<th width="15%">Quiz Title</th>
									<th width="15%">Slug</th>
									<th width="15%">Link</th>
									<th width="45%">Details</th>
									<th width="5%">Action</th>
								</tr>
							</thead>
							<tbody >
								@foreach ($quizzes as $quiz)
								<tr>
									<td>{{ $loop ->index +1 }}</td>
									<td>{{ $quiz->title}}</td>
									<td>{{ $quiz->slug}}</td>
									<td>{{ $quiz->link}}</td>
									<td>{{ $quiz->details}}</td>




									<td class="d-table">
										<div class="btn-group">										

											@if (Auth::guard('web')->user()->can('roles.edit'))
											<a class="btn btn-success text-white" href="{{ route('admin.gquiz.edit', $quiz->id) }}"><i class="fa fa-edit"></i></a>


											<a class="btn button text-white" id="delete_btn" href="{{ route('admin.gquiz.delete', $quiz->id) }}"><i class="fa fa-trash"></i></a>
											@endif

										</td>

									</tr>
									@endforeach
								</table>
							</div>
						</div>
					</div><br>
				</div>
			</main>

			@stop


