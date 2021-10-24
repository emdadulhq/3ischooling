@extends('admin.layouts.admin-master')

@section('title')
Users & Roles
@stop

@push('styles')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

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
			<h4 class="breadcrumb-title">Edit User</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Edit User</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Edit User</h2>

							@if($errors->any())
							<p class="alert alert-warning">{{$errors->first()}}
								<button class="close" data-dismiss="alert">&times;</button>
							</p>
							@endif
							@if(Session::has('success'))
							<p class="alert alert-success">{{Session::get('success')}}
								<button class="close" data-dismiss="alert">&times;</button>
							</p>
							@endif

							<form action="{{ route('users.update', $user->id) }}" method="POST" >
								@method('PATCH')
								@csrf
								<div class="form-row">
									<div class="form-group col-md-6 col-sm-12">
										<label for="name">User Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $user->name }}">
									</div>
									<div class="form-group col-md-6 col-sm-12">
										<label for="email">User Email</label>
										<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $user->email }}">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6 col-sm-12">
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
									</div>
									<div class="form-group col-md-6 col-sm-12">
										<label for="password_confirmation">Confirm Password</label>
										<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6 col-sm-12">
										<label for="password">Assign Roles</label>
										<select name="roles[]" id="roles" class="form-control select2" multiple>
											@foreach ($roles as $role)
											<option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="form-group">
									<input class="btn btn-primary" type="submit" value="Update">

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

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>

@endpush