@extends('3i_school.layouts.master')

@section('title')
	Schooling
@stop

@section('content')


<div class="container" >
	<div class="row">
		@foreach($schoolingMenus as $category)

		<div class="col-12 col-sm-6">
			<img src="{{ asset('/') }}public/3i_school/img/schooling/{{ $category->photo }}" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..."  >
			<h2 class="title mb-0 position-relative onwhitetitle">{{ $category->name }}</h2>


			@if(count($category->subcategory))

			@include('3i_school.partials.mega_schooling_sub_category', ['subcategories' => $category->subcategory])

			@endif

			<p>
				{{$category->brief_details }}
			</p>
			<a  class="readon" href="{{ route('schooling', $category->slug ) }}">{{ $category->name }}<i class="flaticon flaticon-right-arrow"></i></a>
		</div>

		@endforeach



{{-- 
		@forelse ($schoolingMenus as $schoolingMenu)

		<div class="col-12 col-sm-6">
			<a href="{{ route('schooling',$schoolingMenu->id) }}"> <img src="{{ asset('/') }}public/3i_school/img/schooling/{{ $schoolingMenu->photo }}" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..."  ></a>
			<a href="{{ route('schooling',$schoolingMenu->id) }}"><h2 class="title mb-0 position-relative onwhitetitle">{{ $schoolingMenu->name }}</h2></a>


			<p>{{ $schoolingMenu->brief_details }}
			</p>

			<a  class="readon" href="{{ route('schooling',$schoolingMenu->id) }}">Read More<i class="flaticon flaticon-right-arrow"></i></a>
		</div>

		@empty
            Data not Found!!
        @endforelse --}}


		
	</div>
</div>

@stop