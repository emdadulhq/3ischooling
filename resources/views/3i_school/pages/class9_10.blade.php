
@extends('3i_school.layouts.master')

@section('title')
Class 9-10
@stop

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/kids.css">
@endpush

@section('content')

	<section class="parallax event-section" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset('3i_school') }}/img/class910.jpg'); ">
            <div class="container" style="margin-bottom: 300px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-center">
                            <h1 class="photosidetext ">Welcome To <br> Class 9 - 10 <br>SSC</h1>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
  	</section><!-- end section -->

    <section class="section gb nopadtop">
            <div class="container">
                <div class="row event-boxes">
                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/mission.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste" >Day 1</small>
                            <h4  class="check">Demo</h4>
                            <p>Demo</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/mission.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">Day 2</small>
                            <h4  class="check">Demo</h4>
                            <p>Demo</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/mission.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">Day 3</small>
                            <h4  class="check">Demo</h4>
                            <p>Demo. </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
    </section>


    @stop
