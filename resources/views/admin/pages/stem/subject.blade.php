@extends('admin.layouts.admin-master')

@section('title')
STEM Subject
@stop

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">STEM Subject</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>STEM Subject</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">


                        <form class="row" action="{{ route('admin.stem.subject.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-6">
                            <label for="title">STEM Subject</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Course Subject" required>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="title">STEM Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" required>
                            </div>
                            <div class="form-group col-md-12">
                            <label for="title">Subject Details</label>
                            <textarea name="details" class="form-control" id="details" placeholder="Course details here" style="width: 100%" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" id="add_btn" type="submit" value="Add">

                            </div>
                        </form>

                    </div>
                    @include('validate')
                    <div class="">

                        <div class="">

                            <table class="table table-striped">
                                <thead class="bg-light text-capitalize">
                                <tr>
                                    <th width="5%">Sl</th>
                                    <th width="10%">Subject Image</th>
                                    <th width="15%">Subject Name</th>
                                    <th width="15%">Slug</th>
                                    <th width="50%">Subject Details</th>
                                    <th width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subject_list as $course)
                               <tr>



                                    <td>{{$loop->index +1}}</td>
                                    <td><img style="width: 100px; height: 100px;" src="{{ URL::to('/') }}/public/3i_school/img/STEM/{{
                                        $course->photo}}" alt=""></td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->slug}}</td>
                                    <td>{{$course->brief_details}}</td>

                                    <td>
                                        <div class="btn-group">


                                        <a class="btn button text-white" id="delete_btn" href="{{ route('admin.stem.subject.delete', $course->id) }}">
                                            <i class="fa fa-trash"></i>
                                    </a>
                                    </div>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- Your Profile Views Chart END-->
                </div>
            </div>
        </main>
        @stop
