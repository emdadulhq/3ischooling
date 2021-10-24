@extends('3i_school.layouts.master')

@section('title')
	E-Learning Platform
@stop

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/kids.css">
@endpush

@section('content')
	<section class="parallax event-section" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset('3i_school') }}/img/minions.jpg'); ">
            <div class="container" style="margin-bottom: 300px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-center">
                            <h1 class="photosidetext wow slideInLeft">Welcome to<br> Kid's Learning <br>Class 1 - 4</h1>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
  	</section><!-- end section -->

    <section class="section gb nopadtop">
            <div class="container wow slideInUp">
                <div class="row event-boxes">
                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/kids_science.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste" >Science</small>
                            <h4  class="check">Kid's Science</h4>
                            <p>Demo.</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/kids_foods.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">Food & Nutrition</small>
                            <h4  class="check">Demo.</h4>
                            <p>Demo.</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/kids_games.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">Extra Curricular (fun game)</small>
                            <h4  class="check">Fun Games</h4>
                            <p>Demo. </p>
                            </div>
                        </div>
                    </div><!-- end col -->



            </div><!-- end container -->
    </section>
@stop
