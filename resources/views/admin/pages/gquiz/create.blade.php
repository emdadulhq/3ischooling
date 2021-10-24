
@extends('admin.layouts.admin-master')

@section('title')
Dashboard
@stop

@section('content')

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">New Quiz</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>New Quiz</li>
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

							<form action="{{ route('admin.gquizstore') }}" method="POST" >
								@csrf

								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="title">Title</label>
											<input type="text"  class="form-control" name="title" placeholder="Quiz Title Here" required>
											@if($errors->has('title'))
											<p class="alert alert-warning">{{$errors->first('title')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="link">Link</label>
											<input type="text"  class="form-control" name="link" placeholder="Quiz link Here" required>
											@if($errors->has('link'))
											<p class="alert alert-warning">{{$errors->first('link')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
									
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="CategoryName">Details</label>
											<textarea class="form-control" name="question" placeholder="Enter details" required></textarea>
											@if($errors->has('details'))
											<p class="alert alert-warning">{{$errors->first('details')}}
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

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'question' );
</script>

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
            		var ht ='<select id="sub_category" class="form-control" name="parent_id2" ><option selected="selected" disabled>Select Category</option>';


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

