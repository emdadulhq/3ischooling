
@extends('admin.layouts.admin-master')

@section('title')
Dashboard
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Quiz Category</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Quiz Category</li>
			</ul>
		</div>


		<div class="container">
			<a class="btn btn-sm" href="{{ route('quizCategory.create') }}"><i
				class="fa fa-plus"></i>&nbsp;&nbsp; Add</a>
				<hr>

				<table id="quiztable" class="table table-striped">
					<thead >
						<tr>
							<th>#</th>
							<th>Parent Category</th>
							<th>Sub Category</th>
							<th></th>
						</tr>
					</thead>
					<tbody >
						@foreach ($quizCategories as $category)
						<tr>
							@php
							$id=$category->parent_id;
								$parentCategory = \App\Models\MockTestCategory::find($id);
							@endphp

							<td>{{ $loop ->index +1 }}</td>
							<td>{{ $parentCategory->name }}</td>
							<td><a href="{{ route('sub_category', $category->id) }}">{{ $category->name }}</a></td>

							<td>
								<div class="btn-group">
									<a class="btn btn-success text-white" href="{{ route('quizCategory.edit', $category->id) }}"><i class="fa fa-edit"></i></a>




                                    <form id="delete-user-form" action="{{ route('quizCategory.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return false" id="delete-btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>



							</td>

						</tr>
						@endforeach
					</table>
				</div>
			</div><br>
		</div>
	</main>

	@stop

