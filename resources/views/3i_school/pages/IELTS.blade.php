@extends('3i_school.layouts.master')

@section('title')
	E-Learning Platform
@stop

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/kids.css">
@endpush

@section('content')
<!-- Main content Start -->
	<section class="parallax event-section" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset('3i_school') }}/img/HigherStudies/higher_studies_cover.png'); ">
            <div class="container" style="margin-bottom: 300px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-center">
                            <h1 class="photosidetext wow slideInLeft">Higher Studies<br>IELTS</h1>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
  	</section><!-- end section -->

    <section class="section gb nopadtop">
            <div class="container wow slideInUp">
                <div class="row event-boxes">
                    <div class="col-md-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/ielts_reading.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste" >IELTS Reading</small>
                            <h4  class="check">Reading</h4>
                            <p>The Reading section consists of 40 questions, designed to test a wide range of reading skills. These include reading for gist, reading for main ideas, reading for detail, skimming, understanding logical argument and recognising writers' opinions, attitudes and purpose.</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/ielts_writting.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">IELTS Writting</small>
                            <h4  class="check">Writting</h4>
                            <p>Topics are of general interest to, and suitable for, test takers entering undergraduate and postgraduate studies or seeking professional registration. There are two tasks. You will have 60 mintues for both of the tasks.</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/ielts_speaking.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">IELTS Speaking</small>
                            <h4  class="check">Speaking</h4>
                            <p>The speaking section assesses your use of spoken English. Every test is recorded. Speaking performances are assessed by certificated IELTS examiners. All IELTS examiners hold relevant teaching qualifications and are recruited as examiners.</p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/ielts_listening.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">IELTS Listening</small>
                            <h4  class="check">Listening</h4>
                            <p>You will listen to four recordings of native English speakers and then write your answers to a series of questions. You will get 30 minutes to finish your lisenting tasks.</p>
                            </div>
                        </div>
                    </div><!-- end col -->


            </div><!-- end container -->
    </section>
<!-- Main content End -->

@stop


