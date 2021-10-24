@extends('admin.layouts.admin-master')

@section('title')
Course Category
@stop

@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Course Category</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Course Category</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">


                        <form action="{{ route('admin.course.category.store') }}" method="POST" >
                            @csrf

                            <div class="form-group">
                            <label for="title">Course Category</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Course Categpry" required>
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
                                    <th width="40%">Category Name</th>
                                    <th width="40%">Slug</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category_list as $course)
                               <tr>



                                    <td>{{$loop->index +1}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->slug}}</td>

                                    <td>
                                        <div class="btn-group">


                                        <a class="btn button text-white" id="delete_btn" href="{{ route('admin.course.category.delete', $course->id) }}">
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
