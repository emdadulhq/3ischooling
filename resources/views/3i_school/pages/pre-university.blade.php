@extends('3i_school.layouts.master')

@section('title')
Pre-University
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
					<h1 class="photosidetext ">Welcome to<br> Pre-University <br>University Admission</h1>
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

            <!-- Course Section Start -->
			<div id="sc-popular-courses" class="sc-popular-courses  main-home pt-110 pb-110 md-pt-70 md-pb-70">
				<div class="container">
					<div class="sec-title text-center mb-55 md-mb-20">
						<div class="sub-title">Popular Course </div>
						<h2 class="title mb-0">Explore Courses</h2>
					</div>

					<div class="gridFilter text-center mb-70 md-mb-50">
						<button class="active" data-filter="*">All Subject</button>

						@forelse ($admissionSubjects as $subject)

						<button data-filter=".subject_{{ $subject->id }}">{{ $subject->name }}</button>
						@empty
						Data Not Found!!
						@endforelse

						
					</div>

					<div class="row grid">

						@forelse ($admissions as $admission)

						<div class="col-md-6 grid-item subject_{{ $admission->admission_subject_id }}">
							<div class="courses-grid mb-30 d-flex align-items-center">
								<div class="img-part">
									{{-- <a href="course-single.html"><img src="{{ asset('3i_school') }}/assets/images/courses/lg1.jpg" alt=""></a> --}}

									<iframe width="100%" height="100%" src="{{ $admission->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

										<div class="course-price">
										<a href="{{route('admission.details', $admission->id)}}">
											<span class="price"></span>
										</div>
									</div>
									<div class="content-part">
										<h3 class="title"><a href="{{ route('admission.details',$admission->id) }}">{{ $admission->title }}</a></h3>
										<div class="des">
											{{ Illuminate\Support\Str::limit($admission->details, 100) }}
										</div>
										
										<div class="bottom-part">
											<div class="info-meta">
												{{-- <ul>
													<li class="ratings">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														(05)
													</li>
												</ul> --}}
											</div>
											<div class="btn-part">
												<a href="#"><i class="flaticon-right-arrow"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>

							@empty
							Data Not Found!!
							@endforelse


						</div>
						<div class="btn-part text-center mt-40 md-mt-20 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
							<a class="readon" href="course.html">View All Course <i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<!-- Course Section End -->
			</div><!-- end row -->

		</div><!-- end container -->
	</section>
	@stop
