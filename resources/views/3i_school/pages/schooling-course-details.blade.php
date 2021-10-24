@extends('3i_school.layouts.master')

@section('title')
Course Details
@stop

@section('content')

<!-- Main content Start -->
<div class="main-content">
	<!-- Breadcrumbs Start -->
	<div class="sc-breadcrumbs breadcrumbs-overlay">
		<div class="breadcrumbs-img">
			<img src="{{ asset('3i_school') }}/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
		</div>
		<div class="breadcrumbs-text white-color">
			<h1 class="page-title">Course Single</h1>
			<ul>
				<li>
					<a class="active" href="{{ route('home') }}">Home ></a>
				</li>
				<li class="active">Course Single</li>
			</ul>
		</div>
	</div>
	<!-- Breadcrumbs End -->


	<!-- Intro Courses -->
	<section class="sc-course-details pt-120 pb-70  md-pt-80 md-pb-40">
		<div class="container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="col-lg-8 md-mb-50">
                    @include('validate')
					<!-- Intro Info Tabs-->
					<div class="intro-info-tabs">
						<div class="post-img">
							<iframe width="100%" height="460px" src="{{$singleCourse->link}}"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            {{-- <img src="{{ asset('3i_school') }}/assets/images/blog/blog-single.jpg" alt=""> --}}
						</div>
						<ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
							<li class="nav-item tab-btns">
								<a class="nav-link tab-btn active" id="course-overview-tab" data-bs-toggle="tab" href="#course-overview" role="tab" aria-controls="course-overview" aria-selected="true">Overview</a>
							</li>
							
						</ul>
						<div class="tab-content tabs-content" id="myTabContent">
							<div class="tab-pane tab fade show active" id="course-overview" role="tabpanel" aria-labelledby="course-overview-tab">
								<div class="content white-bg pt-30">
									<!-- Cource Overview -->
									<div class="course-overview">
										<div class="inner-box mb-30">
											<h3>{{$singleCourse-> title}}</h3>
											<p>{{$singleCourse-> details}}</p>
											
										</div>
										
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="prod-curriculum" role="tabpanel" aria-labelledby="course-curriculum-tab">
								<div class="content">
									<div id="accordion" class="accordion-box mt-20">
										<div class="card accordion block">
											<div class="card-header" id="headingOne">
												<h5 class="mb-0">
													<button class="btn btn-link acc-btn" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Part 01: Welcome!</button>
												</h5>
											</div>

											<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
												<div class="card-body acc-content current">
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 01</span> Course Introduction</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 02</span> Big Picture Overview of Course</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 03</span> HTML Document Structure</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card accordion block">
											<div class="card-header" id="headingTwo">
												<h5 class="mb-0">
													<button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Part 02: HTML Essentials</button>
												</h5>
											</div>
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
												<div class="card-body acc-content">
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 01</span> Course Introduction</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 02</span> Big Picture Overview of Course</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 03</span> HTML Document Structure</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card accordion block">
											<div class="card-header" id="headingThree">
												<h5 class="mb-0">
													<button class="btn btn-link acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Part 03: Adding Media to a Web Page</button>
												</h5>
											</div>
											<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
												<div class="card-body acc-content">
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 01</span> Course Introduction</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 02</span> Big Picture Overview of Course</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
													<div class="content">
														<div class="clearfix">
															<div class="pull-left">
																<a class="popup-videos play-icon" href="#"><i class="fa fa-play"></i> <span>Lecture: 03</span> HTML Document Structure</a>
															</div>
															<div class="pull-right">
																<div class="minutes">35 Minutes</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							

							
						</div>
					</div>
				</div>

				<!-- Video Column -->
				<div class="course-sidebar-area col-lg-4">
					<div class="inner-column">
						<div class="course-features-info">
							<h4 class="course-title">Course Features</h4>							
							<ul>
								<li class="lectures-feature">
									<i class="fa fa-files-o"></i>
									<span class="label">Subject</span>
									<span class="value">{{ $singleCourse->subject->name }}</span>
								</li>
								
								<li class="duration-feature">
									<a href="{{ $singleCourse->link1 }}">
									<i class="fa fa-clock-o"></i>
									<span class="label">Assessment</span>
									<span class="value">Click to view </span>
									</a>
								</li>
								<li class="duration-feature">
									<a href="{{ $singleCourse->link2 }}">
									<i class="fa fa-clock-o"></i>
									<span class="label">Assessment</span>
									<span class="value">Click to view </span>
									</a>
								</li>
								<li class="duration-feature">
									<a href="{{ $singleCourse->link3 }}">
									<i class="fa fa-clock-o"></i>
									<span class="label">Assessment</span>
									<span class="value">Click to view </span>
									</a>
								</li>

							</ul>
							<a class="readon mt-20" href="#">Enroll Now <i class="flaticon flaticon-right-arrow"></i> </a>
						</div>
						<div class="course-features-info">
							<h4 class="course-title">Category</h4>
							<ul>

                                @foreach ($course_cat as $category)
								<li class="lectures-feature">
									<a href="{{route('schooling.category', $category->id)}}"><span class="label">{{$category-> name}}</span></a>
									{{-- <span class="value">({{$category->count()}})</span> --}}
								</li>
                                @endforeach


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End intro Courses -->

	<!-- Course Section Start -->
	<div id="sc-popular-courses" class="related-course sc-popular-courses main-home pb-90 md-pb-60">
		<div class="container">
			<div class="align-items-center mb-30 md-mb-10">
				<div class="sec-title">
					<h2 class="title mb-0">Related Course</h2>
				</div>
			</div>
			<div class="sc-carousel owl-carousel nav-style1" data-loop="true" data-items="3" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">

                @foreach ($all_course as $course)

                <div class="courses-item">
					<div class="courses-grid">
						<div class="img-part">
							<a href="#"><iframe width="100%" height="240" src="{{$course->link}}"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								<div class="course-price">
                                <a href="{{route('schooling.course', $course->id)}}">
                                    <span class="price"></span>
                                </div>
						</div>
						<div class="content-part">

							<h3 class="title"><a href="{{route('schooling.course',$course->id)}}">{{$course->title}}</a></h3>
							<div class="des">
								{{ Illuminate\Support\Str::limit($course -> details, 100)}}
							</div>
							
							<div class="bottom-part">
								<div class="info-meta">
									
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
</div>
<!-- Main content End -->

@stop
