
@extends('admin.layouts.admin-master')

@section('title')
Dashboard
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">New Category</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>New Category</li>
			</ul>
		</div>
		<div class="container">
			<!-- Your Profile Views Chart -->

			<div class="widget-box">

				<div class="wrap shadow">
					<div class="card">
						<div class="card-body">
							<h2>Add New Category</h2>

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

							<form action="{{ route('quizCategory.store') }}" method="POST" >
								@csrf

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="parent_id1">Category</label>
											<select id="category" class="form-control" name="parent_id1" >
												<option selected="selected" disabled>If you want to set under Parent Category then Select</option>
												@forelse ($quizCategories as $category)

												<option value="{{ $category->id }}">{{ $category->name }}</option>

												@empty
												Data not Found!!
												@endforelse
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="parent_id2">Sub Category</label>
											<span id="sub_cat">
												<select id="sub_category" class="form-control" name="parent_id2" >
												<option selected="selected" disabled>If you want to set under Sub Category then Select</option>
											</select>
											</span>
											
										</div>
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="CategoryName">Category Name</label>
											<input type="text"  class="form-control" name="name" placeholder="Enter category name" value="{{ old('name') }}" required>
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

<script>
        $('#category').on('change', function(e) {
            e.preventDefault();

            var cat_id = $('#category').val();

            // console.log(cat_id);

            $.ajax({
                url: "{{ route('subcat') }}",
                type: 'GET',
                dataType: "json",
                data: {
                    id: cat_id,
                },
                success: function(data) {
                    $('#sub_category').empty();
                    var ht ='<select id="sub_category" class="form-control" name="parent_id2" ><option selected="selected" disabled>If you want to set under Sub Category then Select</option>';
                    

                    $.each(data.categories, function(key, value) {

                        
                        ht+='<option  value="' + value.id + '">' + value.name + '</option>';

                    });

                    ht+='</select>';
                    $('#sub_cat').html(ht);
                    // console.log(data);
                }
            });
        });
    </script>

@endpush

