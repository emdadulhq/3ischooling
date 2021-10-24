@extends('3i_school.layouts.master')

@section('title')
	E-Learning Platform
@stop

@push('styles')

@endpush

@section('content')

	<!-- Main content Start -->
	<div class="main-content">

		<!-- Banner Section Start -->
		<div id="sc-banner" class="sc-banner banner-bg position-relative ">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="banner-content">
							<div class="sub-title wow position-relative mb-8 fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">Online Education
							</div>

							<h1 class="banner-title mb-15 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2500ms">Improve your any<br> educational skills</h1>
							<!-- Text Slider -->
							<div class="wow fadeInUp" style="max-width: 40%; background-color: red">

							</div>

							<!-- Text Slider End -->


							<h1>
							  <span
							     class="txt-rotate"
							     data-period="2000"
							     data-rotate='[ "Ensure Quality Education.", "Skill Based Education.", "Life Long Learning.", "Learning by Doing.", "Be Educated, Do Help Others to Educate!" ]'></span>
							</h1>



							<div class="banner-btn wow fadeInUp" data-wow-delay="300ms" data-wow-duration="3500ms">
								<a class="readon" href="{{route('news')}}">Explore All News<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6  hidden-md">
						<div class="banner-img animation-shape hidden-sm wow fadeInRight" data-wow-delay="300ms" data-wow-duration="2000ms">
						  
							<img src="{{ asset('3i_school') }}/assets/images/banner/banner-image.png" alt="Banner Image">
						
						</div>
						<!-- <div class="view-students-img wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
							<img src="{{ asset('3i_school') }}/assets/images/banner/view-students.png" alt="Banner Image">
						</div> -->
						<div class="animate-circle"></div>
					</div>
				</div>
			</div>
			<div class="animated-arrow-1 animated-arrow left-right-new">
				<img src="{{ asset('3i_school') }}/assets/images/pi.png" alt="">
			</div>
			<div class="animated-arrow-2 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/sigma.png" alt="">
			</div>

			<div class="animated-arrow-3 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/alpha.png" alt="">
			</div>
			<div class="animated-arrow-4 animated-arrow left-right-new">
				<img src="{{ asset('3i_school') }}/assets/images/infinite.png" alt="">
			</div>
			<div class="animated-arrow-5 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/lambda.png" alt="">
			</div>

		</div>
		<!-- Banner Section End -->

		<!-- Categories Section Start -->
		<div id="sc-categories" class="sc-categories style1 pt-115 pb-90 md-pt-75 md-pb-50">
			<div class="container">
				<div class="sec-title mb-30 md-mb-10">
					<div class="sub-title position-relative">Popular Category </div>
					<h2 class="title mb-0 position-relative onwhitetitle">Popular Category for learn</h2>
				</div>

				<div class="sc-carousel owl-carousel nav-style1" data-loop="true" data-items="6" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="3" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="6" data-md-device-nav="true" data-md-device-dots="false">

					<div class="categories-inner-top">
						<a class="categories-item" href="{{ route('courses') }}">
							<div class="icon-part">
								<i class="flaticon flaticon-laptop"></i>
							</div>
							<div class="content-part">
								<h4 class="title">School Learning<br> 1-10</h4>
								<span class="courses">{{$course->count()}} Courses</span>
							</div>
						</a>
					</div>

					<div class="categories-inner-top">
						<a class="categories-item" href="{{ route('courses') }}">
							<div class="icon-part">
								<i class="flaticon flaticon-helmet"></i>
							</div>
							<div class="content-part">
								<h4 class="title">Science<br> STEM</h4>
								<span class="courses">{{$science->count()}} Courses</span>
							</div>
						</a>
					</div>

					<div class="categories-inner-top">
						<a class="categories-item" href="{{ route('courses') }}">
							<div class="icon-part">
								<i class="flaticon flaticon-cap"></i>
							</div>
							<div class="content-part">
								<h4 class="title">Technology<br> STEM</h4>
								<span class="courses">{{$technology->count()}} Courses</span>
							</div>
						</a>
					</div>

					<div class="categories-inner-top">
						<a class="categories-item" href="{{ route('courses') }}">
							<div class="icon-part">
								<i class="flaticon flaticon-apartment"></i>
							</div>
							<div class="content-part">
								<h4 class="title">Engineering<br> STEM</h4>
								<span class="courses">{{$engineering->count()}} Courses</span>
							</div>
						</a>
					</div>

					<div class="categories-inner-top">
						<a class="categories-item" href="{{ route('courses') }}">
							<div class="icon-part">
								<i class="flaticon flaticon-computer"></i>
							</div>
							<div class="content-part">
								<h4 class="title">Mathamatics<br> STEM</h4>
								<span class="courses">{{$math->count()}} Courses</span>
							</div>
						</a>
					</div>

					<div class="categories-inner-top">
						<a class="categories-item" href="{{ route('courses') }}">
							<div class="icon-part">
								<i class="flaticon flaticon-briefcase"></i>
							</div>
							<div class="content-part">
								<h4 class="title">Pre <br>Univeristy</h4>
								<span class="courses">{{$admission->count()}} Courses</span>
							</div>
						</a>
					</div>

					<div class="categories-inner-top">
						<a class="categories-item" href="{{ route('courses') }}">
							<div class="icon-part">
								<i class="flaticon flaticon-book"></i>
							</div>
							<div class="content-part">
								<h4 class="title">Higher Study<br> IELTS</h4>
								<span class="courses">15 Courses</span>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
		<!-- Categories Section End -->

		<!-- Counter Section Start -->
		<div class="sc-counter pt-120 pb-120 md-pt-80 md-pb-50 counter-bg1  sc-counter-bg position-relative arrow-animation-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center">
							<div class="icon-part">
								<i class="flaticon flaticon-laptop"></i>
							</div>
							<h2 class="counter-title"><span class="sc-count">{{$user->count()}} </span><span class="text">+</span></h2>
							<h5 class="title mb-0">Students Learning</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center ping-color">
							<div class="icon-part">
								<i class="flaticon flaticon-study"></i>
							</div>
							<h2 class="counter-title"><span class="sc-count">{{$question->count()}} </span><span class="text">+</span></h2>
							<h5 class="title mb-0">Total question</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center green-color">
							<div class="icon-part">
								<i class="flaticon flaticon-teacher"></i>
							</div>
							<h2 class="counter-title"><span class="sc-count">{{$teacher->count()}} </span><span class="text">+</span></h2>
							<h5 class="title mb-0">Quality Teachers</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center yellow-color">
							<div class="icon-part">
								<i class="flaticon flaticon-monitor"></i>
							</div>
							<h2 class="counter-title"><span class="sc-count">{{$subject->count()}}</span><span class="text">+</span></h2>
							<h5 class="title mb-0">Course Subjects</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="animated-arrow-1 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/pi.png" alt="">
			</div>
			<div class="animated-arrow-2 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/sigma.png" alt="">
			</div>

			<div class="animated-arrow-3 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/alpha.png" alt="">
			</div>
			<div class="animated-arrow-4 animated-arrow left-right-new">
				<img src="{{ asset('3i_school') }}/assets/images/infinite.png" alt="">
			</div>
			<div class="animated-arrow-6 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/lambda.png" alt="">
			</div>
		</div>
		<!-- Counter Section End -->


		<!-- Course Section Start -->
		<div id="sc-popular-courses" class="sc-popular-courses main-home pt-115 pb-90 md-pt-70 md-pb-50 ">
			<div class="container">
				<div class="row align-items-center mb-30 md-mb-10">
					<div class="col-md-8">
						<div class="sec-title">
							<div class="sub-title position-relative">Popular Course </div>
							<h2 class="title mb-0">Our Educational Course </h2>
						</div>
					</div>
					<div class="col-md-4 sm-mt-30">
						<div class="btn-part sm-text-left text-end wow fadeInRight" data-wow-delay="300ms" data-wow-duration="2000ms">
							<a class="readon" href="{{ route('courses') }}">Learn More <i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>

				<div class="sc-carousel owl-carousel nav-style1" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
					@foreach ($courses as $course)



                    <div class="courses-item">
						<div class="courses-grid">
                            <div class="img-part">
                                <a href="#"><iframe width="100%" height="240" src="{{$course->link}}"
                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
									<div class="course-price">
									<a href="{{route('singleCourse', $course->id)}}">
										<span class="price"></span>
									</div>
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="{{route('singleCourse',$course->id)}}">{{$course->title}}</a></h3>
                                <div class="des">
                                    {{ Illuminate\Support\Str::limit($course -> details, 100)}}
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
                                        <a href="{{route('singleCourse',$course->id)}}"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
					</div>
                    @endforeach



				</div>
			</div>
		</div>
		<!-- Course Section End -->
		<!-- Team Section Start -->
		<div class="sc-team team-style-1 pt-110 pb-90 md-pt-70 md-pb-50 sc-banner banner-bg position-relative">
			<div class="container">
				<div class="sec-title mb-30  md-mb-10">
					<div class="sub-title primary">Teachers</div>
					<h2 class="title mb-0 wow slideInLeft">Professional Teachers</h2>
				</div>
				<div class="sc-carousel owl-carousel wow slideInUp" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">

                    @foreach ($teacher as $teachers)


					<div class="team-inner-item">
						<div class="team-wrap">
							<div class="team-img">
								<a href="#"><img style="max-width:100%; height:400px" src="{{ URL::to('/') }}/public/media/teacher/{{ $teachers-> photo }}" alt=""></a>
								<div class="team-social">
									<li><a href="{{$teachers->link_fb}}" class="social-icon"><i class="fa fa-facebook"></i></a></li>
									<li><a href="{{$teachers->link_tw}}" class="social-icon"><i class="fa fa-twitter"></i></a></li>
									<li><a href="{{$teachers->link_li}}" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="{{$teachers->link_in}}" class="social-icon"><i class="fa fa-instagram"></i></a></li>
								</div>
							</div>
							<div class="team-item-text">
								<div class="team-details">
									<h3 class="team-name"><a href="{{route('teacher', $teachers -> id)}}">{{$teachers->name}}</a></h3>
									<span class="team-title">{{$teachers->department}}</span>
								</div>
							</div>
						</div>
					</div>
                    @endforeach



				</div>
				<div class="col-md-4 sm-mt-30">
					<div class="btn-part  wow fadeInRight" data-wow-delay="300ms" data-wow-duration="2000ms">
						<a class="readon" href="{{route('all.teacher')}}">See All The Available Teachers <i class="flaticon flaticon-right-arrow"></i></a>
					</div>
				</div>

			</div>
		</div>
		<!-- Team Section End -->

		<!-- Counter Section Start -->
		<div class="sc-counter pt-120 pb-120 md-pt-80 md-pb-50 counter-bg1  sc-counter-bg position-relative arrow-animation-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center ping-color">
						<img src="{{ asset('3i_school') }}/assets/images/blog/1.jpg" alt="" style="border-radius: 5%;">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center">

							<h2 class="counter-title"><span class="text">Winter Schooling</span></h2>
							<p></p>
							<h5 class="title mb-0">During the Winter School students learn to work on a design assignment as a team. The assignment seeks out and even crosses the boundaries of the three fields of study (architecture, urbanism and landscape architecture), and helps train the students’ intuition and transform it from an idea into an inspired product in a limited time (two weeks). The result can vary from built objects to statements, manifestos, plans and visions and ideas.</h5>
							<p></p>
							<a class="readon" href="{{route('winterschooling')}}">Register for Winter Schooling <i class="flaticon flaticon-right-arrow"></i></a>
						</div>

					</div>


				</div>
			</div>
			<div class="animated-arrow-1 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/pi.png" alt="">
			</div>
			<div class="animated-arrow-2 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/sigma.png" alt="">
			</div>

			<div class="animated-arrow-3 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/alpha.png" alt="">
			</div>
			<div class="animated-arrow-4 animated-arrow left-right-new">
				<img src="{{ asset('3i_school') }}/assets/images/infinite.png" alt="">
			</div>
			<div class="animated-arrow-6 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/lambda.png" alt="">
			</div>
		</div>
		<!-- Counter Section End -->


		<!-- CTA Section Start -->
		<div class="sc-cta-section  md-pt-75 md-pb-80 position-relative arrow-animation-1" style="background-color: #232728">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
						<div class="sec-title">
							<div class="sub-title position-relative">Donate</div>
							<h2 class="title mb-0 white-color">Everyone deserves the opportunity to learn.<br> Help Us Grow</h2>
						</div>

						<form class="newsletter-form mt-40" method="POST" action="">
                            @csrf
							<input type="number" name="email" placeholder="Please Enter Amount In BDT" required="">
							<button type="submit">Donate Now! <i class="flaticon flaticon-right-arrow"></i></button>
						</form>
					</div>
					<div class="col-lg-6 hidden-md">
						<div class="img-part">
							<img src="{{ asset('3i_school') }}/assets/images/cta/donate.png" alt="Image">
						</div>
					</div>
				</div>
			</div>

			<div class="animated-arrow-1 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/pi.png" alt="">
			</div>
			<div class="animated-arrow-2 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/sigma.png" alt="">
			</div>

			<div class="animated-arrow-3 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/alpha.png" alt="">
			</div>
			<div class="animated-arrow-4 animated-arrow left-right-new">
				<img src="{{ asset('3i_school') }}/assets/images/infinite.png" alt="">
			</div>
			<div class="animated-arrow-6 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/lambda.png" alt="">
			</div>
		</div>
		<!-- CTA Section End -->
		<!-- Counter Section Start -->
		<div class="sc-counter pt-120 pb-120 md-pt-80 md-pb-50 counter-bg1  sc-counter-bg position-relative arrow-animation-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center ping-color">
						<img src="{{ asset('3i_school') }}/assets/images/3i_images/Job.png" alt="" style="border-radius: 5%;">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 md-mb-30 col-6">
						<div class="counter-item text-center">

							<h2 class="counter-title"><span class="text">Job & Career</span></h2>
							<p></p>
							<h5 class="title mb-0">We offer various services.
							</h5>
							<p></p>
								<ul>
									<li><a href="{{route('jobs_assesments')}}" class="">Job Assesments</a></li>
									<li><a href="{{route('careercounselling')}}" class="">Career Counselling</a></li>

								</ul>
							<p></p>
							<a class="readon" href="{{route('jobs')}}">See More <i class="flaticon flaticon-right-arrow"></i></a>
						</div>

					</div>


				</div>
			</div>
			<div class="animated-arrow-1 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/pi.png" alt="">
			</div>
			<div class="animated-arrow-2 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/sigma.png" alt="">
			</div>

			<div class="animated-arrow-3 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/alpha.png" alt="">
			</div>
			<div class="animated-arrow-4 animated-arrow left-right-new">
				<img src="{{ asset('3i_school') }}/assets/images/infinite.png" alt="">
			</div>
			<div class="animated-arrow-6 animated-arrow up-down-new">
				<img src="{{ asset('3i_school') }}/assets/images/lambda.png" alt="">
			</div>
		</div>
		<!-- Counter Section End -->
		<!-- Testimonial Section Start -->

		<div class="sc-testimonial style1 pt-115 pb-120 md-pt-75 md-pb-80 sc-banner banner-bg position-relative">
			<div class="container">
				<div class="sec-title mb-30 text-center md-mb-10">
					<div class="sub-title primary">Students Testimonial</div>
					<h2 class="title mb-0 position-relative onwhitetitle">Happy Students</h2>
				</div>
				<div class="sc-carousel owl-carousel" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="true" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">


                    @foreach ($testimonials as $testimonial)


					<div class="testi-item-inner">
						<div class="testi-item">
							<div class="desc">{{$testimonial->details}} </div>
							<div class="user-info d-flex align-items-center">
								<img style="height: 85px; width: 85px; border-radius: 50%;" src="{{ URL::to('/') }}/public/media/testimonial/{{
                                    $testimonial->photo}}" alt="">
								<div class="author-details">
									<h4 class="name">{{$testimonial->name}}</h4>
									<ul class="ratings">
                                        @for ($i=0;$i < $testimonial->star;$i++)
                                        <li><i class="fa fa-star"></i></li>
                                        @endfor
									</ul>
								</div>
							</div>
						</div>
					</div>

                    @endforeach





				</div>
			</div>

		</div>
		<!-- Testimonial Section End -->




		<!-- Blog Section Start -->
		<div id="sc-blog" class="sc-blog main-home pb-110 pt-110 md-pt-70 md-pb-70 counter-bg1 sc-counter-bg position-relative arrow-animation-1">
			<div class="container">
				<div class="sec-title mb-60 text-center md-mb-30">
					<div class="sub-title primary">Blog & News</div>
					<h2 class="title mb-0">Every single Update</h2>
				</div>
				<div class="sc-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    @foreach ($allNews as $news)


					<div class="blog-item">
						<div class="image-part">
							{{-- <img src="{{ asset('3i_school') }}/assets/images/blog/1.jpg" alt=""> --}}
                            <img style="height: 340px; width: 500px;" src=" {{ URL::to('/') }}/public/media/news/{{ $news-> ftd_img }}" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">

								<li><i class="fa fa-calendar"></i>{{date('F d, Y ', strtotime($news-> created_at))}}</li>
							</ul>
							<h3 class="title"><a href="{{route('singleNews',$news->id)}}">{{Illuminate\Support\Str::limit($news -> title, 35)}}</a></h3>
							<div class="desc">{{Illuminate\Support\Str::limit($news -> details, 100)}}</div>
							<div class="btn-btm">
								<div class="rs-view-btn">
									<a href="{{route('singleNews',$news->id)}}">Read More</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach


				</div>
				<div>
					<center>
						<a class="readon" href="{{route('news')}}">See All News <i class="flaticon flaticon-right-arrow"></i></a>
					</center>
				</div>
			</div>

		</div>
		<!-- Blog Section End -->


	</div>
	<!-- Main content End -->
<script type="text/javascript">
	var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 1000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
@stop


