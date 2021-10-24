
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
				<li>Quiz </li>
			</ul>
		</div>


		<div class="row">
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
						<a class="btn btn-sm" href="{{ route('question.create') }}"><i
							class="fa fa-plus"></i>&nbsp;&nbsp; Add</a>
						</div>
						@include('validate')

						<table id="quiztable" class="table table-striped">
							<thead >
								<tr>
									<th width="5%">#</th>
									<th width="65%">Question</th>
									<th width="20%">Answer</th>
									<th width="5%">Category</th>
									<th width="5%">Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody >
								@foreach ($quizzes as $quiz)
								<tr>
									<td>{{ $loop ->index +1 }}</td>
									<td>{!! $quiz->question !!}</td>

									<td> @php $ans='choice'.$quiz->answer; @endphp {{ $quiz->$ans }}</td>

									<td>
										<span class="badge badge-info mr-1">
											{{$quiz->category->name}}
										</span>
									</td>
									<td>
										<span class="badge {{ $quiz->status == 'Active' ? 'badge-success' : 'badge-warning' }} mr-1">
											{{ $quiz->status }}
										</span>
									</td>



									<td class="d-table">
										<div class="btn-group">
											@if (Auth::guard('web')->user()->can('roles.edit'))
											@if ($quiz->status == 'Pending')

											<a class="btn btn-warning text-white" href="{{ route('question.pendding.active', $quiz->id) }}"
												onclick="event.preventDefault(); document.getElementById('status-form-{{ $quiz->id }}').submit();">
												<i class="fa fa-check"></i>
											</a>

											<form id="status-form-{{ $quiz->id }}" action="{{ route('question.pendding.active', $quiz->id) }}" method="POST" style="display: none;">
												@method('PATCH')
												@csrf
											</form>

											@endif
											@endif

											@if (Auth::guard('web')->user()->can('roles.edit'))
											<a class="btn btn-success text-white" href="{{ route('question.edit', $quiz->id) }}"><i class="fa fa-edit"></i></a>


											<form id="delete-user-form" action="{{ route('question.destroy', $quiz->id) }}" method="POST">
												@csrf
												@method('DELETE')
												<button onclick="return false" id="delete-btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>
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


