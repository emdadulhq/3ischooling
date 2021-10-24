
@extends('admin.layouts.admin-master')

@section('title')
Dashboard
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Update Category</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Update Category</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Update Category</h2>

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

							<form action="{{ route('quizCategory.update',$quizCategoryById->id) }}" method="POST" >
								@csrf
								@method('PATCH')

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="CategoryName">Category Name</label>
											<input type="text"  class="form-control" name="name" placeholder="Enter category name" value="{{ $quizCategoryById->name }}" required>
											@if($errors->has('choice4'))
											<p class="alert alert-warning">{{$errors->first('name')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								<div class="form-group">
									<input class="btn btn-primary" type="submit" value="Add">

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



@endpush

