@extends('3i_school.layouts.master')

@section('title')
	All Courses
@stop

@section('content')

<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="sc-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('3i_school') }}/assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Course</h1>
            <ul>
                <li>
                    <a class="active" href="{{ route('home') }}">Home ></a>
                </li>
                <li class="active">Course</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Course Section Start -->
    <div id="sc-popular-courses" class="sc-popular-courses main-home pt-120 pb-110 md-pt-80 md-pb-70">
        <div class="container">
            <div class="row">

                @forelse ($cat as $course)

                <div class="col-lg-4 col-md-6 mb-30 loadcourse addcourse">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="#"><iframe width="100%" height="240" src="{{$course->link}}"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                <div class="course-price">
                                <a href="{{route('stem.course', $course->id)}}">
                                    <span class="price"></span>
                                </div>
                        </div>
                        <div class="content-part">
                            <h3 class="title"><a href="{{route('stem.course',$course->id)}}">{{$course->title}}</a></h3>
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
                                    <a href="{{route('stem.course',$course->id)}}"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @empty
                Data not Found!!
                @endforelse
            </div>


        <div id="loadmore" class="text-center mt-30">
            <a class="readon" href="#">Learn More <i class="flaticon flaticon-right-arrow"></i> </a>
        </div>
    </div>
</div>

@stop
