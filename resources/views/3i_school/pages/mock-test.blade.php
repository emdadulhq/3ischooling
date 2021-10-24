@extends('3i_school.layouts.master')

@section('title')
Mock Tests
@stop

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet' href='https://fatkit.fmdev02.fatoffice.co.uk/assets/styles/css/style.css'>
<link rel="stylesheet" href="{{ asset('3i_school') }}/MockTests/lectureQuiz.css">
@endpush

@section('content')
<section class="page">
 
  <div class="f-container f-container-center f-form f-form-large">

   <form action="{{ route('mocktest.submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <ul class="f-list quiz">



              @forelse($quizzes as $quiz)

              <li class="question">
                <h3 data-question="1">{!! $quiz->question !!}</h3>
                <ul class="f-list answers">
                  <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                  <li class="answer p-2">
                    <label for="answer-1">{{ $quiz->choice1 }}</label>
                    <input class="from-control" type="radio" id="answer-1" name="answer" value="1">
                  </li>
                  <li class="answer p-2">
                    <label for="answer-2">{{ $quiz->choice2 }}</label>
                    <input class="from-control" type="radio" id="answer-2" name="answer" value="2">
                  </li>
                  <li class="answer p-2">
                    <label for="answer-3">{{ $quiz->choice3 }}</label>
                    <input class="from-control" type="radio" id="answer-3" name="answer" value="3">
                  </li>
                  <li class="answer p-2">
                    <label for="answer-4">{{ $quiz->choice4 }}</label>
                    <input class="from-control" type="radio" id="answer-4" name="answer" value="4">
                  </li>
                </ul>
              </li>
              @empty

              <li class="question">Quiz not fund!!</li>
              @endforelse
            </ul>
            <p class="show-score">You got <span class="overall-answers"></span> answers correct and <span class="overall-questions"></span> questions correct!</p>
            <button class="readon check-answers">Submit</button>
          </form>
        </div>
      </section>

      @stop

      @push('scripts')

      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      {{-- <script  src="{{ asset('3i_school') }}/MockTests/lectureQuiz.js"></script> --}}

      @endpush