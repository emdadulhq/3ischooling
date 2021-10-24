@extends('admin.layouts.admin-master')

@section('title')
Roles & Permissions
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
			<h4 class="breadcrumb-title">Edit Roles</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Edit Roles</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Edit Role</h2>

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

							<form action="{{ route('roles.update', $role->id) }}" method="POST" >
								@method('PATCH')
								@csrf
								<div class="form-group">
									<label for="name">Role Name</label>
									<input type="text" class="form-control" id="name" value="{{ $role->name }}" name="name" placeholder="Enter a Role Name">
								</div>

								<div class="form-group">
									<label for="name">Permissions</label>

									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1" {{ App\Models\User::roleHasPermissions($role, $all_permissions) ? 'checked' : '' }}>
										<label class="form-check-label" for="checkPermissionAll">All</label>
									</div>
									<hr>
									@php $i = 1; @endphp
									@foreach ($permission_groups as $group)
									<div class="row">
										@php
										$permissions = App\Models\User::getpermissionsByGroupName($group->name);
										$j = 1;
										@endphp

										<div class="col-3">
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)" {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
												<label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
											</div>
										</div>

										<div class="col-9 role-{{ $i }}-management-checkbox">

											@foreach ($permissions as $permission)
											<div class="form-check">
												<input type="checkbox" class="form-check-input" onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})" name="permissions[]" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
												<label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
											</div>
											@php  $j++; @endphp
											@endforeach
											<br>
										</div>

									</div>
									@php  $i++; @endphp
									@endforeach
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

<script>
    /**
         * Check all the permissions
         */
         $("#checkPermissionAll").click(function(){
         	if($(this).is(':checked')){
                 // check all the checkbox
                 $('input[type=checkbox]').prop('checked', true);
             }else{
                 // un check all the checkbox
                 $('input[type=checkbox]').prop('checked', false);
             }
         });
         function checkPermissionByGroup(className, checkThis){
         	const groupIdName = $("#"+checkThis.id);
         	const classCheckBox = $('.'+className+' input');
         	if(groupIdName.is(':checked')){
         		classCheckBox.prop('checked', true);
         	}else{
         		classCheckBox.prop('checked', false);
         	}
         	implementAllChecked();
         }
         function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
         	const classCheckbox = $('.'+groupClassName+ ' input');
         	const groupIDCheckBox = $("#"+groupID);
            // if there is any occurance where something is not selected then make selected = false
            if($('.'+groupClassName+ ' input:checked').length == countTotalPermission){
            	groupIDCheckBox.prop('checked', true);
            }else{
            	groupIDCheckBox.prop('checked', false);
            }
            implementAllChecked();
        }
        function implementAllChecked() {
        	const countPermissions = {{ count($all_permissions) }};
        	const countPermissionGroups = {{ count($permission_groups) }};
            //  console.log((countPermissions + countPermissionGroups));
            //  console.log($('input[type="checkbox"]:checked').length);
            if($('input[type="checkbox"]:checked').length >= (countPermissions + countPermissionGroups)){
            	$("#checkPermissionAll").prop('checked', true);
            }else{
            	$("#checkPermissionAll").prop('checked', false);
            }
        }
    </script>
    @endpush