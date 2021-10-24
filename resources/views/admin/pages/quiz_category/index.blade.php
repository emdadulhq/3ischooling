
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


		<div class="row">
			<div class="col-lg-12 m-b30">
				<div class="widget-box">
					<div class="wc-title">
						<a class="btn btn-sm" href="{{ route('quizCategory.create') }}"><i
							class="fa fa-plus"></i>&nbsp;&nbsp; Add</a>
						</div>
						@include('validate')
						<div class="">
							<table id="quiztable" class="table table-striped">
								<thead >
									<tr>
										<th width="10%">#</th>
										<th width="80%">Category</th>
										<th width="10%"></th>
									</tr>
								</thead>
								<tbody >
									@foreach ($quizCategories as $category)
									<tr>
										<td>{{ $loop ->index +1 }}</td>
										<td><a href="{{ route('sub_category', $category->id) }}">{{ $category->name }}</a></td>

										<td>
											<div class="btn-group">
												@if (Auth::guard('web')->user()->can('roles.edit'))
												<a class="btn btn-success text-white" href="{{ route('quizCategory.edit', $category->id) }}"><i class="fa fa-edit"></i></a>
												@endif

												@if (Auth::guard('web')->user()->can('roles.edit'))
												<form id="delete-user-form" action="{{ route('quizCategory.destroy', $category->id) }}" method="POST">
													@csrf
													@method('DELETE')
													<button onclick="return false" id="delete-btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
												</form>
												@endif

									{{-- <form id="delete-form-{{ $category->id }}" class="delete_form" action="{{ route('quizCategory.destroy', $category->id) }}" method="POST" >
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-danger text-white" id="delete-item" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button> --}}
                                    </form>

                                </div>

                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div><br>
        </div>
    </main>

    @stop

