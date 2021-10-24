@extends('3i_school.layouts.master')

@section('title')
Teachers Team
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
                    <h1 class="page-title">Team</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Home ></a>
                        </li>
                        <li class="active">Team</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Team Section Start -->
            <div class="sc-team team-style-1 pt-120 pb-90 md-pt-80 md-pb-50">
                <div class="container">
                    <div class="row">

                        @foreach ($all_teacher as $teachers)


                        <div class="col-lg-4 col-md-6 mb-30">
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
                </div>
            </div>
            <!-- Team Section End -->




        </div>
        <!-- Main content End -->
@stop
