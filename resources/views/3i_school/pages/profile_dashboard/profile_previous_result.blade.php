
@extends('3i_school.layouts.user_dashboard_master')

@section('title')
	E-Learning Platform
@stop

@push('styles')


@endpush

@section('content')

	<!-- Main content Start -->
	<div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-dark text-white">{{Auth::user()-> name}}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">Date of Exam 04/09/2021<br><br></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <label>Your Score 0%</label>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar bg-success" style="width:0%">
                                <span class="sr-only">0%</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 form-group">
                        <label>Pass Mark 5%</label>
                        <div class="progress" style="height: 20px">
                            <div class="progress-bar" style="width: 5%">
                                <span class="sr-only">5%</span>
                            </div>
                        </div>
                    </div>
                </div><!--/row -->
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p><a class="btn btn-warning" href="profilesingleresult"><i class="fa fa-eye"></i> View Results</a></p>
                    </div>

                    <div class="col-sm-4 col-xs-12"><p><a class="btn btn-success" href="{{route('admin.minquiz')}}"><i class="fa fa-repeat"></i> Retake Exam</a></p></div>
                </div>
            </div>
        </div>
    </div>
  <!-- page-content" -->
@stop
