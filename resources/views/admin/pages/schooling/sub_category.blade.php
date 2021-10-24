
@extends('admin.layouts.admin-master')

@section('title')
Dashboard
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Schooling Category</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Schooling Category</li>
			</ul>
		</div>


		<div class="container">
			<a class="btn btn-sm" href="{{ route('admin.schooling.subject') }}"><i
				class="fa fa-plus"></i>&nbsp;&nbsp; Add</a>
				<hr>

				<table id="quiztable" class="table table-striped">
					<thead >
						<tr>
							<th>#</th>
							<th>Image</th>
							<th>Parent Category</th>
							<th>Sub Category</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody >
						@foreach ($schoolingCategories as $category)
						<tr>
							@php
							$id=$category->parent_id;
								$parentCategory = \App\Models\SchoolingSubject::find($id);
							@endphp

							<td>{{ $loop ->index +1 }}</td>
							<td><img style="width: 100px; height: 100px;" src="{{ URL::to('/') }}/public/3i_school/img/schooling/{{
								$parentCategory->photo}}" alt=""></td>							
							<td>{{ $parentCategory->name }}</td>
							<td><a class="badge badge-success" href="{{ route('schooling_sub_category', $category->id) }}">{{ $category->name }}</a></td>

							<td>
								<div class="btn-group">
								



									<a class="btn button text-white" id="delete_btn" href="{{ route('admin.schooling.subject.delete', $category->id) }}">
										<i class="fa fa-trash"></i>
									</a>

                                    {{-- <form id="delete-user-form" action="{{ route('admin.schooling.subject.delete', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return false" id="delete-btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form> --}}



							</td>

						</tr>
						@endforeach
					</table>
				</div>
			</div><br>
		</div>
	</main>

	@stop

