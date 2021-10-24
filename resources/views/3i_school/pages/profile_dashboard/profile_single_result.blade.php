@extends('3i_school.layouts.user_dashboard_master')

@section('title')
	E-Learning Platform
@stop

@push('styles')


@endpush

@section('content')

	<!-- Main content Start -->



        <div class="row">
            <div class="col-md-12">
                    <h2 class="exam_title left_aligned">Introduction to PHP : Exam Results Summary</h2><hr>
                    <div class="form-group">
                        <button class="btn btn-primary pull-left" disabled="" href="javascript:void(0)"><i class="fa fa-download"></i> Download Certificate</button>
                          <a class="btn" href="https://www.linkedin.com/profile/add?startTask=Introduction to PHP" rel="nofollow" target="_blank" style="padding: 0;">
                            <img src="https://download.linkedin.com/desktop/add2profile/buttons/en_US.png " alt="LinkedIn Add to Profile button">
                            </a>
                        <a class="btn btn-warning pull-right" href="profilepreviousresult" style="margin-left:10px"><i class="fa fa-history"></i> My Exams History</a>
                        <a class="btn btn-success pull-right" href="{{route('admin.minquiz')}}"><i class="fa fa-repeat"></i> Retake Exam</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="card">
                        <div class="card-header bg-dark text-white">Exam Information</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody><tr><td width="20%">Name</td><td>Introduction to PHP</td> </tr>
                                <tr><td>Description</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend pretium justo, dignissim dictum ligula convallis</td> </tr>
                                <tr><td>Duration</td><td><span style="font-size: medium" class="label label-success">60 Minutes</span> </td> </tr>
                                <tr><td>Questions</td><td><span style="font-size: medium" class="label label-success">30 </span> </td> </tr>
                                <tr><td>Pass Mark</td><td><span style="font-size: medium" class="label label-success">70 %</span> </td> </tr>
                            </tbody></table>
                        </div>
                    </div>
                    <br>
                    <div class="card form-group">
                        <div class="card-header bg-dark text-white">Results Summary</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Attempted 5/5</label>
                                <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-info" style="width: 100%;">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Answered correctly 1/5</label>
                                <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-success" style="width: 20%">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Answered wrongly 4/5</label>
                                <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-danger" style="width: 80%">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                            <label>Duration Taken 0 minutes 30 seconds </label>
                                                                                            <div class="form-group">
                                <div class="progress" style="height:20px">
                                    <div class="progress-bar bg-warning" style="width: 1.6666666666667%">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your Score</label>
                                <p>
                                    <span style="font-size: medium" class="badge badge-danger">
                                    15%
                                    </span>
                                </p>
                            </div>
                            <label>Results Status</label>

                                <span style="font-size: medium" class="badge badge-lg badge-danger">
                                    Failed
                                </span>

                        </div>
                    </div>

                </div>
        </div>


  <!-- page-content" -->
@stop


