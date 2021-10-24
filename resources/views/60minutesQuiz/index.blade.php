@extends('3i_school.layouts.master')

@section('title')
Short Quiz
@stop

@section('content')



        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		{{-- <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet"> --}}
        <title>3i Schooling</title>
        {{-- <link rel="stylesheet" href="{{ asset('assets/60minutesQuiz/css/style.css') }}" /> --}}
		<link rel="icon" href="{{ asset('assets/60minutesQuiz/images/home 80 px.png') }}">
    </head>
    <body>
		<div class="container mb-4 text-center">
		<div class="row">
				<div class="col text-center mt-5 pt-5">
					<div class="leftside pt-5">
							<a href=""><img src="{{asset('assets/60minutesQuiz/images/3i.png')}}" alt="3i Logo" class="tilt" /></a>

							<h1 class="mt-5">15 minutes Quiz Test</h1><br/>
					</div>
				</div>
				<div class="col  mt-5 pt-5 mb-5 pb-5">
					<div class="rightside">


						<h3>Features:</h3>
						<ul class="check-square  mb-5 ">
							<li><h4>15 Question</h4></li>
							<li><h4>Time limits(15 minutes)</h4></li>
							<li><h4>Score Results</h4></li>
						</ul>

						{{-- <a class="readon" href="{{ route('admin.startquiz') }}">Start Quiz</a> --}}
						@foreach ($gquiz as $quiz)						
						<a class="readon" href="{{ $quiz->link }}">Start Quiz for {{ $quiz->title }}</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>

    </body>
    <script src="{{ asset('assets/60minutesQuiz/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/60minutesQuiz/js/tilt.min.js') }}"></script>

    <script>
		$(".tilt").tilt({
			scale:1.2,
		});
	</script>

@stop
