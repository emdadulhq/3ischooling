@extends('3i_school.layouts.master')

@section('title')
Admission Course Details
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

					<!-- Intro Info Tabs-->
					<div class="intro-info-tabs">
						<div class="post-img">
							<iframe width="100%" height="460px" src="{{ $singleAdm->link }}"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            {{-- <img src="{{ asset('3i_school') }}/assets/images/blog/blog-single.jpg" alt=""> --}}
						</div>
						<ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
							<li class="nav-item tab-btns">
								<a class="nav-link tab-btn active" id="course-overview-tab" data-bs-toggle="tab" href="#course-overview" role="tab" aria-controls="course-overview" aria-selected="true">Overview</a>
							</li>
							
							<li class="nav-item tab-btns">
								<a class="nav-link tab-btn" id="course-reviews-tab" data-bs-toggle="tab" href="#prod-reviews" role="tab" aria-controls="prod-reviews" aria-selected="false">Comments</a>
							</li>
						</ul>
						<div class="tab-content tabs-content" id="myTabContent">
							<div class="tab-pane tab fade show active" id="course-overview" role="tabpanel" aria-labelledby="course-overview-tab">
								<div class="content white-bg pt-30">
									<!-- Cource Overview -->
									<div class="course-overview">
										<div class="inner-box mb-30">
											<h3>{{ $singleAdm->title }}</h3>
											<p>{{ $singleAdm->details }}</p>
											
										</div>
										<!-- <a class="readon" href="#">Apply Now <i class="flaticon flaticon-right-arrow"></i> </a> -->
									</div>
								</div>
							</div>

							

							

							<div class="tab-pane fade" id="prod-reviews" role="tabpanel" aria-labelledby="course-reviews-tab">
								<div class="content pt-30">





									@foreach ($singleAdm -> comments as $singleComments)
                                    @if ($singleComments-> comment_id ==null)





									<div class="cource-review-box mb-30">
										<h4>{{$singleComments-> user -> name}}</h4>

										<div class="text">{{$singleComments-> comment_txt}}</div>

                                        @guest
                                        <p>For reply you need <a href="{{ route('login') }}">login</a> first before
                                            place your comments</p>

                                    @else
                                    <div class="cource-review-box mb-30 ml-80 md-ml-0">

                                        @php
                                        $reply_comment = App\Models\AdmComments::where('comment_id','!=',null)->where('comment_id', $singleComments-> id)->get();
                                        @endphp

                                        @foreach ($reply_comment as $comm )

                                        <br>
                                        <h4>{{ $comm ->user ->name}}</h4>

                                            <div class="text">{{ $comm -> comment_txt }}</div>


                                            @endforeach

                                    <a href="#"  class="comment-reply-btn" c_id="{{$singleComments->id}}">Reply</a>

                                        <div style="display: none;" id="comment_reply_box"
                                             class="comment-reply-box-{{$singleComments->id}}">
                                            <form action=" {{ route('adm.comment.reply') }}" class="comment-form" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="hidden" name="post_id" value="{{ $singleAdm->id }}">
                                                    <input type="hidden" name="comment_id" value="{{
                                                    $singleComments->id }}">
                                                    <textarea name="reply_txt" placeholder="Type your reply!" cols="40" rows="5" class="textarea form-control" required=""></textarea>
                                                </div>
                                                <div class="submit-btn">
                                                    <button type="submit" class="submit btn">Post Reply</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endguest


									</div>
                                    @endif
                                    @endforeach


                                    <div id="loadmore" class="text-center mt-30">
                                        <a href="#" class="mt-20 readon">View More Comments</a>
                                    </div>



                                    @guest
                                    <p>Please <a href="{{ route('login') }}">login</a> first before place your comments</p>

                                @else
                                <!-- Blog Single Start -->
                                <div class="sc-blog-single pt-120 pb-120 md-pt-80 md-pb-80">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-12">

                                            <div class="comment-area">
                                                <div class="comment-full">
                                                    <h3 class="reply-title">Add to Comment</h3>
                                                        <form action="{{ route('adm.comment') }}" class="comment-form" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="hidden" name="post_id" value="{{ $singleAdm->id }}">
                                                                <textarea name="comments" placeholder="Message" cols="40" rows="10" class="textarea form-control" required=""></textarea>
                                                            </div>

                                                            <div class="submit-btn">
                                                                <button type="submit" class="submit btn">Post Comment</button>
                                                            </div>
                                                        </form>


                                                </div>
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- admission Single End -->

                                @endguest
									<a href="#" class="mt-20 readon">View More</a>
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
									<span class="value">{{ $singleAdm->subject->name }}</span>
								</li>
								
								<li class="duration-feature">
									<a href="{{ $singleAdm->link1 }}">
									<i class="fa fa-clock-o"></i>
									<span class="label">Assessment</span>
									<span class="value">Click to view </span>
									</a>
								</li>
								<li class="duration-feature">
									<a href="{{ $singleAdm->link2 }}">
									<i class="fa fa-clock-o"></i>
									<span class="label">Assessment</span>
									<span class="value">Click to view </span>
									</a>
								</li>
								<li class="duration-feature">
									<a href="{{ $singleAdm->link3 }}">
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
								@forelse ($admissionSubjects as $subject)

								<li class="lectures-feature">
									<a href="{{route('admission.category', $subject->id)}}"><span class="label">{{ $subject->name }}</span></a>
									
								</li>
								@empty
									Data not Found!!
								@endforelse


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
								
							</div>
						</div>
						<div class="content-part">

							<h3 class="title"><a href="{{route('admission.details',$course->id)}}">{{$course->title}}</a></h3>
							<div class="des">
								{{ Illuminate\Support\Str::limit($course -> details, 100)}}
							</div>
							
							<div class="bottom-part">
								<div class="info-meta">
									
								</div>
								<div class="btn-part">
									<a href="{{route('admission.details',$course->id)}}"><i class="flaticon-right-arrow"></i></a>
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
