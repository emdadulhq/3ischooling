@extends('3i_school.layouts.master')

@section('title')
Mock Tests
@stop

@section('content')


<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">Short Quiz</h2>
			<p>
				Take A Short Quiz.
			</p>
			<ul class="check-square  mb-20 ">
				<li class="onwhite">Contains 15 Questions</li>
				<li class="onwhite">Time limits - 15 minutes</li>
			</ul>
			<p>
				This test will improve one’s overall personality, memory, and their revision skills. Also this test will papers help students calculate how much time each subject will take in the exam. It will increases the speed of problem-solving and will help the students know in which subject he or she is weak.
			</p>
                        @foreach ($gquiz as $quiz)						
						<a class="readon" href="{{ $quiz->link }}">Start Quiz for {{ $quiz->title }}</a>
						@endforeach
			<!--<a  class="readon" href="{{ route('admin.minquiz') }}">Short Quiz  <i class="flaticon flaticon-right-arrow"></i></a>-->
		</div>

		@foreach($parentCategories as $category)

		<div class="col-12 col-sm-6">
			<img src="{{ asset('3i_school') }}/img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">{{ $category->name }}</h2>


			@if(count($category->subcategory))

			@include('3i_school.partials.mega_sub_category', ['subcategories' => $category->subcategory])

			@endif

			<p>
				This test will offer a good amount of practice to students, which will help them during the exam.
			</p>
			<a  class="readon" href="{{ route('mock_test', $category->slug ) }}">{{ $category->name }}<i class="flaticon flaticon-right-arrow"></i></a>
		</div>

		@endforeach

		{{-- <div class="col-12 col-sm-6">
			<img src="img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">SSC Mock Test</h2>


			<ul class="check-square  mb-20 ">
				<li><a class="onwhite" href="SSCMockPyhsics.php">Physics</a></li>
				<li><a class="onwhite" href="SSCMockMaths.php">Maths</a></li>
				<li><a class="onwhite" href="SSCMockHigherMaths.php">Higher Maths</a></li>
				<li><a class="onwhite" href="SSCMockChemistry.php">Chemistry</a></li>
				<li><a class="onwhite" href="SSCMockBiology.php">Biology</a></li>
			</ul>

			<a  class="readon" href="Test_SSC.php">SSC Mock Test  <i class="flaticon flaticon-right-arrow"></i></a>
		</div>
		<div class="col-12 col-sm-6">
			<img src="img/mockexam.jpg" class="col-md-6 float-md-end mb-3 ms-md-3 img-thumbnail " alt="..." >
			<h2 class="title mb-0 position-relative onwhitetitle">HSC Mock Test</h2>
			<ul class="check-square  mb-20 ">
				<li><a class="onwhite" href="HSCMockPhysics.php">Physics</a></li>
				<li><a class="onwhite" href="HSCMockMaths.php">Maths</a></li>
				<li><a class="onwhite" href="HSCMockHigherMaths.php">Higher Maths</a></li>
				<li><a class="onwhite" href="HSCMockChemistry.php">Chemistry</a></li>
				<li><a class="onwhite" href="HSCMockBiology.php">Biology</a></li>
				<li><a class="onwhite" href="HSCMockICT.php">ICT</a></li>
			</ul>
			<a  class="readon" href="Test_HSC.php">HSC Mock Test  <i class="flaticon flaticon-right-arrow"></i></a>
		</div> --}}
	</div>
</div>
@stop
