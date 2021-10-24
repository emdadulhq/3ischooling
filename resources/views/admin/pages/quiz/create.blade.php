
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

							<form action="{{ route('question.store') }}" method="POST" >
								@csrf

								
								<div class="row">
									<div class="col-md-6">

										<div class="form-group">
											<label for="parent_id1">Category</label>
											<select name="parent_id1" class="form-control" id="category">
												<option value="">Select Category</option>

												@foreach($parentCategories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>

												@if(count($category->subcategory))
												@include('admin.pages.quiz.sub-category-list',['subcategories' => $category->subcategory])

												@endif

												@endforeach

											</select>
										</div>
									</div>
									
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="CategoryName">Question</label>
											<textarea class="form-control" name="question" placeholder="Enter Question" required></textarea>
											@if($errors->has('question'))
											<p class="alert alert-warning">{{$errors->first('question')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 1</label>
											<input type="text"  class="form-control" name="choice1" placeholder="Set Choice" required>
											@if($errors->has('choice1'))
											<p class="alert alert-warning">{{$errors->first('choice1')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 2</label>
											<input type="text"  class="form-control" name="choice2" placeholder="Set Choice" required>
											@if($errors->has('choice2'))
											<p class="alert alert-warning">{{$errors->first('choice2')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 3</label>
											<input type="text"  class="form-control" name="choice3" placeholder="Set Choice" required>
											@if($errors->has('choice3'))
											<p class="alert alert-warning">{{$errors->first('choice3')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="CategoryName">Choice 4</label>
											<input type="text"  class="form-control" name="choice4" placeholder="Set Choice" required>
											@if($errors->has('choice4'))
											<p class="alert alert-warning">{{$errors->first('choice4')}}
												<button class="close" data-dismiss="alert">&times;</button>
											</p>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Answer</label>
											<br>

											<input name="answer" type="radio" value="1" id="choice1"> <label
											for="c1">Choice 1</label>
											<input name="answer" type="radio" value="2" id="choice2"> <label
											for="c2">Choice 2</label>
											<input name="answer" type="radio" value="3" id="choice3"> <label
											for="c3">Choice 3</label>
											<input name="answer" type="radio" value="4" id="choice4"> <label
											for="c4">Choice 4</label>

										</div>
									</div>

									@if($errors->has('answer'))
									<p class="alert alert-warning">{{$errors->first('answer')}} <button class="close" data-dismiss="alert">&times;</button>
									</p>
									@endif

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

