@extends('3i_school.layouts.master')

@section('title')
Teachers Profile
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
                    <h1 class="page-title">Team Single</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Home ></a>
                        </li>
                        <li class="active">Team Single</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Team Single Start -->
            <section class="sc-team-single pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Image Section -->
                        <div class="image-column col-lg-5 md-mb-50">
                            <div class="inner-column">
                                <div class="image">
                                    <img style="height: 520px; width:450px;"  src="{{ URL::to('/') }}/public/media/teacher/{{$single_teacher->photo}}" alt="" />
                                </div>
                                <div class="team-content text-center">
                                    <h3>{{$single_teacher->name}}</h3>
                                    <div class="text">Teacher {{$single_teacher->department}}</div>
                                </div>
                                <div class="social-box">
                                    <a href="{{$single_teacher->link_fb}}" class="fa fa-facebook-square"></a>
                                    <a href="{{$single_teacher->link_tw}}" class="fa fa-twitter-square"></a>
                                    <a href="{{$single_teacher->link_li}}" class="fa fa-linkedin-square"></a>
                                    <a href="{{$single_teacher->link_in}}" class="fa fa-instagram"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                            <div class="inner-column">
                                <h2>{{$single_teacher->name}}</h2>
                                <h4>A certified instructor from 3iSchooling</h4>

                                <ul class="personal-info">
                                    <li class="email">
                                        <span><i class="flaticon flaticon-mail"> </i> </span>
                                        <a href="mailto:{{$single_teacher->email}}">{{$single_teacher->email}}</a>
                                    </li>
                                    <li class="phone">
                                        <span><i class="flaticon flaticon-call"></i></span>
                                        <a href="tel:{{$single_teacher->phone}}"> {{$single_teacher->phone}}</a>
                                    </li>
                                </ul>
                                <!-- Student List -->

                                <h5>About Me</h5>
                                <p>{{$single_teacher->about}}</p>
                                <div class="team-skill mb-50 md-mb-0">
                                    <h3 class="skill-title">Our Teacher Skill:</h3>
                                    <div class="row">
                                        <div class="col-md-6 sm-mb-20">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$single_teacher->skill_bn}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$single_teacher->skill_bn}}%">
                                                    <span class="pb-label">Bangla</span>
                                                    <span class="pb-percent">{{$single_teacher->skill_bn}}%</span>
                                                </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$single_teacher->skill_en}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$single_teacher->skill_en}}%">
                                                    <span class="pb-label">English</span>
                                                    <span class="pb-percent">{{$single_teacher->skill_en}}%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$single_teacher->skill_sp}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$single_teacher->skill_sp}}%">
                                                    <span class="pb-label">Speaking</span>
                                                    <span class="pb-percent">{{$single_teacher->skill_sp}}%</span>
                                                </div>
                                            </div>
                                            <div class="progress rs-progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$single_teacher->skill_wr}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$single_teacher->skill_wr}}%">
                                                    <span class="pb-label">Writing</span>
                                                    <span class="pb-percent">{{$single_teacher->skill_wr}}%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team Single End -->




        </div>
        <!-- Main content End -->
@stop
