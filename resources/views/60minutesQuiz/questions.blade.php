@extends('3i_school.layouts.master')

@section('title')
	E-Learning Platform
@stop

@push('styles')

@endpush

@section('content')
<!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/60minutesQuiz/css/style.css') }}" />

 	</head>
  <div class="quizbody">
		<div class="box" id="questionScreen" >
			<div class="title">
				<h2>15 minutes Quiz Test</h2>
			</div>

			<div class="quizheader">
				<div class="scoreBox">Score: <span></span></div>
				<div class="timerBox">Time Left: <span></span></div>
			</div>

			<div class="questionBox">

			</div>

			<div class="optionBox">
				<span id="answer" onclick="checkAnswer(this)" data-opt="1"></span>
				<span id="answer" onclick="checkAnswer(this)" data-opt="2"></span>
				<span id="answer" onclick="checkAnswer(this)" data-opt="3"></span>
				<span id="answer" onclick="checkAnswer(this)" data-opt="4"></span>
			</div>

			<div class="footerquiz">
				<button  onclick="showNext()" >
					Next
				</button>

				<button onclick="showResult(1)">
					Show Result
				</button>
			</div>
		</div>

		<div class="box" id="resultScreen" style="display:none;">
			<div class="title">
				15 minutes Quiz Test Result
			</div>
            <form action="">
			<div class="resultBox">
				<label>Questions : </label>
				<span value="" id="totalQuestion">0</span>
				<label>Attempt : </label>
				<span value="" id="attemptQuestion">0</span>
				<label>Correct : </label>
				<span value="" id="correctAnswer">0</span>
				<label>Worng : </label>
				<span value="" id="wrongAnswer">0</span>
			</div>
			<div class="buttonBox">
				<a class="mt-4" href="{{ route('admin.minquiz') }}">Finish</a>
			</div>
        </form>
		</div>

  </div>
  <script src="{{ asset('assets/60minutesQuiz/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ asset('assets/60minutesQuiz/js/quiz.js') }}"></script>
  <script src="{{ asset('assets/60minutesQuiz/js/script.js') }}"></script>



@stop
