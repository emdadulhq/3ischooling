@extends('3i_school.layouts.master')

@section('title')
	E-Learning Platform - Choose Your Destination
@stop

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/kids.css">
@endpush

@section('content')

<!-- Main content Start -->
	<section class="parallax event-section" data-stellar-background-ratio="0.5" style="background-image:url('{{ asset('3i_school') }}/img/HigherStudies/consultation.jpg'); ">
            <div class="container" style="margin-bottom: 300px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-center">
                            <h1 style="font-size: 50px;" class="photosidetext wow slideInLeft">Higher Studies<br>Choose Your Destination</h1>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
  	</section><!-- end section -->

    <section class="section gb nopadtop">
            <div class="container wow slideInUp">
                <div class="row event-boxes">


                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/ca.png" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">3 Intakes</small>
                            <h4  class="check">Study In Canada</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="{{route('canada')}}" class="readon">Read More About Canada</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/germany.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            3 Intakes</small>
                            <h4  class="check">Study In Germany</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="{{route('germany')}}" class="readon">Read More About Germany</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/usa.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste" >3 Intakes</small>
                            <h4  class="check">Study In USA</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="" class="readon">Read More About USA</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/germany.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            3 Intakes</small>
                            <h4  class="check">Study In Sweeden</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="" class="readon">Read More About Sweeden</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/germany.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            3 Intakes</small>
                            <h4  class="check">Study In Denmark</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="" class="readon">Read More About Denmark</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/germany.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            3 Intakes</small>
                            <h4  class="check">Study In Norway</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="" class="readon">Read More About Norway</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/germany.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            3 Intakes</small>
                            <h4  class="check">Study In Australlia</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="" class="readon">Read More About Australlia</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/germany.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            3 Intakes</small>
                            <h4  class="check">Study In United Kingdom</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="" class="readon">Read More About United Kingdom</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-4 mb-5">
                        <div class="box m30">
                            <img src="{{ asset('3i_school') }}/img/HigherStudies/germany.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">
                            3 Intakes</small>
                            <h4  class="check">Study In Malaysia</h4>
                            <p>Demo. </p>
                            </div>
                            <a href="" class="readon">Read More About Malaysia</a>
                        </div>
                    </div><!-- end col -->
            </div><!-- end container -->
    </section>
<!-- Main content End -->

@stop


