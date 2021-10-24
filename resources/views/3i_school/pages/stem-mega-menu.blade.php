@extends('3i_school.layouts.master')

@section('title')
	STEM
@stop

@section('content')


<div class="container" >
	<div class="row">

		@forelse ($stemMenus as $stemMenu)

		<div class="col-12 col-sm-6">
			<a href="{{ route('stem',$stemMenu->id) }}"> <img src="{{ asset('/') }}/public/3i_school/img/STEM/{{ $stemMenu->photo }}" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..."  ></a>
			<a href="{{ route('stem',$stemMenu->id) }}"><h2 class="title mb-0 position-relative onwhitetitle">{{ $stemMenu->name }}</h2></a>


			<p>{{ $stemMenu->brief_details }}
			</p>

			<a  class="readon" href="{{ route('stem',$stemMenu->id) }}">Read More<i class="flaticon flaticon-right-arrow"></i></a>
		</div>

		@empty
            Data not Found!!
        @endforelse


		{{-- <div class="col-12 col-sm-6">
			<a href="stemkidscoding.php"> <img src="{{ asset('3i_school') }}/img/STEM/kids.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." ></a>
			<h2 class="title mb-0 position-relative onwhitetitle">Kid's Coding</h2>

			<p>Every day, we’re surrounded by technology. As a result, coding has become an important second language for children and adults alike. Parents may find it difficult to teach programming to children if they don’t have any experience themselves. Also coding for kids seems like an impossible endeavor, right? It’s a lot like quite literally learning an entirely new language!
				Fortunately, We are here to help.
			</p>
			<a  class="readon" href="stemkidscoding.php">Kid's Coding <i class="flaticon flaticon-right-arrow"></i></a>
		</div>
		<!-- Force next columns to break to new line -->
		<div class="w-100"></div>

		<div class="col-12 col-sm-6">
			<a href="stempractical.php"> <img src="{{ asset('3i_school') }}/img/STEM/practical.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." ></a>
			<h2 class="title mb-0 position-relative onwhitetitle">Practical</h2>
			<span>
				Coming soon.
			</span>

			<p>
				Demo
			</p>

			<a  class="readon" href="stempractical.php">Practical <i class="flaticon flaticon-right-arrow"></i></a>  	
		</div>
		<div class="col-12 col-sm-6">
			<a href="stemmobilelab.php">  <img src="{{ asset('3i_school') }}/img/comingsoon.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." ></a>
			<h2 class="title mb-0 position-relative onwhitetitle">Mobile Lab</h2>
			<span>
				Coming soon.
			</span>

			<p>
				Demo
			</p>

			<a  class="readon" href="stemmobilelab.php">Mobile Lab  <i class="flaticon flaticon-right-arrow"></i></a>
		</div> --}}
	</div>
</div>

@stop