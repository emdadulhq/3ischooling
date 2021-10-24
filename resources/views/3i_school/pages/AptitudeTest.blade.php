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
                            <h1 class="photosidetext wow slideInLeft">Higher Studies<br>Aptitude Test</h1>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
  	</section><!-- end section -->

    <section class="section gb nopadtop">
            <div class="container wow slideInUp">
                <div class="row event-boxes pb-4 mb-4">
                    <div class="col-md-4 pb-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/analytical.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste" >30 Minutes Per Task</small>
                            <h4  class="check">Analytical Writing</h4>
                            <p>The analytical writing section has two essay writing tasks: the Issue and the Argument. The Issue task presents two topics of which the candidate must select one on which to write an essay presenting the writer's position on the topic. The candidate is required to support his or her point of view with examples and reasoning. </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4 pb-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/verbal.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">30 Minutes Per Section</small>
                            <h4  class="check">Verbal Reasoning</h4>
                            <p>Topics are of general interest to, and suitable for, test takers entering undergraduate and postgraduate studies or seeking professional registration. There are two tasks. The verbal reasoning section of the GRE is often said to be a test of vocabulary. However, the comprehension questions require good reading and reasoning skills. </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4 pb-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/quantitative.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            35 Minutes Per Section</small>
                            <h4  class="check">Quantitative Reasoning</h4>
                            <p>The quantitative reasoning section has two types of multiple choice questions: quantitative comparisons and problem solving. The test also contains Numeric Entry questions where students have to provide their own answers. </p>
                            </div>
                        </div>
                    </div><!-- end col -->
            </div><!-- end container -->
            <div class="row event-boxes">
                    <div class="col-md-4 pb-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/quantitative.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            IQ</small>
                            <h4  class="check">Intelligence Quotient</h4>
                            <p>An intelligence quotient (IQ) is a score derived from one of several standardized tests designed to assess intelligence. </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 pb-3">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/quantitative.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            EQ</small>
                            <h4  class="check">Emotional Quotient</h4>
                            <p>Emotional quotient (EQ) or emotional intelligence is the ability to identify, assess, and control the emotions of oneself, of others, and of groups. </p>
                            </div>
                        </div>
                    </div><!-- end col -->              
            </div>
    </section>
<!-- Main content End -->


@stop





